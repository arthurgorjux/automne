<<<<<<< TREE
<<<<<<< TREE
<?php //Generated on Thu, 11 Mar 2010 16:28:42 +0100 by Automne (TM) 4.0.1
require_once(dirname(__FILE__).'/../cms_rc_frontend.php');
=======
<?php //Generated on Fri, 19 Mar 2010 15:24:37 +0100 by Automne (TM) 4.0.1
=======
<?php //Generated on Mon, 24 May 2010 16:59:57 +0200 by Automne (TM) 4.0.2
>>>>>>> MERGE-SOURCE
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
>>>>>>> MERGE-SOURCE
if (!isset($cms_page_included) && !$_POST && !$_GET) {
<<<<<<< TREE
	CMS_view::redirect('http://test-folder/trunk/web/demo/25-modeles.php', true, 301);
=======
	CMS_view::redirect('http://127.0.0.1/web/demo/25-modeles.php', true, 301);
>>>>>>> MERGE-SOURCE
}
 ?>
<<<<<<< TREE
<?php require_once(PATH_REALROOT_FS.'/automne/classes/polymodFrontEnd.php');  ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";   ?>
=======
<?php require_once($_SERVER["DOCUMENT_ROOT"].'/automne/classes/polymodFrontEnd.php');  ?><?php /* Template [Intérieur Démo - pt58_Interieur.xml] */   ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";   ?>
>>>>>>> MERGE-SOURCE
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Automne 4 : Modèles de Pages</title>
	<?php echo CMS_view::getCSS(array('/css/reset.css','/css/demo/common.css','/css/demo/interieur.css','/css/modules/pmedia.css'), 'all');  ?>

	<!--[if lte IE 6]> 
		<link rel="stylesheet" type="text/css" href="/css/demo/ie6.css" media="all" />
	<![endif]-->
	<?php echo CMS_view::getCSS(array('/css/demo/print.css'), 'print');  ?>

	<?php echo CMS_view::getJavascript(array('','/js/CMS_functions.js','/js/modules/pmedia/jquery-1.2.6.min-demo.js','/js/modules/pmedia/pmedia-demo.js','/js/modules/pmedia/swfobject.js'));  ?>

<<<<<<< TREE
	<link rel="icon" type="image/x-icon" href="http://test-folder/trunk/favicon.ico" />
=======
	<link rel="icon" type="image/x-icon" href="http://127.0.0.1/favicon.ico" />
>>>>>>> MERGE-SOURCE
	<meta name="language" content="fr" />
	<meta name="generator" content="Automne (TM)" />
<<<<<<< TREE
	<meta name="identifier-url" content="http://test-folder/trunk" />
	<base href="http://test-folder/trunk/" />
=======
	<meta name="identifier-url" content="http://127.0.0.1" />

>>>>>>> MERGE-SOURCE
</head>
<body>
	<div id="main">
		<div id="container">
			<div id="header">
				
<<<<<<< TREE
							<a id="lienAccueil" href="http://test-folder/trunk/web/demo/2-accueil.php" title="Retour &agrave; l'accueil">Retour &agrave; l'accueil</a>
=======
							<a id="lienAccueil" href="http://127.0.0.1/web/demo/2-accueil.php" title="Retour &agrave; l'accueil">Retour &agrave; l'accueil</a>
>>>>>>> MERGE-SOURCE
						
			</div>
			<div id="backgroundBottomContainer">
				<div id="menuLeft">
<<<<<<< TREE
					<ul class="CMS_lvl2"><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/3-presentation.php">Présentation</a></li><li class="CMS_lvl2 CMS_open "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/24-documentation.php">Fonctionnalités</a><ul class="CMS_lvl3"><li class="CMS_lvl3 CMS_nosub CMS_current"><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/25-modeles.php">Modèles</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/26-rangees.php">Rangées</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/27-modules.php">Modules</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/28-administration.php">Gestion des utilisateurs</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/35-gestion-des-droits.php">Gestion des droits</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/37-droit-de-validation.php">Workflow de publication</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/38-aide-aux-utilisateurs.php">Aide utilisateurs</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/34-fonctions-avancees.php">Fonctions avancées</a></li></ul></li><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/31-exemples-de-modules.php">Exemples de modules</a></li></ul>
