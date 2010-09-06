<?php
// +----------------------------------------------------------------------+
// | Automne (TM)														  |
// +----------------------------------------------------------------------+
// | Copyright (c) 2000-2010 WS Interactive								  |
// +----------------------------------------------------------------------+
// | Automne is subject to version 2.0 or above of the GPL license.		  |
// | The license text is bundled with this package in the file			  |
// | LICENSE-GPL, and is available through the world-wide-web at		  |
// | http://www.gnu.org/copyleft/gpl.html.								  |
// +----------------------------------------------------------------------+
// | Author: Sébastien Pauchet <sebastien.pauchet@ws-interactive.fr>      |
// +----------------------------------------------------------------------+
//
// $Id: sendingssearch.php,v 1.3 2010/03/08 16:43:27 sebastien Exp $

/**
  * Class CMS_forms_sendingsSearch
  * 
  * This class performs searches of form records and returns 
  * resultsets, number of records founded, paginate, etc.
  * 
  * @package Automne
  * @subpackage cms_forms
  * @author Sébastien Pauchet <sebastien.pauchet@ws-interactive.fr>
  */

class CMS_forms_sendingsSearch extends CMS_grandFather {

	/**
	 * Fields to select in search, will be imploded with a coma 
	 * to build SQL select statement
	 * Consider this : the first field in select statements 
	 * must return the resource ID. Will be called with $resultset[0]
	 * 
	 * @var array(string)
	 * @access private
	 */
	protected $_select = array('id_snd as id');
	
	/**
	 * Number of items founded
	 * 
	 * @var integer
	 * @access private
	 */
	protected $_numRows;
	
	/**
	 * ORDER BY clause of SQL statement
	 * 
	 * @var string
	 * @access private
	 */
	protected $_orderBy = 'dateInserted_snd desc';

	/**
	 * Array of "AND" statements to build SQL clause WHERE from
	 * Do not contains "and". It will be imploded when building query
	 * 
	 * @var array(string)
	 * @access private
	 */
	protected $_where = array();

	/**
	 * Current page to return
	 * @var integer
	 * @access private
	 */
	protected $_page = 0;

	/**
	 * Number of items to return on each page
	 * @var integer
	 * @access private
	 */
	protected $_itemsPerPage;

	/**
	 * Stores SQL query when built once
	 * @var string
	 * @access private
	 */
	protected $_sql;
	
	/**
	 * Public search only ?
	 * @var boolean
	 * @access private
	 */
	protected $_public = false;

	/**
	 * Constructor
	 * 
	 * @access public
	 * @param string $where 
	 * @param string $orderBy 
	 * @param integer $page 
	 * @param integer $itemsPerPage
	 * @param boolean $public 
	 */
	function __construct($where = false, $orderBy = false, $page = false, $itemsPerPage = false) {
		if (is_array($where)) {
			$this->_where = $where;
		}
		if ($orderBy != '') {
			$this->_orderBy = $orderBy;
		}
		if ($page > 0) {
			$this->_page = $page;
		}
		if (is_integer($itemsPerPage)) {
			$this->_itemsPerPage = $itemsPerPage;
		}
	}
	
	/**
	 * Getter for any private attribute on this class
	 *
	 * @access public
	 * @param string $name
	 * @return string
	 */
	function getAttribute($name) {
		$name = '_'.$name;
		return $this->{$name};
	}
	
	/**
	 * Setter for any private attribute on this class
	 *
	 * @access public
	 * @param string $name name of attribute to set
	 * @param $value , the value to give
	 */
	function setAttribute($name, $value) {
		$name = '_'.$name;
		$this->$name = $value;
		return true;
	}
	
