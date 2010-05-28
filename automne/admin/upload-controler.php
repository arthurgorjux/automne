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
// | Author: Sébastien Pauchet <sebastien.pauchet@ws-interactive.fr>	  |
// +----------------------------------------------------------------------+
//
// $Id: upload-controler.php,v 1.8 2010/03/08 16:41:22 sebastien Exp $

/**
  * PHP controler : Receive upload files
  * Used accross a SWFUpload request to process one uploaded file
  * 
  * @package Automne
  * @subpackage admin
  * @author Sébastien Pauchet <sebastien.pauchet@ws-interactive.fr>
  */

//Workaround for the Flash Cookie Bug
/*if (isset($_POST[session_name()])) {
	$_COOKIE[session_name()] = urldecode($_POST[session_name()]);
	session_id($_COOKIE[session_name()]);
}
if (isset($_POST['Automne_4_autologin'])) {
	$_COOKIE['Automne_4_autologin'] = urldecode($_POST['Automne_4_autologin']);
}
//Workaround for the Flash User Agent Bug
if (isset($_POST['userAgent'])) {
	$_SERVER['HTTP_USER_AGENT'] = urldecode($_POST['userAgent']);
}*/

require_once(dirname(__FILE__).'/../../cms_rc_frontend.php');

//load interface instance
$view = CMS_view::getInstance();
//set default display mode for this page
$view->setDisplayMode(CMS_view::SHOW_JSON);

//define upload constant according to SWFupload constants
define('UPLOAD_SECURITY_ERROR', -230);
define('UPLOAD_UPLOAD_LIMIT_EXCEEDED', -240);
define('UPLOAD_UPLOAD_FAILED', -250);
define('UPLOAD_FILE_VALIDATION_FAILED', -270);
define('UPLOAD_FILE_CANCELLED', -280);
define('UPLOAD_UPLOAD_STOPPED', -290);

$fileDatas = array(
	'error' 		=> 0,
	'filename'		=> '',
	'filepath'		=> '',
	'filesize'		=> '',
	'fileicon'		=> '',
	'success'		=> false
);

// Check the upload
if (!isset($_FILES["Filedata"]) || !is_uploaded_file($_FILES["Filedata"]["tmp_name"]) || $_FILES["Filedata"]["error"] != 0) {
	CMS_grandFather::raiseError('Uploaded file has an error : '.print_r($_FILES, true));
	$fileDatas['error'] = UPLOAD_UPLOAD_FAILED;
	$view->setContent($fileDatas);
	$view->show();
}
//move uploaded file (and rename it if needed)
$originalFilename = io::sanitizeAsciiString($_FILES["Filedata"]["name"]);
if (io::strlen($originalFilename) > 255) {
	$originalFilename = sensitiveIO::ellipsis($originalFilename, 255, '-');
}
$count = 2;
$filename = $originalFilename;
while (file_exists(PATH_UPLOAD_FS.'/'.$filename)) {
	$pathinfo = pathinfo($originalFilename);
	$filename = $pathinfo['filename'].'-'.$count++.'.'.$pathinfo['extension'];
}
if (!@move_uploaded_file($_FILES["Filedata"]["tmp_name"], PATH_UPLOAD_FS.'/'.$filename)) {
	CMS_grandFather::raiseError('Can\'t move uploaded file to : '.PATH_UPLOAD_FS.'/'.$filename);
	$fileDatas['error'] = UPLOAD_FILE_VALIDATION_FAILED;
	$view->setContent($fileDatas);
	$view->show();
}
$file = new CMS_file(PATH_UPLOAD_FS.'/'.$filename);
$file->chmod(FILES_CHMOD);

//check uploaded file
if (!$file->checkUploadedFile()) {
	$file->delete();
	$fileDatas['error'] = UPLOAD_SECURITY_ERROR;
	$view->setContent($fileDatas);
	$view->show();
}

//return file datas
$fileDatas = array(
	'error' 		=> 0,
	'filename'		=> $file->getName(false),
	'filepath'		=> $file->getFilePath(CMS_file::WEBROOT),
	'filesize'		=> $file->getFileSize(),
	'fileicon'		=> $file->getFileIcon(CMS_file::WEBROOT),
	'extension'		=> $file->getExtension(),
	'success'		=> true
);
$view->setContent($fileDatas);
$view->show();
?>