=======
					<ul class="CMS_lvl2"><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/3-presentation.php">Présentation</a></li><li class="CMS_lvl2 CMS_open "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/24-documentation.php">Fonctionnalités</a><ul class="CMS_lvl3"><li class="CMS_lvl3 CMS_nosub CMS_current"><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/25-modeles.php">Modèles</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/26-rangees.php">Rangées</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/27-modules.php">Modules</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/28-administration.php">Gestion des utilisateurs</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/35-gestion-des-droits.php">Gestion des droits</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/37-droit-de-validation.php">Workflow de publication</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/38-aide-aux-utilisateurs.php">Aide utilisateurs</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/34-fonctions-avancees.php">Fonctions avancées</a></li></ul></li><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/31-exemples-de-modules.php">Exemples de modules</a></li></ul>
>>>>>>> MERGE-SOURCE
				</div>
				<div id="content" class="page25">
					<div id="breadcrumbs">
<<<<<<< TREE
						<a href="http://test-folder/trunk/web/demo/2-accueil.php">Accueil</a> &gt; <a href="http://test-folder/trunk/web/demo/24-documentation.php">Fonctionnalités</a> &gt; 
=======
						<a href="http://127.0.0.1/web/demo/2-accueil.php">Accueil</a> &gt; <a href="http://127.0.0.1/web/demo/24-documentation.php">Fonctionnalités</a> &gt; 
>>>>>>> MERGE-SOURCE
					</div>
					<div id="title">
						<h1>Modèles de Pages</h1>
					</div>
					<?php /* Start clientspace [first] */   ?><?php /* Start row [210 Texte et Image Droite - r45_210_Texte__image_droite.xml] */   ?>
	
	
		<div class="text"><h2>Principe de mod&egrave;les de pages</h2> <p>Un principe fondamental des CMS est la <strong>s&eacute;paration entre le contenu et la pr&eacute;sentation.</strong> Autrement dit, le graphisme et l&rsquo;information contenu dans un site sont totalement ind&eacute;pendant l&rsquo;un de l&rsquo;autre.</p></div>
	
<?php /* End row [210 Texte et Image Droite - r45_210_Texte__image_droite.xml] */   ?><?php /* Start row [230 Texte et Média à Droite - r69_Texte_-_Media_a_droite.xml] */   ?>
	<div class="imgRight">
		<?php $cache_120fc760a837450712fb17b13841f916 = new CMS_cache('120fc760a837450712fb17b13841f916', 'polymod', 'auto', true);
if ($cache_120fc760a837450712fb17b13841f916->exist()):
	//Get content from cache
	$cache_120fc760a837450712fb17b13841f916_content = $cache_120fc760a837450712fb17b13841f916->load();
else:
	$cache_120fc760a837450712fb17b13841f916->start();
	   ?>
<?php /*Generated on Mon, 24 May 2010 16:59:57 +0200 by Automne (TM) 4.0.2 */
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
				'item' => '25',
			),
		),
		'module' => 'pmedia',
		'language' => 'fr',
	);
	$parameters['pageID'] = '25';
	if (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != 'fr')) $cms_language = new CMS_language('fr');
	$parameters['public'] = true;
	if (isset($parameters['item'])) {$parameters['objectID'] = $parameters['item']->getObjectID();} elseif (isset($parameters['itemID']) && sensitiveIO::isPositiveInteger($parameters['itemID']) && !isset($parameters['objectID'])) $parameters['objectID'] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters['itemID']);
	if (!isset($object) || !is_array($object)) $object = array();
	if (!isset($object[2])) $object[2] = new CMS_poly_object(2, 0, array(), $parameters['public']);
	$parameters['module'] = 'pmedia';
<<<<<<< TREE
<<<<<<< TREE
	//SEARCH mediaresult TAG START 2_45d025
=======
	//SEARCH mediaresult TAG START 2_13e52f
>>>>>>> MERGE-SOURCE
=======
	//SEARCH mediaresult TAG START 2_b4a0e8
