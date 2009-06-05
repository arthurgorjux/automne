<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | Automne (TM)														  |
// +----------------------------------------------------------------------+
// | Copyright (c) 2000-2009 WS Interactive								  |
// +----------------------------------------------------------------------+
// | Automne is subject to version 2.0 or above of the GPL license.		  |
// | The license text is bundled with this package in the file			  |
// | LICENSE-GPL, and is available through the world-wide-web at		  |
// | http://www.gnu.org/copyleft/gpl.html.								  |
// +----------------------------------------------------------------------+
// | Author: S�bastien Pauchet <sebastien.pauchet@ws-interactive.fr>      |
// +----------------------------------------------------------------------+
//
// $Id: item.php,v 1.3 2009/06/05 15:01:07 sebastien Exp $

/**
  * PHP page : Load polymod item interface
  * Used accross an Ajax request. Render a polymod item for edition
  *
  * @package CMS
  * @subpackage admin
  * @author S�bastien Pauchet <sebastien.pauchet@ws-interactive.fr>
  */

require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_admin.php");

define("MESSAGE_PAGE_TITLE_MODULE", 248);
define("MESSAGE_TOOLBAR_HELP",1073);
define("MESSAGE_PAGE_SAVE", 952);
define("MESSAGE_PAGE_FIELD_DATE_COMMENT", 148);
define("MESSAGE_PAGE_FIELD_PUBDATE_BEG", 134);
define("MESSAGE_PAGE_FIELD_PUBDATE_END", 135);

//Message of polymod module
define("MESSAGE_PAGE_TITLE", 2);
define("MESSAGE_PAGE_SUBTITLE_WEBSITE_PUBS", 57);

//load interface instance
$view = CMS_view::getInstance();
//set default display mode for this page
$view->setDisplayMode(CMS_view::SHOW_RAW);

$winId = sensitiveIO::request('winId');
$objectId = sensitiveIO::request('type', 'sensitiveIO::isPositiveInteger');
$itemId = sensitiveIO::request('item', 'sensitiveIO::isPositiveInteger');
$codename = sensitiveIO::request('module', CMS_modulesCatalog::getAllCodenames());

//instanciate module
$cms_module = CMS_modulesCatalog::getByCodename($codename);

//CHECKS user has module clearance
if (!$cms_user->hasModuleClearance($codename, CLEARANCE_MODULE_EDIT)) {
	CMS_grandFather::raiseError('Error, user has no rights on module : '.$codename);
	$view->show();
}

//load object
if ($objectId) {
	$object = new CMS_poly_object_definition($objectId);
	$objectLabel = sensitiveIO::sanitizeJSString($object->getLabel($cms_language));
}
if (!isset($object) || $object->hasError()) {
	CMS_grandFather::raiseError('Error, objectId does not exists or has an error : '.$objectId);
	$view->show();
}
//load item if any
if ($itemId) {
	$item = new CMS_poly_object($objectId, $itemId);
	$itemLabel = sensitiveIO::sanitizeJSString($item->getLabel());
	if ($object->isPrimaryResource()) {
		//put a lock on the resource or warn user if item is already locked
		if ($lock = $item->getLock()) {
			$lockUser = CMS_profile_usersCatalog::getById($lock);
			$lockDate = $item->getLockDate();
			$date = $lockDate ? $lockDate->getLocalizedDate($cms_language->getDateFormat().' � H:i:s') : '';
			$name = sensitiveIO::sanitizeJSString($lockUser->getFullName());
			CMS_grandFather::raiseError('Error, item '.$itemId.' is locked by '.$lockUser->getFullName());
			$jscontent = "
			var window = Ext.getCmp('{$winId}');
			if (window) {
				window.close();
			}
			Automne.message.popup({
				msg: 				'L\'�l�ment \'{$itemLabel}\' que vous cherchez � �diter est v�rouill� par {$name} le {$date}.',
				buttons: 			Ext.MessageBox.OK,
				closable: 			false,
				icon: 				Ext.MessageBox.ERROR
			});";
			$view->addJavascript($jscontent);
			$view->show();
		} else {
			$item->lock($cms_user);
		}
	}
	//check user rights on item
	if (!$item->userHasClearance($cms_user, CLEARANCE_MODULE_EDIT)) {
		CMS_grandFather::raiseError('Error, user has no rights item '.$itemId);
		$jscontent = "
		var window = Ext.getCmp('{$winId}');
		if (window) {
			window.close();
		}
		Automne.message.popup({
			msg: 				'Vous n\'avez pas le droit d\'�diter l\'�l�ment \'{$itemLabel}\'.',
			buttons: 			Ext.MessageBox.OK,
			closable: 			false,
			icon: 				Ext.MessageBox.ERROR
		});";
		$view->addJavascript($jscontent);
		$view->show();
	}
} else { //instanciate clean object (creation)
	$item = new CMS_poly_object($object->getID(), '');
}

$winLabel = sensitiveIO::sanitizeJSString($cms_language->getMessage(MESSAGE_PAGE_TITLE_MODULE, array($cms_module->getLabel($cms_language)))." :: ".$cms_language->getMessage(MESSAGE_PAGE_TITLE, array($object->getLabel($cms_language)), MOD_POLYMOD_CODENAME));

