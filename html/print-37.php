<<<<<<< TREE
<<<<<<< TREE
<?php //Generated on Thu, 11 Mar 2010 16:28:25 +0100 by Automne (TM) 4.0.1
require_once(dirname(__FILE__).'/../cms_rc_frontend.php');
=======
<?php //Generated on Fri, 19 Mar 2010 15:24:53 +0100 by Automne (TM) 4.0.1
=======
<?php //Generated on Mon, 24 May 2010 17:00:13 +0200 by Automne (TM) 4.0.2
>>>>>>> MERGE-SOURCE
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
>>>>>>> MERGE-SOURCE
if (!isset($cms_page_included) && !$_POST && !$_GET) {
<<<<<<< TREE
	CMS_view::redirect('http://test-folder/trunk/web/demo/print-37-droit-de-validation.php', true, 301);
=======
	CMS_view::redirect('http://127.0.0.1/web/demo/print-37-droit-de-validation.php', true, 301);
>>>>>>> MERGE-SOURCE
}
 ?>
<<<<<<< TREE
<?php require_once(PATH_REALROOT_FS.'/automne/classes/polymodFrontEnd.php');  ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";   ?>
=======
<?php require_once($_SERVER["DOCUMENT_ROOT"].'/automne/classes/polymodFrontEnd.php');  ?><?php /* Template [print.xml] */   ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";   ?>
>>>>>>> MERGE-SOURCE
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<?php echo '<meta http-equiv="Content-Type" content="text/html; charset='.strtoupper(APPLICATION_DEFAULT_ENCODING).'" />';    ?>
	<title>Automne 4 : Workflow de publication</title>
	<link rel="stylesheet" type="text/css" href="/css/print.css" />
</head>
<body>
<h1>Workflow de publication</h1>
<h3>

		&raquo;&nbsp;Fonctionnalités
		
		&raquo;&nbsp;Workflow de publication
		
</h3>
<?php /* Start clientspace [first] */   ?><?php /* Start row [200 Texte - r44_200_Texte.xml] */   ?>

<?php /* End row [200 Texte - r44_200_Texte.xml] */   ?><?php /* Start row [230 Texte et Média à Droite - r69_Texte_-_Media_a_droite.xml] */   ?>
	<div class="imgRight">
		<?php $cache_db001bc5673607e9c603b24b67d11716 = new CMS_cache('db001bc5673607e9c603b24b67d11716', 'polymod', 'auto', true);
if ($cache_db001bc5673607e9c603b24b67d11716->exist()):
	//Get content from cache
	$cache_db001bc5673607e9c603b24b67d11716_content = $cache_db001bc5673607e9c603b24b67d11716->load();
else:
	$cache_db001bc5673607e9c603b24b67d11716->start();
	   ?>
<?php /*Generated on Mon, 24 May 2010 17:00:13 +0200 by Automne (TM) 4.0.2 */
if(!APPLICATION_ENFORCES_ACCESS_CONTROL || (isset($cms_user) && is_a($cms_user, 'CMS_profile_user') && $cms_user->hasModuleClearance('pmedia', CLEARANCE_MODULE_VIEW))){
	$content = "";
	$replace = "";
	$atmIfResults = array();
	if (!isset($objectDefinitions) || !is_array($objectDefinitions)) $objectDefinitions = array();
	$blockAttributes = array (
		'search' =>
		array (
			'mediaresult' =>
			array (
				'item' => '29',
			),
		),
		'module' => 'pmedia',
		'language' => 'fr',
	);
	$parameters['pageID'] = '37';
	if (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != 'fr')) $cms_language = new CMS_language('fr');
	$parameters['public'] = true;
	if (isset($parameters['item'])) {$parameters['objectID'] = $parameters['item']->getObjectID();} elseif (isset($parameters['itemID']) && sensitiveIO::isPositiveInteger($parameters['itemID']) && !isset($parameters['objectID'])) $parameters['objectID'] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters['itemID']);
	if (!isset($object) || !is_array($object)) $object = array();
	if (!isset($object[2])) $object[2] = new CMS_poly_object(2, 0, array(), $parameters['public']);
	$parameters['module'] = 'pmedia';