>>>>>>> MERGE-SOURCE
	$objectDefinition_mediaresult = '2';
	if (!isset($objectDefinitions[$objectDefinition_mediaresult])) {
		$objectDefinitions[$objectDefinition_mediaresult] = new CMS_poly_object_definition($objectDefinition_mediaresult);
	}
	//public search ?
<<<<<<< TREE
<<<<<<< TREE
	$public_2_45d025 = isset($public_search) ? $public_search : false;
=======
	$public_2_13e52f = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
=======
	$public_2_b4a0e8 = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
	//get search params
<<<<<<< TREE
<<<<<<< TREE
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_2_45d025);
=======
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_2_13e52f);
>>>>>>> MERGE-SOURCE
=======
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_2_b4a0e8);
>>>>>>> MERGE-SOURCE
	$launchSearch_mediaresult = true;
	//add search conditions if any
	if (isset($blockAttributes['search']['mediaresult']['item'])) {
<<<<<<< TREE
<<<<<<< TREE
		$values_3_31bc18 = array (
=======
		$values_3_2f742f = array (
>>>>>>> MERGE-SOURCE
=======
		$values_3_f61956 = array (
>>>>>>> MERGE-SOURCE
			'search' => 'mediaresult',
			'type' => 'item',
			'value' => 'block',
			'mandatory' => 'true',
		);
<<<<<<< TREE
<<<<<<< TREE
		$values_3_31bc18['value'] = $blockAttributes['search']['mediaresult']['item'];
		if ($values_3_31bc18['type'] == 'publication date after' || $values_3_31bc18['type'] == 'publication date before') {
=======
		$values_3_2f742f['value'] = $blockAttributes['search']['mediaresult']['item'];
		if ($values_3_2f742f['type'] == 'publication date after' || $values_3_2f742f['type'] == 'publication date before') {
>>>>>>> MERGE-SOURCE
=======
		$values_3_f61956['value'] = $blockAttributes['search']['mediaresult']['item'];
		if ($values_3_f61956['type'] == 'publication date after' || $values_3_f61956['type'] == 'publication date before') {
>>>>>>> MERGE-SOURCE
			//convert DB format to current language format
			$dt = new CMS_date();
<<<<<<< TREE
<<<<<<< TREE
			$dt->setFromDBValue($values_3_31bc18['value']);
			$values_3_31bc18['value'] = $dt->getLocalizedDate($cms_language->getDateFormat());
=======
			$dt->setFromDBValue($values_3_2f742f['value']);
			$values_3_2f742f['value'] = $dt->getLocalizedDate($cms_language->getDateFormat());
>>>>>>> MERGE-SOURCE
=======
			$dt->setFromDBValue($values_3_f61956['value']);
			$values_3_f61956['value'] = $dt->getLocalizedDate($cms_language->getDateFormat());
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
<<<<<<< TREE
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, $values_3_31bc18)) ? $launchSearch_mediaresult : false;
=======
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, $values_3_2f742f)) ? $launchSearch_mediaresult : false;
>>>>>>> MERGE-SOURCE
=======
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, $values_3_f61956)) ? $launchSearch_mediaresult : false;
>>>>>>> MERGE-SOURCE
	} elseif (true == true) {
		//search parameter is mandatory and no value found
		$launchSearch_mediaresult = false;
	}
<<<<<<< TREE
<<<<<<< TREE
	//RESULT mediaresult TAG START 4_673f0e
=======
	//RESULT mediaresult TAG START 4_9d40cc
>>>>>>> MERGE-SOURCE
=======
	//RESULT mediaresult TAG START 4_cedebb
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
		$object_4_673f0e = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_4_673f0e = $replace; //save previous replace vars if any
		$count_4_673f0e = 0;
		$content_4_673f0e = $content; //save previous content var if any
		$maxPages_4_673f0e = $search_mediaresult->getMaxPages();
		$maxResults_4_673f0e = $search_mediaresult->getNumRows();
