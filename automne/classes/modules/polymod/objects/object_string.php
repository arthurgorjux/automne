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
// | Author: Sébastien Pauchet <sebastien.pauchet@ws-interactive.fr>      |
// +----------------------------------------------------------------------+
//
// $Id: object_string.php,v 1.2 2009/02/03 14:27:35 sebastien Exp $

/**
  * Class CMS_object_string
  *
  * represent a simple string object
  *
  * @package CMS
  * @subpackage module
  * @author Sébastien Pauchet <sebastien.pauchet@ws-interactive.fr>
  */

class CMS_object_string extends CMS_object_common
{
	/**
 	 * Polymod Messages
 	 */
	const MESSAGE_OBJECT_STRING_LABEL = 185;
	const MESSAGE_OBJECT_STRING_DESCRIPTION = 186;
	const MESSAGE_OBJECT_STRING_PARAMETER_MAXLENGTH = 187;
	const MESSAGE_OBJECT_STRING_PARAMETER_ISEMAIL = 226;
	const MESSAGE_OBJECT_STRING_PARAMETER_MATCH_EXPRESSION = 372;
	const MESSAGE_OBJECT_STRING_PARAMETER_MATCH_EXPRESSION_DESCRIPTION = 373;
	const MESSAGE_OBJECT_STRING_OPERATOR_DESCRIPTION = 389;
	/**
	  * object label
	  * @var integer
	  * @access private
	  */
	protected $_objectLabel = self::MESSAGE_OBJECT_STRING_LABEL;
	
	/**
	  * object description
	  * @var integer
	  * @access private
	  */
	protected $_objectDescription = self::MESSAGE_OBJECT_STRING_DESCRIPTION;
	
	/**
	  * all subFields definition
	  * @var array(integer "subFieldID" => array("type" => string "(string|boolean|integer|date)", "required" => boolean, 'internalName' => string [, 'externalName' => i18nm ID]))
	  * @access private
	  */
	protected $_subfields = array(0 => array(
										'type' 			=> 'string',
										'required' 		=> false,
										'internalName'	=> 'string',
									),
							);
	
	/**
	  * all subFields values for object
	  * @var array(integer "subFieldID" => mixed)
	  * @access private
	  */
	protected $_subfieldValues = array(0 => '');
	
	/**
	  * all parameters definition
	  * @var array(integer "subFieldID" => array("type" => string "(string|boolean|integer|date)", "required" => boolean, 'internalName' => string [, 'externalName' => i18nm ID]))
	  * @access private
	  */
	protected $_parameters = array(0 => array(
										'type' 			=> 'integer',
										'required' 		=> false,
										'internalName'	=> 'maxLength',
										'externalName'	=> self::MESSAGE_OBJECT_STRING_PARAMETER_MAXLENGTH,
									),
							 1 => array(
										'type' 			=> 'boolean',
										'required' 		=> false,
										'internalName'	=> 'isEmail',
										'externalName'	=> self::MESSAGE_OBJECT_STRING_PARAMETER_ISEMAIL,
									),
							 2 => array(
										'type' 			=> 'string',
										'required' 		=> false,
										'internalName'	=> 'matchExp',
										'externalName'	=> self::MESSAGE_OBJECT_STRING_PARAMETER_MATCH_EXPRESSION,
										'description'	=> self::MESSAGE_OBJECT_STRING_PARAMETER_MATCH_EXPRESSION_DESCRIPTION,
									),
							);
	
	/**
	  * all subFields values for object
	  * @var array(integer "subFieldID" => mixed)
	  * @access private
	  */
	protected $_parameterValues = array(0 => '255', 1 => false, 2 => '');

	/**
	  * Constructor.
	  * initialize object.
	  *
	  * @param array $datas DB object values : array(integer "subFieldID" => mixed)
	  * @param CMS_object_field reference
	  * @param boolean $public values are public or edited ? (default is edited)
	  * @return void
	  * @access public
	  */
	function __construct($datas=array(), &$field, $public=false)
	{
		parent::__construct($datas, $field, $public);
	}
	
	/**
	  * treat all params then return array of values treated or false if error
	  *
	  * @param array $post the posted datas
	  * @param string $prefix the prefix for datas name
	  * @return array, the treated datas
	  * @access public
	  */
	function treatParams($post, $prefix) {
		$params = parent::treatParams($post, $prefix);
		if (!sensitiveIO::isPositiveInteger($params['maxLength'])) {
			return false;
		}
		//data can't be greater than 255
		if ($params['maxLength'] > 255) {
			return false;
		}
		return $params;
	}
	
