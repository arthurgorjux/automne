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
// $Id: templates-files-nodes.php,v 1.1 2009/04/02 13:55:54 sebastien Exp $

/**
  * PHP page : Load module categories tree window.
  * Used accross an Ajax request. Render categories tree for a given module.
  * 
  * @package CMS
  * @subpackage admin
  * @author S�bastien Pauchet <sebastien.pauchet@ws-interactive.fr>
  */

require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_admin.php");

//load interface instance
$view = CMS_view::getInstance();
//set default display mode for this page
$view->setDisplayMode(CMS_view::SHOW_JSON);

function checkNode($value) {
	return $value != 'source' && strpos($value, '..') === false;
}

$fileType = sensitiveIO::request('type', array('css', 'js'));
$node = sensitiveIO::request('node', 'checkNode', '');
$maxDepth = sensitiveIO::request('maxDepth', 'sensitiveIO::isPositiveInteger', 2);

//CHECKS user has module clearance
if (!$cms_user->hasAdminClearance(CLEARANCE_ADMINISTRATION_EDIT_TEMPLATES)) {
	CMS_grandFather::raiseError('User has no rights on page templates ...');
	$view->show();
}

// from php manual page
function formatBytes($val, $digits = 3, $mode = "SI", $bB = "B"){ //$mode == "SI"|"IEC", $bB == "b"|"B"
   $si = array("", "K", "M", "G", "T", "P", "E", "Z", "Y");
   $iec = array("", "Ki", "Mi", "Gi", "Ti", "Pi", "Ei", "Zi", "Yi");
   switch(strtoupper($mode)) {
       case "SI" : $factor = 1000; $symbols = $si; break;
       case "IEC" : $factor = 1024; $symbols = $iec; break;
       default : $factor = 1000; $symbols = $si; break;
   }
   switch($bB) {
       case "b" : $val *= 8; break;
       default : $bB = "B"; break;
   }
   for($i=0;$i<count($symbols)-1 && $val>=$factor;$i++)
       $val /= $factor;
   $p = strpos($val, ".");
   if($p !== false && $p > $digits) $val = round($val);
   elseif($p !== false) $val = round($val, $digits-$p);
   return round($val, $digits) . " " . $symbols[$i] . $bB;
}
switch ($fileType) {
	case 'css':
		$dir = $_SERVER['DOCUMENT_ROOT'].'/css/';
		$allowedFiles = array(
			'css' => array('name' => 'Feuille de style', 'class' => 'atm-css'),
			'xml' => array('name' => 'Style Wysiwyg', 'class' => 'atm-xml'),
		);
	break;
	case 'js':
		$dir = $_SERVER['DOCUMENT_ROOT'].'/js/';
		$allowedFiles = array('js' => array('name' => 'Javascript', 'class' => 'atm-js'));
	break;
	default:
		CMS_grandFather::raiseError('Unknown fileType to use ...');
		$view->show();
	break;
}
$nodes = array();
$d = dir($dir.$node);
$currentDepth = count(explode('/', $node));

if ($d) {
	while($f = $d->read()){
	    if($f == '.' || $f == '..' || substr($f, 0, 1) == '.') continue;
	    $lastmod = date($cms_language->getDateFormat().' H:i:s',filemtime($dir.$node.'/'.$f));
	    if(is_dir($dir.$node.'/'.$f)){
	        $qtip = 'Type: Dossier<br />Derni�re modification : '.$lastmod;
	        $nodes[] = array('text' => $f, 'id' => $node.'/'.$f, 'qtip' => $qtip, 'leaf' => false, 'cls'=> 'folder', 'expanded' => ($currentDepth < $maxDepth), 'deletable' => false);
	    }else{
	        $extension = strtolower(pathinfo($dir.$node.'/'.$f, PATHINFO_EXTENSION));
			if (isset($allowedFiles[$extension])) {
				$size = formatBytes(filesize($dir.$node.'/'.$f), 2);
				$qtip = 'Type: '.$allowedFiles[$extension]['name'].'<br />Derni�re modification : '.$lastmod.'<br />Taille: '.$size;
				$deletable = $extension != 'xml' && is_writable($dir.$node.'/'.$f);
				$nodes[] = array('text' => $f, 'id' => $node.'/'.$f, 'leaf' => true, 'qtip' => $qtip, 'cls' => $allowedFiles[$extension]['class'], 'deletable' => $deletable);
			}
	    }
	}
	$d->close();
}
$view->setContent($nodes);
$view->show();
?>