=======
		$object_4_9d40cc = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_4_9d40cc = $replace; //save previous replace vars if any
		$count_4_9d40cc = 0;
		$content_4_9d40cc = $content; //save previous content var if any
		$maxPages_4_9d40cc = $search_mediaresult->getMaxPages();
		$maxResults_4_9d40cc = $search_mediaresult->getNumRows();
>>>>>>> MERGE-SOURCE
=======
		$object_4_cedebb = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_4_cedebb = $replace; //save previous replace vars if any
		$count_4_cedebb = 0;
		$content_4_cedebb = $content; //save previous content var if any
		$maxPages_4_cedebb = $search_mediaresult->getMaxPages();
		$maxResults_4_cedebb = $search_mediaresult->getNumRows();
>>>>>>> MERGE-SOURCE
		foreach ($results_mediaresult as $object[$objectDefinition_mediaresult]) {
			$content = "";
			$replace["atm-search"] = array (
				"{resultid}" 	=> (isset($resultID_mediaresult)) ? $resultID_mediaresult : $object[$objectDefinition_mediaresult]->getID(),
<<<<<<< TREE
<<<<<<< TREE
				"{firstresult}" => (!$count_4_673f0e) ? 1 : 0,
				"{lastresult}" 	=> ($count_4_673f0e == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_4_673f0e+1),
				"{maxpages}"    => $maxPages_4_673f0e,
=======
				"{firstresult}" => (!$count_4_9d40cc) ? 1 : 0,
				"{lastresult}" 	=> ($count_4_9d40cc == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_4_9d40cc+1),
				"{maxpages}"    => $maxPages_4_9d40cc,
>>>>>>> MERGE-SOURCE
=======
				"{firstresult}" => (!$count_4_cedebb) ? 1 : 0,
				"{lastresult}" 	=> ($count_4_cedebb == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_4_cedebb+1),
				"{maxpages}"    => $maxPages_4_cedebb,
>>>>>>> MERGE-SOURCE
				"{currentpage}" => ($search_mediaresult->getAttribute('page')+1),
<<<<<<< TREE
<<<<<<< TREE
				"{maxresults}"  => $maxResults_4_673f0e,
=======
				"{maxresults}"  => $maxResults_4_9d40cc,
>>>>>>> MERGE-SOURCE
=======
				"{maxresults}"  => $maxResults_4_cedebb,
				"{altclass}"    => (($count_4_cedebb+1) % 2) ? "CMS_odd" : "CMS_even",
>>>>>>> MERGE-SOURCE
			);
<<<<<<< TREE
<<<<<<< TREE
			//IF TAG START 5_4a0927
=======
			//IF TAG START 5_f86964
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
			//IF TAG START 5_d056e0
			$ifcondition_5_d056e0 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition_5_d056e0) {
				$func_5_d056e0 = create_function("","return (".$ifcondition_5_d056e0.");");
				if ($func_5_d056e0()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"T&eacute;l&eacute;charger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\">";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 6_01c71a
=======
					//IF TAG START 6_698278
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 6_bb5fd6
					$ifcondition_6_bb5fd6 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition_6_bb5fd6) {
						$func_6_bb5fd6 = create_function("","return (".$ifcondition_6_bb5fd6.");");
						if ($func_6_bb5fd6()) {
>>>>>>> MERGE-SOURCE
							$content .="<img src=\"".$object[2]->objectValues(9)->getValue('fileIcon','')."\" alt=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" title=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" />";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 6_01c71a
=======
					}//IF TAG END 6_698278
>>>>>>> MERGE-SOURCE
=======
						unset($func_6_bb5fd6);
					}
					unset($ifcondition_6_bb5fd6);
					//IF TAG END 6_bb5fd6
>>>>>>> MERGE-SOURCE
					$content .=" ".$object[2]->getValue('label','')."</a>
					";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 7_ac0efb
=======
					//IF TAG START 7_d18f7c
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 7_0aad88
					$ifcondition_7_0aad88 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_7_0aad88) {
						$func_7_0aad88 = create_function("","return (".$ifcondition_7_0aad88.");");
						if ($func_7_0aad88()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<div class=\"shadow\">
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
							</div>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 7_ac0efb
=======
					}//IF TAG END 7_d18f7c
>>>>>>> MERGE-SOURCE
=======
						unset($func_7_0aad88);
					}
					unset($ifcondition_7_0aad88);
					//IF TAG END 7_0aad88