	/**
	 * Builds where statement with a key and its value
	 * The key can be known, this class will create statements in consequence
	 * or not known so key is understood as a field name and this
	 * method will append a statement such $key='$value'
	 *
	 * @access public
	 * @param string $key name of statement to set
	 * @param string $value , the value to give
	 */
	function addWhereCondition($type, $value) {
		switch($type) {
		case "formular":
			$value = $this->_sanitizeSQLString($value);
			if (SensitiveIO::isPositiveInteger($value)) {
				// Already in array_push($this->_tables, "mod_cms_forms_sendings");
				array_push($this->_tables, "mod_cms_forms_formulars");
				array_push($this->_tables, "mod_cms_forms_fields");
				array_push($this->_tables, "mod_cms_forms_records");
				array_push($this->_where, "id_snd=sending_rec");
				array_push($this->_where, "field_rec=id_fdl");
				array_push($this->_where, "id_frm=form_fld");
				array_push($this->_where, "form_snd='".SensitiveIO::sanitizeSQLString($value)."'");
			}
			break;
		default:
			$value = $this->_sanitizeSQLString($value);
			array_push($this->_where, $type."='".SensitiveIO::sanitizeSQLString($value)."'");
			break;
		}
	}
	
	/**
	 * Prepares and stores SQL query from given attributes
	 * 
	 * @access private
	 * @return string
	 */
	protected function _buildSQL() {
		// reset results founded :
		unset($this->_numRows);
		
		// Complete search with date
		$this->_sql = "
			select
				{{select}}
			from
				mod_cms_forms_formulars
			where
				".implode($this->_where, ' and ')."
			group by
				id_frm
			order by
				".SensitiveIO::sanitizeSQLString($this->_orderBy)."
		";
		return true;
	}
	
	/**
	 * Count how many results can be returned by query
	 * 
	 * @access private
	 * @return string
	 */
	protected function _getResultsCount() {
		if (!$this->_buildSQL()) {
			$this->raiseError("Error while constructing query");
			return null;
		}
		$sql = str_replace('{{select}}', 'COUNT(*) as c', $this->_sql);
		$q = new CMS_query($sql);
		return $q->getNumRows();
	}
	
	/**
	 * Cleans a value submited by user before givening it to SQL.
	 * 
	 * @access private
	 * @param string $s, the string to clean
	 * @return string
	 */
	protected function _sanitizeSQLString($s) {
		$s = SensitiveIO::stripPHPTags(trim($s));
		$s = str_replace("%", "", $s);
		return SensitiveIO::sanitizeSQLString($s);
	}
	
	/**
	 * Count items founded with query COUNT(*)
	 * 
	 * @access public
	 * @return integer
	 */
	function getNumRows() {
		if (!isset($this->_numRows)) {
			$this->_numRows = $this->_getResultsCount();
		}
		return $this->_numRows;
	}
	
	/**
	 * Count and returns how many of pages in resultset with 
	 * current itemsPerpage value
	 * 
	 * @access public
	 * @return integer
	 */
	function getMaxPages() {
		if (!isset($this->_numRows)) {
			return 0;
		}
		$this->_maxPages = ceil($this->_numRows / $this->_itemsPerPage);
		return $this->_maxPages;
	}

	/**
	 * Proceed to serach and returns the array of results, null if none 
	 * founded. All search options had been set yet.
	 * 
	 * @access public
	 * @return array(CMS_resources_cms_news)
	 */
	function search() {
		$items = array();
		if (!$this->_sql) {
			$this->_buildSQL();
		}
		$sql = str_replace('{{select}}', implode($this->_select, ','), $this->_sql);
		if ($this->_itemsPerPage > 0) {
			$sql .= "
			limit
				".($this->_page * $this->_itemsPerPage).", ".$this->_itemsPerPage."";
		}
		$q = new CMS_query($sql);
		if (!$q->getNumRows()) {
			return $items;
		}
		while ($data = $q->getArray()) {
			$obj = new CMS_forms_sending($data[0]);
			if (!$obj->hasError()) {
				$items[] = $obj;
			}
		}
		return $items;
	}
}
?>