<<<<<<< TREE
<<<<<<< TREE
	//SEARCH mediaresult TAG START 16_73e008
=======
	//SEARCH mediaresult TAG START 16_e47c75
>>>>>>> MERGE-SOURCE
=======
	//SEARCH mediaresult TAG START 16_938166
>>>>>>> MERGE-SOURCE
	$objectDefinition_mediaresult = '2';
	if (!isset($objectDefinitions[$objectDefinition_mediaresult])) {
		$objectDefinitions[$objectDefinition_mediaresult] = new CMS_poly_object_definition($objectDefinition_mediaresult);
	}
	//public search ?
<<<<<<< TREE
<<<<<<< TREE
	$public_16_73e008 = isset($public_search) ? $public_search : false;
=======
	$public_16_e47c75 = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
=======
	$public_16_938166 = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
	//get search params
<<<<<<< TREE
<<<<<<< TREE
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_16_73e008);
=======
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_16_e47c75);
>>>>>>> MERGE-SOURCE
=======
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_16_938166);
>>>>>>> MERGE-SOURCE
	$launchSearch_mediaresult = true;
	//add search conditions if any
	if (isset($blockAttributes['search']['mediaresult']['item'])) {
<<<<<<< TREE
<<<<<<< TREE
		$values_17_00e853 = array (
=======
		$values_17_e7f948 = array (
>>>>>>> MERGE-SOURCE
=======
		$values_17_fe6ef3 = array (
>>>>>>> MERGE-SOURCE
			'search' => 'mediaresult',
			'type' => 'item',
			'value' => 'block',
			'mandatory' => 'true',
		);
<<<<<<< TREE
<<<<<<< TREE
		$values_17_00e853['value'] = $blockAttributes['search']['mediaresult']['item'];
		if ($values_17_00e853['type'] == 'publication date after' || $values_17_00e853['type'] == 'publication date before') {
=======
		$values_17_e7f948['value'] = $blockAttributes['search']['mediaresult']['item'];
		if ($values_17_e7f948['type'] == 'publication date after' || $values_17_e7f948['type'] == 'publication date before') {
>>>>>>> MERGE-SOURCE
=======
		$values_17_fe6ef3['value'] = $blockAttributes['search']['mediaresult']['item'];
		if ($values_17_fe6ef3['type'] == 'publication date after' || $values_17_fe6ef3['type'] == 'publication date before') {
>>>>>>> MERGE-SOURCE
			//convert DB format to current language format
			$dt = new CMS_date();
<<<<<<< TREE
<<<<<<< TREE
			$dt->setFromDBValue($values_17_00e853['value']);
			$values_17_00e853['value'] = $dt->getLocalizedDate($cms_language->getDateFormat());
=======
			$dt->setFromDBValue($values_17_e7f948['value']);
			$values_17_e7f948['value'] = $dt->getLocalizedDate($cms_language->getDateFormat());
>>>>>>> MERGE-SOURCE
=======
			$dt->setFromDBValue($values_17_fe6ef3['value']);
			$values_17_fe6ef3['value'] = $dt->getLocalizedDate($cms_language->getDateFormat());
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
<<<<<<< TREE
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, $values_17_00e853)) ? $launchSearch_mediaresult : false;
=======
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, $values_17_e7f948)) ? $launchSearch_mediaresult : false;
>>>>>>> MERGE-SOURCE
=======
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, $values_17_fe6ef3)) ? $launchSearch_mediaresult : false;
>>>>>>> MERGE-SOURCE
	} elseif (true == true) {
		//search parameter is mandatory and no value found
		$launchSearch_mediaresult = false;
	}
<<<<<<< TREE
<<<<<<< TREE
	//RESULT mediaresult TAG START 18_54362b
=======
	//RESULT mediaresult TAG START 18_a2ee5a
>>>>>>> MERGE-SOURCE
=======
	//RESULT mediaresult TAG START 18_c1c284