>>>>>>> MERGE-SOURCE
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 5_4a0927
			//IF TAG START 8_9a3101
=======
			}//IF TAG END 5_f86964
			//IF TAG START 8_f0c55e
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
<<<<<<< TREE
					//IF TAG START 9_4dd5eb
=======
					//IF TAG START 9_6cc72f
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
				unset($func_5_d056e0);
			}
			unset($ifcondition_5_d056e0);
			//IF TAG END 5_d056e0
			//IF TAG START 8_2d0142
			$ifcondition_8_2d0142 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
			if ($ifcondition_8_2d0142) {
				$func_8_2d0142 = create_function("","return (".$ifcondition_8_2d0142.");");
				if ($func_8_2d0142()) {
					//IF TAG START 9_abdd2b
					$ifcondition_9_abdd2b = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_9_abdd2b) {
						$func_9_abdd2b = create_function("","return (".$ifcondition_9_abdd2b.");");
						if ($func_9_abdd2b()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<script type=\"text/javascript\">
							swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml', startimage:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."'}, {allowfullscreen:true, wmode:'transparent'}, false);
							</script>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 9_4dd5eb
					//IF TAG START 10_bb556d
=======
					}//IF TAG END 9_6cc72f
					//IF TAG START 10_8fec44
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
						unset($func_9_abdd2b);
					}
					unset($ifcondition_9_abdd2b);
					//IF TAG END 9_abdd2b
					//IF TAG START 10_b4cdcd
					$ifcondition_10_b4cdcd = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_10_b4cdcd) {
						$func_10_b4cdcd = create_function("","return (".$ifcondition_10_b4cdcd.");");
						if ($func_10_b4cdcd()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<script type=\"text/javascript\">
							swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml'}, {allowfullscreen:true, wmode:'transparent'}, false);
							</script>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 10_bb556d
=======
					}//IF TAG END 10_8fec44
>>>>>>> MERGE-SOURCE
=======
						unset($func_10_b4cdcd);
					}
					unset($ifcondition_10_b4cdcd);
					//IF TAG END 10_b4cdcd
>>>>>>> MERGE-SOURCE
					$content .="
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-video\" style=\"width:320px;height:200px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 8_9a3101
			//IF TAG START 11_8e522d