	/**
      * Return the needed form field tag for current object field
      *
      * @param array $values : parameters values array(parameterName => parameterValue) in :
      *     id : the form field id to set
      * @param multidimentionnal array $tags : xml2Array content of atm-function tag
      * @return string : the form field HTML tag
      * @access public
      */
	function getInput($fieldID, $language, $inputParams) {
		if (isset($inputParams['prefix'])) {
			$prefixName = $inputParams['prefix'];
			unset($inputParams['prefix']);
		} else {
			$prefixName = '';
		}
		$params = $this->getParamsValues();
		//serialize all htmlparameters 
		$htmlParameters = $this->serializeHTMLParameters($inputParams);
		$html = '';
		
		//create fieldname
		$fieldName = $prefixName.$this->_field->getID().'_0';
		//append field id to html field parameters (if not already exists)
		$htmlParameters .= (!isset($inputParams['id'])) ? ' id="'.$prefixName.$this->_field->getID().'_0"' : '';
		//create field value
		$value = $this->_subfieldValues[0]->getValue();
		//then create field HTML
		$html .= ($html) ? '<br />':'';
		$html .= '<input type="text"'.$htmlParameters.' name="'.$prefixName.$this->_field->getID().'_0" maxlength="'.$params['maxLength'].'" value="'.$value.'" />'."\n";
		if (POLYMOD_DEBUG) {
			$html .= ' <span class="admin_text_alert">(Field : '.$this->_field->getID().' - SubField : 0)</span>';
		}
		//append html hidden field which store field name
		if ($html) {
			$html .= '<input type="hidden" name="polymodFields['.$this->_field->getID().']" value="'.$this->_field->getID().'" />';
		}
		return $html;
	}
	
	/**
	  * set object Values
	  *
	  * @param array $values : the POST result values
	  * @param string prefixname : the prefix used for post names
	  * @return boolean true on success, false on failure
	  * @access public
	  */
	function setValues($values,$prefixName) {
		$params = $this->getParamsValues();
		if ($values[$prefixName.$this->_field->getID().'_0']) {
			//check string length parameter
			if (strlen($values[$prefixName.$this->_field->getID().'_0']) > $params['maxLength']) {
				return false;
			}
			//check if value is a valid email (if needed)
			if ($values[$prefixName.$this->_field->getID().'_0'] && $params['isEmail'] && !sensitiveIO::isValidEmail($values[$prefixName.$this->_field->getID().'_0'])) {
				return false;
			}
			//check if value has no html tags
			if (strip_tags($values[$prefixName.$this->_field->getID().'_0']) != $values[$prefixName.$this->_field->getID().'_0']) {
				return false;
			}
			//check match expression if any
			if ($params['matchExp'] && !preg_match('#'.$params['matchExp'].'#', $values[$prefixName.$this->_field->getID().'_0'])) {
				return false;
			}
		}
		if (!$this->_subfieldValues[0]->setValue(htmlspecialchars($values[$prefixName.$this->_field->getID().'_0']))) {
			return false;
		}
		return true;
	}
	
	/**
	  * get an object value
	  *
	  * @param string $name : the name of the value to get
	  * @param string $parameters (optional) : parameters for the value to get
	  * @return multidimentionnal array : the object values structure
	  * @access public
	  */
	function getValue($name, $parameters = '') {
		switch($name) {
			case 'label':
				return $this->getLabel();
			break;
			case 'value':
				return $this->_subfieldValues[0]->getValue();
			break;
			default:
				return parent::getValue($name, $parameters);
			break;
		}
	}
	
	/**
	  * get labels for object structure and functions
	  *
	  * @return array : the labels of object structure and functions
	  * @access public
	  */
	function getLabelsStructure(&$language, $objectName) {
		$labels = parent::getLabelsStructure($language, $objectName);
		$labels['operator']['like'] = $language->getMessage(self::MESSAGE_OBJECT_STRING_OPERATOR_DESCRIPTION,false ,MOD_POLYMOD_CODENAME);
		return $labels;
	}
	
	/**
	  * Get field search SQL request (used by class CMS_object_search)
	  *
	  * @param integer $fieldID : this field id in object (aka $this->_field->getID())
	  * @param mixed $value : the value to search
	  * @param string $operator : additionnal search operator
	  * @param string $where : where clauses to add to SQL
	  * @param boolean $public : values are public or edited ? (default is edited)
	  * @return string : the SQL request
	  * @access public
	  */
	function getFieldSearchSQL($fieldID, $value, $operator, $where, $public = false) {
		$supportedOperator = array(
			'like',
		);
		if ($operator && !in_array($operator, $supportedOperator)) {
			$this->raiseError("Unknown search operator : ".$operator.", use default search instead");
			$operator = false;
		}
		if (!$operator) {
			return parent::getFieldSearchSQL($fieldID, $value, $operator, $where, $public);
		}
		$statusSuffix = ($public) ? "_public":"_edited";
		$sql = "
			select
				distinct objectID
			from
				mod_subobject_string".$statusSuffix."
			where
				objectFieldID = '".SensitiveIO::sanitizeSQLString($fieldID)."'
				and value ".$operator." '".SensitiveIO::sanitizeSQLString($value)."'
				$where";
		return $sql;
	}
}
?>