>>>>>>> MERGE-SOURCE
	//launch search mediaresult if not already done
	if($launchSearch_mediaresult && !isset($results_mediaresult)) {
		if (isset($search_mediaresult)) {
			$results_mediaresult = $search_mediaresult->search();
		} else {
			CMS_grandFather::raiseError("Malformed atm-result tag : can't use this tag outside of atm-search \"mediaresult\" tag ...");
			$results_mediaresult = array();
		}
	} elseif (!$launchSearch_mediaresult) {
		$results_mediaresult = array();
	}
	if ($results_mediaresult) {
<<<<<<< TREE
<<<<<<< TREE
		$object_18_54362b = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_18_54362b = $replace; //save previous replace vars if any
		$count_18_54362b = 0;
		$content_18_54362b = $content; //save previous content var if any
		$maxPages_18_54362b = $search_mediaresult->getMaxPages();
		$maxResults_18_54362b = $search_mediaresult->getNumRows();
=======
		$object_18_a2ee5a = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_18_a2ee5a = $replace; //save previous replace vars if any
		$count_18_a2ee5a = 0;
		$content_18_a2ee5a = $content; //save previous content var if any
		$maxPages_18_a2ee5a = $search_mediaresult->getMaxPages();
		$maxResults_18_a2ee5a = $search_mediaresult->getNumRows();
>>>>>>> MERGE-SOURCE
=======
		$object_18_c1c284 = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_18_c1c284 = $replace; //save previous replace vars if any
		$count_18_c1c284 = 0;
		$content_18_c1c284 = $content; //save previous content var if any
		$maxPages_18_c1c284 = $search_mediaresult->getMaxPages();
		$maxResults_18_c1c284 = $search_mediaresult->getNumRows();
>>>>>>> MERGE-SOURCE
		foreach ($results_mediaresult as $object[$objectDefinition_mediaresult]) {
			$content = "";
			$replace["atm-search"] = array (
				"{resultid}" 	=> (isset($resultID_mediaresult)) ? $resultID_mediaresult : $object[$objectDefinition_mediaresult]->getID(),
<<<<<<< TREE
<<<<<<< TREE
				"{firstresult}" => (!$count_18_54362b) ? 1 : 0,
				"{lastresult}" 	=> ($count_18_54362b == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_18_54362b+1),
				"{maxpages}"    => $maxPages_18_54362b,
=======
				"{firstresult}" => (!$count_18_a2ee5a) ? 1 : 0,
				"{lastresult}" 	=> ($count_18_a2ee5a == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_18_a2ee5a+1),
				"{maxpages}"    => $maxPages_18_a2ee5a,
>>>>>>> MERGE-SOURCE
=======
				"{firstresult}" => (!$count_18_c1c284) ? 1 : 0,
				"{lastresult}" 	=> ($count_18_c1c284 == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_18_c1c284+1),
				"{maxpages}"    => $maxPages_18_c1c284,
>>>>>>> MERGE-SOURCE
				"{currentpage}" => ($search_mediaresult->getAttribute('page')+1),
<<<<<<< TREE
<<<<<<< TREE
				"{maxresults}"  => $maxResults_18_54362b,
=======
				"{maxresults}"  => $maxResults_18_a2ee5a,
>>>>>>> MERGE-SOURCE
=======
				"{maxresults}"  => $maxResults_18_c1c284,
				"{altclass}"    => (($count_18_c1c284+1) % 2) ? "CMS_odd" : "CMS_even",
>>>>>>> MERGE-SOURCE
			);
<<<<<<< TREE
<<<<<<< TREE
			//IF TAG START 19_fa0621
=======
			//IF TAG START 19_8bbea0
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
			//IF TAG START 19_1822b8
			$ifcondition_19_1822b8 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition_19_1822b8) {
				$func_19_1822b8 = create_function("","return (".$ifcondition_19_1822b8.");");
				if ($func_19_1822b8()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"T&eacute;l&eacute;charger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\">";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 20_a91f52
=======
					//IF TAG START 20_a84844
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 20_b52fdb
					$ifcondition_20_b52fdb = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition_20_b52fdb) {
						$func_20_b52fdb = create_function("","return (".$ifcondition_20_b52fdb.");");
						if ($func_20_b52fdb()) {
>>>>>>> MERGE-SOURCE
							$content .="<img src=\"".$object[2]->objectValues(9)->getValue('fileIcon','')."\" alt=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" title=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" />";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 20_a91f52
=======
					}//IF TAG END 20_a84844
>>>>>>> MERGE-SOURCE
=======
						unset($func_20_b52fdb);
					}
					unset($ifcondition_20_b52fdb);
					//IF TAG END 20_b52fdb
>>>>>>> MERGE-SOURCE
					$content .=" ".$object[2]->getValue('label','')."</a>
					";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 21_222fcf
=======
					//IF TAG START 21_702d03
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 21_42c55d
					$ifcondition_21_42c55d = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_21_42c55d) {
						$func_21_42c55d = create_function("","return (".$ifcondition_21_42c55d.");");
						if ($func_21_42c55d()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<div class=\"shadow\">
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
							</div>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 21_222fcf
=======
					}//IF TAG END 21_702d03
>>>>>>> MERGE-SOURCE
=======
						unset($func_21_42c55d);
					}
					unset($ifcondition_21_42c55d);
					//IF TAG END 21_42c55d
>>>>>>> MERGE-SOURCE
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 19_fa0621
			//IF TAG START 22_42b697
=======
			}//IF TAG END 19_8bbea0
			//IF TAG START 22_ebb121
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
<<<<<<< TREE
					//IF TAG START 23_58ef10
