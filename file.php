<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | Automne (TM)                                                         |
// +----------------------------------------------------------------------+
// | Copyright (c) 2000-2007 WS Interactive                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license.       |
// | The license text is bundled with this package in the file            |
// | LICENSE-GPL, and is available at through the world-wide-web at       |
// | http://www.gnu.org/copyleft/gpl.html.                                |
// +----------------------------------------------------------------------+
// | Author: Sébastien Pauchet <sebastien.pauchet@ws-interactive.fr>      |
// +----------------------------------------------------------------------+
//
// $Id: file.php,v 1.2 2010/01/18 15:06:46 sebastien Exp $

/**
  * Automne files download handler
  * This file is used by protected modules to handle documents downloading.
  * @author Sébastien Pauchet <sebastien.pauchet@ws-interactive.fr>
  */

// *************************************************************************
// **   FILE HANDLER. THIS PHP CODE IS NEEDED TO DOWNLOAD ALL DOCUMENTS   **
// *************************************************************************

$auto_prepend_file = ini_get_all();
//get original auto_prepend_file if any and append it before this file
if ($auto_prepend_file['auto_prepend_file']['global_value']) {
	include_once($auto_prepend_file['auto_prepend_file']['global_value']);
}
//set realpath for requested file
$scriptFilename = realpath($_SERVER['SCRIPT_FILENAME']);
//check for file call method (this file can only be called using auto_prepend_file PHP directive)
if ($scriptFilename == realpath(__FILE__)) {
	die('Error : This file cannot be called directly ...');
}
if (!isset($auto_prepend_file['auto_prepend_file']['local_value']) || realpath($auto_prepend_file['auto_prepend_file']['local_value']) != realpath(__FILE__)) {
	die('Error : This file cannot be called directly ...');
}

//disactive HTML compression
define("ENABLE_HTML_COMPRESSION", false);
//add Automne configuration files
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
//check for requested file existence
if (!file_exists($scriptFilename) || !is_file($scriptFilename)) {
	header('Location: '.PATH_SPECIAL_PAGE_NOT_FOUND_WR);
	exit;
}
//check for requested file location
if (strpos(pathinfo($scriptFilename, PATHINFO_DIRNAME), realpath(PATH_MODULES_FILES_FS)) !== 0) {
	header('Location: '.PATH_FORBIDDEN_WR);
	exit;
}
//check for requested file extension
if (in_array(pathinfo($scriptFilename, PATHINFO_EXTENSION), explode(',', FILE_UPLOAD_EXTENSIONS_DENIED))) {
	header('Location: '.PATH_FORBIDDEN_WR);
	exit;
}

//get requested file infos
$pathinfo = pathinfo($_SERVER['SCRIPT_NAME']);