=======
			}//IF TAG END 8_f0c55e
			//IF TAG START 11_5f5033
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
				unset($func_8_2d0142);
			}
			unset($ifcondition_8_2d0142);
			//IF TAG END 8_2d0142
			//IF TAG START 11_d30bec
			$ifcondition_11_d30bec = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
			if ($ifcondition_11_d30bec) {
				$func_11_d30bec = create_function("","return (".$ifcondition_11_d30bec.");");
				if ($func_11_d30bec()) {
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
					//IF TAG START 12_429b23
=======
					//IF TAG START 12_8a588f
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 12_89b346
					$ifcondition_12_89b346 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_12_89b346) {
						$func_12_89b346 = create_function("","return (".$ifcondition_12_89b346.");");
						if ($func_12_89b346()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<div class=\"shadow\">
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
							</div>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 12_429b23
=======
					}//IF TAG END 12_8a588f
>>>>>>> MERGE-SOURCE
=======
						unset($func_12_89b346);
					}
					unset($ifcondition_12_89b346);
					//IF TAG END 12_89b346
>>>>>>> MERGE-SOURCE
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 11_8e522d
			//IF TAG START 13_67bd3f
=======
			}//IF TAG END 11_5f5033
			//IF TAG START 13_5e1e88
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
				unset($func_11_d30bec);
			}
			unset($ifcondition_11_d30bec);
			//IF TAG END 11_d30bec
			//IF TAG START 13_201355
			$ifcondition_13_201355 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition_13_201355) {
				$func_13_201355 = create_function("","return (".$ifcondition_13_201355.");");
				if ($func_13_201355()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<div class=\"shadow\">
					";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 14_af134c
=======
					//IF TAG START 14_d1d397
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 14_c03a0e
					$ifcondition_14_c03a0e = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_14_c03a0e) {
						$func_14_c03a0e = create_function("","return (".$ifcondition_14_c03a0e.");");
						if ($func_14_c03a0e()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" onclick=\"javascript:CMS_openPopUpImage('imagezoom.php?location=public&amp;module=pmedia&amp;file=".$object[2]->objectValues(9)->getValue('filename','')."&amp;label=".$object[2]->getValue('label','js')."');return false;\" target=\"_blank\" title=\"Voir l'image '".$object[2]->getValue('label','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" /></a>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 14_af134c
					//IF TAG START 15_4f70e2
=======
					}//IF TAG END 14_d1d397
					//IF TAG START 15_ef18f7
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
						unset($func_14_c03a0e);
					}
					unset($ifcondition_14_c03a0e);
					//IF TAG END 14_c03a0e
					//IF TAG START 15_c66aec
					$ifcondition_15_c66aec = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_15_c66aec) {
						$func_15_c66aec = create_function("","return (".$ifcondition_15_c66aec.");");
						if ($func_15_c66aec()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" style=\"max-width:200px;\" />
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 15_4f70e2
=======
					}//IF TAG END 15_ef18f7
>>>>>>> MERGE-SOURCE
=======
						unset($func_15_c66aec);
					}
					unset($ifcondition_15_c66aec);
					//IF TAG END 15_c66aec
>>>>>>> MERGE-SOURCE
					$content .="
					</div>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 13_67bd3f
			$count_4_673f0e++;
=======
			}//IF TAG END 13_5e1e88
			$count_4_9d40cc++;
>>>>>>> MERGE-SOURCE
=======
				unset($func_13_201355);
			}
			unset($ifcondition_13_201355);
			//IF TAG END 13_201355
			$count_4_cedebb++;
>>>>>>> MERGE-SOURCE
			//do all result vars replacement
<<<<<<< TREE
<<<<<<< TREE
			$content_4_673f0e.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
=======
			$content_4_9d40cc.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
=======
			$content_4_cedebb.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
<<<<<<< TREE
		$content = $content_4_673f0e; //retrieve previous content var if any
		$replace = $replace_4_673f0e; //retrieve previous replace vars if any
		$object[$objectDefinition_mediaresult] = $object_4_673f0e; //retrieve previous object search if any
=======
		$content = $content_4_9d40cc; //retrieve previous content var if any
		$replace = $replace_4_9d40cc; //retrieve previous replace vars if any
		$object[$objectDefinition_mediaresult] = $object_4_9d40cc; //retrieve previous object search if any
>>>>>>> MERGE-SOURCE
=======
		$content = $content_4_cedebb; //retrieve previous content var if any
		unset($content_4_cedebb);
		$replace = $replace_4_cedebb; //retrieve previous replace vars if any
		unset($replace_4_cedebb);
		$object[$objectDefinition_mediaresult] = $object_4_cedebb; //retrieve previous object search if any
		unset($object_4_cedebb);
>>>>>>> MERGE-SOURCE
	}
<<<<<<< TREE
<<<<<<< TREE
	//RESULT mediaresult TAG END 4_673f0e
=======
	//RESULT mediaresult TAG END 4_9d40cc
>>>>>>> MERGE-SOURCE
=======
	//RESULT mediaresult TAG END 4_cedebb
>>>>>>> MERGE-SOURCE
	//destroy search and results mediaresult objects
	unset($search_mediaresult);
	unset($results_mediaresult);
<<<<<<< TREE
<<<<<<< TREE
	//SEARCH mediaresult TAG END 2_45d025
=======
	//SEARCH mediaresult TAG END 2_13e52f
>>>>>>> MERGE-SOURCE
	echo CMS_polymod_definition_parsing::replaceVars($content, $replace);
}
=======
	//SEARCH mediaresult TAG END 2_b4a0e8
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
	<?php $cache_120fc760a837450712fb17b13841f916_content = $cache_120fc760a837450712fb17b13841f916->endSave();