=======
					//IF TAG START 23_c02d97
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
				unset($func_19_1822b8);
			}
			unset($ifcondition_19_1822b8);
			//IF TAG END 19_1822b8
			//IF TAG START 22_848cbc
			$ifcondition_22_848cbc = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
			if ($ifcondition_22_848cbc) {
				$func_22_848cbc = create_function("","return (".$ifcondition_22_848cbc.");");
				if ($func_22_848cbc()) {
					//IF TAG START 23_f0f584
					$ifcondition_23_f0f584 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_23_f0f584) {
						$func_23_f0f584 = create_function("","return (".$ifcondition_23_f0f584.");");
						if ($func_23_f0f584()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<script type=\"text/javascript\">
							swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml', startimage:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."'}, {allowfullscreen:true, wmode:'transparent'}, false);
							</script>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 23_58ef10
					//IF TAG START 24_f34418
=======
					}//IF TAG END 23_c02d97
					//IF TAG START 24_ac18aa
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
						unset($func_23_f0f584);
					}
					unset($ifcondition_23_f0f584);
					//IF TAG END 23_f0f584
					//IF TAG START 24_0b546e
					$ifcondition_24_0b546e = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_24_0b546e) {
						$func_24_0b546e = create_function("","return (".$ifcondition_24_0b546e.");");
						if ($func_24_0b546e()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<script type=\"text/javascript\">
							swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml'}, {allowfullscreen:true, wmode:'transparent'}, false);
							</script>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 24_f34418
=======
					}//IF TAG END 24_ac18aa
>>>>>>> MERGE-SOURCE
=======
						unset($func_24_0b546e);
					}
					unset($ifcondition_24_0b546e);
					//IF TAG END 24_0b546e
>>>>>>> MERGE-SOURCE
					$content .="
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-video\" style=\"width:320px;height:200px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 22_42b697
			//IF TAG START 25_77e6c9