//try to get original filename from 3 format of filenames
$filename = '';
if (preg_match('#^p[0-9]+_[a-z0-9]{32}.*#',$pathinfo['basename'])) {
	//standard module
	$filename = preg_replace ('#^p[0-9]+_[a-z0-9]{32}(.*)#', '\1', $pathinfo['basename']);
} elseif (preg_match('#^r[0-9]+_[0-9]+_.*#',$pathinfo['basename'])) {
	//polymod modules
	$filename = preg_replace ('#^r[0-9]+_[0-9]+_(.*)#', '\1', $pathinfo['basename']);
} elseif (preg_match('#^r[0-9]+_.*#',$pathinfo['basename'])) {
	//old modules
	$filename = preg_replace ('#^r[0-9]+_(.*)#', '\1', $pathinfo['basename']);
} else {
	//no match, keep filename
	$filename = $pathinfo['basename'];
}
//if APPLICATION_ENFORCES_ACCESS_CONTROL is active
if (APPLICATION_ENFORCES_ACCESS_CONTROL) {
	//Try to get module codename
	$codename = '';
	if (preg_match('#^'.PATH_MODULES_FILES_WR.'/[^/]+/(archived|deleted|edited|edition|public)$#',$pathinfo['dirname'])) {
		$codename = preg_replace ('#^'.PATH_MODULES_FILES_WR.'/([^/]+)/(archived|deleted|edited|edition|public)$#', '\1', $pathinfo['dirname']);
	}
	//Then check user rights on module
	if ($codename) {
		if ($codename == 'standard') {
			//get page id
			$pageId = '';
			if (preg_match('#^p[0-9]+_[a-z0-9]{32}.*#',$pathinfo['basename'])) {
				$pageId = preg_replace ('#^p([0-9]+)_[a-z0-9]{32}.*#', '\1', $pathinfo['basename']);
			}
			if (sensitiveIO::isPositiveInteger($pageId)) {
				if (!is_object($cms_user)) {
					//no user => LOGIN
					header('Location: '.PATH_FRONTEND_SPECIAL_LOGIN_WR.'?referer='.base64_encode($_SERVER['REQUEST_URI']));
					exit;
				} elseif (!$cms_user->hasPageClearance($pageId, CLEARANCE_PAGE_VIEW)) {
					if ($cms_user->getLogin() == DEFAULT_USER_LOGIN) {
						//no rights and anonymous => LOGIN
						header('Location: '.PATH_FRONTEND_SPECIAL_LOGIN_WR.'?referer='.base64_encode($_SERVER['REQUEST_URI']));
					} else {
						//no rights and logged => 403
						header('Location: '.PATH_FORBIDDEN_WR.'?referer='.base64_encode($_SERVER['REQUEST_URI']));
					}
					exit;
				}
			}
		} elseif (CMS_modulesCatalog::isPolymod($codename)) {
			//get object item id
			$itemID = '';
			if (preg_match('#^r[0-9]+_[0-9]+_.*#',$pathinfo['basename'])) {
				$itemID = preg_replace ('#^r([0-9]+)_[0-9]+_.*#', '\1', $pathinfo['basename']);
			}
			if (sensitiveIO::isPositiveInteger($itemID)) {
				if (!is_object($cms_user)) {
					//no user => LOGIN
					header('Location: '.PATH_FRONTEND_SPECIAL_LOGIN_WR.'?referer='.base64_encode($_SERVER['REQUEST_URI']));
					exit;
				} else {
					$public = (preg_match('#.*/(edited|edition)$#',$pathinfo['dirname'])) ? false : true;
					$item = CMS_poly_object_catalog::getObjectByID($itemID, false, $public);
					if (!$item->userHasClearance($cms_user,CLEARANCE_MODULE_VIEW, true)) {
						if ($cms_user->getLogin() == DEFAULT_USER_LOGIN) {
							//no rights and anonymous => LOGIN
							header('Location: '.PATH_FRONTEND_SPECIAL_LOGIN_WR.'?referer='.base64_encode($_SERVER['REQUEST_URI']));
						} else {
							//no rights and logged => 403
							header('Location: '.PATH_FORBIDDEN_WR.'?referer='.base64_encode($_SERVER['REQUEST_URI']));
						}
						exit;
					}
				}
			}
		}
	}
}

//If all is good here and connection still ok, send file to client
if (connection_status() == 0) {
	//close session then clean buffer
	session_write_close();
    ob_end_clean();
	//to prevent long file from getting cut off from max_execution_time
    set_time_limit(0);
	//get mime filetype
	$filetype = CMS_file::mimeContentType($scriptFilename);
	$filetype = ($filetype) ? $filetype : 'application/octet-stream';
	//send http headers
	header("Cache-Control: ");// leave blank to avoid IE errors
	header("Pragma: ");// leave blank to avoid IE errors
	header('Content-Type: '.$filetype);
	header('Content-Length: '.(string) filesize($scriptFilename));
	header('Content-Disposition: inline; filename="'.$filename.'"');
	//header('Content-Disposition: attachment; filename="'.$filename.'"');
	//send file (fread seems to be faster here than fpassthru nor readfile)
	if($file = fopen($scriptFilename, 'rb')){
		while( (!feof($file)) && (connection_status()==0) ){
			print(fread($file, 1024*8));
			flush();
		}
		fclose($file);
    }
}
exit;
?>