endif;
unset($cache_120fc760a837450712fb17b13841f916);
echo $cache_120fc760a837450712fb17b13841f916_content;
unset($cache_120fc760a837450712fb17b13841f916_content);
>>>>>>> MERGE-SOURCE
   ?>

	</div>
	
<<<<<<< TREE


<div class="text"><p>Lors de la cr&eacute;ation du mod&egrave;le de page, on d&eacute;termine, par l<strong>&rsquo;insertion de tags XML,</strong> l&rsquo;emplacement des zones modifiables et la logique des liens permettant la navigation entre les pages du site.</p> <p>Les mod&egrave;les servent alors &agrave; cr&eacute;er les diff&eacute;rentes pages employ&eacute;es par le site.</p> <p>Les zones modifiables des mod&egrave;les permettent de d&eacute;limiter les positions du contenu dans les pages ce qui permet de limiter volontairement les zones d'intervention des r&eacute;dacteurs des pages.</p> <p>Ce principe permet de s'assurer d'une <strong>pr&eacute;sentation homog&egrave;ne de toutes les pages du site.</strong></p> <p>Seules les personnes disposant des <a href="http://test-folder/trunk/web/demo/35-gestion-des-droits.php">droits </a>suffisants pourront ensuite ajouter / modifier de l&rsquo;information dans les pages par l&rsquo;interm&eacute;diaire des <a href="http://test-folder/trunk/web/demo/26-rangees.php">rang&eacute;es de contenu</a> qui s'ins&egrave;rent dans les zones modifiables d&eacute;finies.</p></div>


=======
<?php /* End row [230 Texte et Média à Droite - r69_Texte_-_Media_a_droite.xml] */   ?><?php /* Start row [200 Texte - r44_200_Texte.xml] */   ?>

<div class="text"><p>Lors de la cr&eacute;ation du mod&egrave;le de page, on d&eacute;termine, par l<strong>&rsquo;insertion de tags XML,</strong> l&rsquo;emplacement des zones modifiables et la logique des liens permettant la navigation entre les pages du site.</p> <p>Les mod&egrave;les servent alors &agrave; cr&eacute;er les diff&eacute;rentes pages employ&eacute;es par le site.</p> <p>Les zones modifiables des mod&egrave;les permettent de d&eacute;limiter les positions du contenu dans les pages ce qui permet de limiter volontairement les zones d'intervention des r&eacute;dacteurs des pages.</p> <p>Ce principe permet de s'assurer d'une <strong>pr&eacute;sentation homog&egrave;ne de toutes les pages du site.</strong></p> <p>Seules les personnes disposant des <a href="http://127.0.0.1/web/demo/35-gestion-des-droits.php">droits </a>suffisants pourront ensuite ajouter / modifier de l&rsquo;information dans les pages par l&rsquo;interm&eacute;diaire des <a href="http://127.0.0.1/web/demo/26-rangees.php">rang&eacute;es de contenu</a> qui s'ins&egrave;rent dans les zones modifiables d&eacute;finies.</p></div>

<?php /* End row [200 Texte - r44_200_Texte.xml] */   ?><?php /* End clientspace [first] */   ?>
>>>>>>> MERGE-SOURCE
					<a href="#header" id="top" title="haut de la page">Haut</a>
				</div>
				<div class="spacer"></div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div id="menuBottom">
			<ul>
<<<<<<< TREE
				<li><a href="http://test-folder/trunk/web/demo/8-plan-du-site.php">Plan du site</a></li><li><a href="http://test-folder/trunk/web/demo/9-contact.php">Contact</a></li>
=======
				<li><a href="http://127.0.0.1/web/demo/8-plan-du-site.php">Plan du site</a></li><li><a href="http://127.0.0.1/web/demo/9-contact.php">Contact</a></li>
>>>>>>> MERGE-SOURCE
			</ul>
			<div class="spacer"></div>
		</div>
	</div>
<?php if (SYSTEM_DEBUG && STATS_DEBUG) {view_stat();}   ?>
</body>
</html>