=======
			}//IF TAG END 22_ebb121
			//IF TAG START 25_679bc8
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
				unset($func_22_848cbc);
			}
			unset($ifcondition_22_848cbc);
			//IF TAG END 22_848cbc
			//IF TAG START 25_46dacf
			$ifcondition_25_46dacf = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
			if ($ifcondition_25_46dacf) {
				$func_25_46dacf = create_function("","return (".$ifcondition_25_46dacf.");");
				if ($func_25_46dacf()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<script type=\"text/javascript\">
					swfobject.embedSWF('/automne/playermp3/player_mp3.swf', 'media-".$object[2]->getValue('id','')."', '200', '20', '9.0.0', '/automne/swfobject/expressInstall.swf', {mp3:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playermp3/config_playermp3.xml'}, {wmode:'transparent'}, false);
					</script>
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-audio\" style=\"width:200px;height:20px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 26_cef916
=======
					//IF TAG START 26_4cdf7b
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 26_1fbc8d
					$ifcondition_26_1fbc8d = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_26_1fbc8d) {
						$func_26_1fbc8d = create_function("","return (".$ifcondition_26_1fbc8d.");");
						if ($func_26_1fbc8d()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<div class=\"shadow\">
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
							</div>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 26_cef916
=======
					}//IF TAG END 26_4cdf7b
>>>>>>> MERGE-SOURCE
=======
						unset($func_26_1fbc8d);
					}
					unset($ifcondition_26_1fbc8d);
					//IF TAG END 26_1fbc8d
>>>>>>> MERGE-SOURCE
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 25_77e6c9
			//IF TAG START 27_8f5441
=======
			}//IF TAG END 25_679bc8
			//IF TAG START 27_bd29d2
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
				unset($func_25_46dacf);
			}
			unset($ifcondition_25_46dacf);
			//IF TAG END 25_46dacf
			//IF TAG START 27_ecd0cc
			$ifcondition_27_ecd0cc = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition_27_ecd0cc) {
				$func_27_ecd0cc = create_function("","return (".$ifcondition_27_ecd0cc.");");
				if ($func_27_ecd0cc()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<div class=\"shadow\">
					";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 28_969bb5
=======
					//IF TAG START 28_8d9bd0
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 28_2cc7ea
					$ifcondition_28_2cc7ea = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_28_2cc7ea) {
						$func_28_2cc7ea = create_function("","return (".$ifcondition_28_2cc7ea.");");
						if ($func_28_2cc7ea()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" onclick=\"javascript:CMS_openPopUpImage('imagezoom.php?location=public&amp;module=pmedia&amp;file=".$object[2]->objectValues(9)->getValue('filename','')."&amp;label=".$object[2]->getValue('label','js')."');return false;\" target=\"_blank\" title=\"Voir l'image '".$object[2]->getValue('label','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" /></a>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 28_969bb5
					//IF TAG START 29_356a39
=======
					}//IF TAG END 28_8d9bd0
					//IF TAG START 29_b6d93a
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
						unset($func_28_2cc7ea);
					}
					unset($ifcondition_28_2cc7ea);
					//IF TAG END 28_2cc7ea
					//IF TAG START 29_82d94e
					$ifcondition_29_82d94e = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_29_82d94e) {
						$func_29_82d94e = create_function("","return (".$ifcondition_29_82d94e.");");
						if ($func_29_82d94e()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" style=\"max-width:200px;\" />
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 29_356a39
=======
					}//IF TAG END 29_b6d93a
>>>>>>> MERGE-SOURCE
=======
						unset($func_29_82d94e);
					}
					unset($ifcondition_29_82d94e);
					//IF TAG END 29_82d94e
>>>>>>> MERGE-SOURCE
					$content .="
					</div>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 27_8f5441
			$count_18_54362b++;
=======
			}//IF TAG END 27_bd29d2
			$count_18_a2ee5a++;
>>>>>>> MERGE-SOURCE
=======
				unset($func_27_ecd0cc);
			}
			unset($ifcondition_27_ecd0cc);
			//IF TAG END 27_ecd0cc
			$count_18_c1c284++;
>>>>>>> MERGE-SOURCE
			//do all result vars replacement
<<<<<<< TREE
<<<<<<< TREE
			$content_18_54362b.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
=======
			$content_18_a2ee5a.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
=======
			$content_18_c1c284.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
<<<<<<< TREE
		$content = $content_18_54362b; //retrieve previous content var if any
		$replace = $replace_18_54362b; //retrieve previous replace vars if any
		$object[$objectDefinition_mediaresult] = $object_18_54362b; //retrieve previous object search if any
=======
		$content = $content_18_a2ee5a; //retrieve previous content var if any
		$replace = $replace_18_a2ee5a; //retrieve previous replace vars if any
		$object[$objectDefinition_mediaresult] = $object_18_a2ee5a; //retrieve previous object search if any
>>>>>>> MERGE-SOURCE
=======
		$content = $content_18_c1c284; //retrieve previous content var if any
		unset($content_18_c1c284);
		$replace = $replace_18_c1c284; //retrieve previous replace vars if any
		unset($replace_18_c1c284);
		$object[$objectDefinition_mediaresult] = $object_18_c1c284; //retrieve previous object search if any
		unset($object_18_c1c284);
>>>>>>> MERGE-SOURCE
	}