$fieldsObjects = $item->getFieldsObjects();
$itemFields = '';
foreach ($fieldsObjects as $fieldID => $aFieldObject) {
	$fieldAdmin = $item->getHTMLAdmin($fieldID, $cms_language,'');
	if (is_array($fieldAdmin)) {
		$itemFields .= sensitiveIO::jsonEncode($fieldAdmin).',';
	}
}
//do some search and replace to allow use of js functions in returned code
$itemFields = str_replace('"scope":"this"', '"scope":this', $itemFields);
function replaceCallBack($parts) {
	return 'function('.str_replace(array('\"','\/'), array('"', '/'), $parts[1]).'},';
}
$itemFields = preg_replace_callback('#"function\((.*)}",#U', 'replaceCallBack', $itemFields);

//Append pub dates if object is a primary resource
if ($object->isPrimaryResource()) {
	if (!$item->getID()) {
		$dt = new CMS_date();
		$dt->setDebug(false);
		$dt->setNow();
		$pubStart = $dt->getLocalizedDate($cms_language->getDateFormat());
	} else {
		$pubStart = $item->getPublicationDateStart(false)->getLocalizedDate($cms_language->getDateFormat());
	}
	$pubEnd = $item->getPublicationDateEnd(false)->getLocalizedDate($cms_language->getDateFormat());
	$dateMask = $cms_language->getDateFormatMask();
	$itemFields .= "{
		title:			'{$cms_language->getJSMessage(MESSAGE_PAGE_SUBTITLE_WEBSITE_PUBS, false, MOD_POLYMOD_CODENAME)}',
		xtype:			'fieldset',
		autoHeight:		true,
		defaultType:	'datefield',
		labelWidth:		140,
		defaults:		{
			width:			100,
			anchor:			'',
			format:			'{$cms_language->getDateFormat()}'
		},
		items:			[{
			fieldLabel:	'<span ext:qtip=\"{$cms_language->getJSMessage(MESSAGE_PAGE_FIELD_DATE_COMMENT, array($dateMask))}\" class=\"atm-help\"><span class=\"atm-red\">*</span> {$cms_language->getJSMessage(MESSAGE_PAGE_FIELD_PUBDATE_BEG)}</span>',
			name:		'pubStart',
			allowBlank:	false,
			value:		'{$pubStart}'
		},{
			fieldLabel:	'<span ext:qtip=\"{$cms_language->getJSMessage(MESSAGE_PAGE_FIELD_DATE_COMMENT, array($dateMask))}\" class=\"atm-help\">{$cms_language->getJSMessage(MESSAGE_PAGE_FIELD_PUBDATE_END)}</span>',
			name:		'pubEnd',
			allowBlank:	true,
			value:		'{$pubEnd}'
		}]
	},";
}

//remove last comma
$itemFields = substr($itemFields, 0, -1);

$itemControler = PATH_ADMIN_MODULES_WR.'/'.MOD_POLYMOD_CODENAME.'/items-controler.php';

$jscontent = <<<END
	var window = Ext.getCmp('{$winId}');
	//set window title
	window.setTitle('{$winLabel}');
	//set help button on top of page
	window.tools['help'].show();
	//add a tooltip on button
	var propertiesTip = new Ext.ToolTip({
		target:		 window.tools['help'],
		title:			 '{$cms_language->getJsMessage(MESSAGE_TOOLBAR_HELP)}',
		html:			 'Sur cette page, vous pouvez cr�er ou modifier les donn�es de l\'�l�ment {$objectLabel}',
		dismissDelay:	0
	});
	
	//create center panel
	var center = new Ext.Panel({
		region:				'center',
		border:				false,
		autoScroll:			true,
		buttonAlign:		'center',
		items: [{
			id:				'{$winId}-form',
			layout: 		'form',
			bodyStyle: 		'padding:10px',
			border:			false,
			autoWidth:		true,
			autoHeight:		true,
			xtype:			'atmForm',
			url:			'{$itemControler}',
			labelAlign:		'right',
			defaults: {
				xtype:			'textfield',
				anchor:			'97%',
				allowBlank:		false
			},
			items:[{$itemFields}]
		}],
		buttons:[{
			text:			'{$cms_language->getJSMessage(MESSAGE_PAGE_SAVE)}',
			xtype:			'button',
			name:			'submitAdmin',
			handler:		function() {
				var form = Ext.getCmp('{$winId}-form').getForm();
				if (form.isValid()) {
					form.submit({
						params:{
							action:		'save',
							module:		'{$codename}',
							type:		'{$objectId}',
							item:		window.objectId
						},
						success:function(form, action){
							if (action.result.success == false) {
								Automne.message.show('Erreur durant l\'enregistrement de l\'�l�ment ...', '', window);
							}
							//update fields values if any is returned in response
							//extract updated json datas from response
							var jsonResponse = '{}';
							if (action.response.responseXML && action.response.responseXML.getElementsByTagName && action.response.responseXML.getElementsByTagName('jsoncontent').length) {
								try{
									jsonResponse = Ext.decode(action.response.responseXML.getElementsByTagName('jsoncontent').item(0).firstChild.nodeValue);
								} catch(e) {
									jsonResponse = {};
									pr(e, 'error');
									Automne.server.failureResponse(response, options, e, 'json');
								}
							}
							window.objectId = jsonResponse.id;
							if (jsonResponse.datas) {
								for(var i in jsonResponse.datas) {
									if (i != 'success' && form.findField(i)) {
										form.findField(i).setValue(jsonResponse.datas[i]);
									}
								}
							}
						},
						scope:this
					});
				} else {
					Automne.message.show('Le formulaire est incomplet ou poss�de des valeurs incorrectes ...', '', window);
				}
			},
			scope:			this
		}]
	});
	window.add(center);
	setTimeout(function(){
		//redo windows layout
		window.doLayout();
		if (Ext.isIE7) {
			center.syncSize();
		}
	}, 100);
END;
$view->addJavascript($jscontent);
$view->show();
?>