#!/usr/bin/env php
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
// | Author: Antoine Pouch <antoine.pouch@ws-interactive.fr>              |
// +----------------------------------------------------------------------+
//
// $Id: regenerateall.php,v 1.5 2010/01/28 15:59:13 sebastien Exp $

/**
  * background script : regenerateall
  *
  * Regenerates All the pages : call the function in CMS_tree and lauch regenerator
  *
  * @package CMS
  * @subpackage backgroundScripts
  * @author Antoine Pouch <antoine.pouch@ws-interactive.fr>
  */
//define application type
define('APPLICATION_EXEC_TYPE', 'cli');
//must calculate the document root
$_SERVER["DOCUMENT_ROOT"] = realpath(substr(dirname(__FILE__), 0, strlen(dirname(__FILE__)) - strpos(strrev(dirname(__FILE__)), "enmotua") - strlen("automne") - 1));

require_once($_SERVER["DOCUMENT_ROOT"] . "/cms_rc_admin.php");

CMS_tree::regenerateAllPages(true);
?>