<<<<<<< TREE
<<<<<<< TREE
	//RESULT mediaresult TAG END 18_54362b
=======
	//RESULT mediaresult TAG END 18_a2ee5a
>>>>>>> MERGE-SOURCE
=======
	//RESULT mediaresult TAG END 18_c1c284
>>>>>>> MERGE-SOURCE
	//destroy search and results mediaresult objects
	unset($search_mediaresult);
	unset($results_mediaresult);
<<<<<<< TREE
<<<<<<< TREE
	//SEARCH mediaresult TAG END 16_73e008
=======
	//SEARCH mediaresult TAG END 16_e47c75
>>>>>>> MERGE-SOURCE
	echo CMS_polymod_definition_parsing::replaceVars($content, $replace);
}
=======
	//SEARCH mediaresult TAG END 16_938166
	$content = CMS_polymod_definition_parsing::replaceVars($content, $replace);
	$content .= '<!--{elements:'.base64_encode(serialize(array (
		'module' =>
		array (
			0 => 'pmedia',
		),
	))).'}-->';
	echo $content;
	unset($content);}
	   ?>
	<?php $cache_db001bc5673607e9c603b24b67d11716_content = $cache_db001bc5673607e9c603b24b67d11716->endSave();
endif;
unset($cache_db001bc5673607e9c603b24b67d11716);
echo $cache_db001bc5673607e9c603b24b67d11716_content;
unset($cache_db001bc5673607e9c603b24b67d11716_content);
>>>>>>> MERGE-SOURCE
   ?>

	</div>
	
<<<<<<< TREE
		<div class="text"><h3>Un syst&egrave;me d'alerte email automatique informe les validateurs des modifications qui ont &eacute;t&eacute; op&eacute;r&eacute; sur le site.&nbsp;</h3> <p>Le validateur peut alors v&eacute;rifier les modifications faites sur le contenu et les accepter, les refuser ou les modifier.</p> <p>Un syst&egrave;me d'ic&ocirc;nes simple et clair permet &agrave; tout moment de connaitre le statut des &eacute;l&eacute;ments : si ils sont publi&eacute;s, d&eacute;publi&eacute;s, ou attente d'une validation.</p> <p>La publication en ligne des modifications n'est effective que lorsqu'elles sont approuv&eacute;es par le validateur. Ce droit particulier est param&eacute;trable dans la <a href="http://test-folder/trunk/web/demo/28-administration.php">gestion des utilisateurs.</a></p></div>
=======
		<div class="text"><h3>Un syst&egrave;me d'alerte email automatique informe les validateurs des modifications qui ont &eacute;t&eacute; op&eacute;r&eacute; sur le site.&nbsp;</h3> <p>Le validateur peut alors v&eacute;rifier les modifications faites sur le contenu et les accepter, les refuser ou les modifier.</p> <p>Un syst&egrave;me d'ic&ocirc;nes simple et clair permet &agrave; tout moment de connaitre le statut des &eacute;l&eacute;ments : si ils sont publi&eacute;s, d&eacute;publi&eacute;s, ou attente d'une validation.</p> <p>La publication en ligne des modifications n'est effective que lorsqu'elles sont approuv&eacute;es par le validateur. Ce droit particulier est param&eacute;trable dans la <a href="http://127.0.0.1/web/demo/28-administration.php">gestion des utilisateurs.</a></p></div>
>>>>>>> MERGE-SOURCE
		<div class="spacer"></div>
	
<?php /* End row [230 Texte et Média à Droite - r69_Texte_-_Media_a_droite.xml] */   ?><?php /* End clientspace [first] */   ?><br />
<hr />
<div align="center">
	<small>
		
		
<<<<<<< TREE
				Page  "Workflow de publication" (http://test-folder/trunk/web/demo/37-droit-de-validation.php)
=======
				Page  "Workflow de publication" (http://127.0.0.1/web/demo/37-droit-de-validation.php)
>>>>>>> MERGE-SOURCE
				<br />
		Tir&eacute; du site http://<?php echo $_SERVER["HTTP_HOST"];    ?>
	</small>
</div>
<script language="JavaScript">window.print();</script>
<?php if (SYSTEM_DEBUG && STATS_DEBUG) {view_stat();}   ?>
</body>
</html>