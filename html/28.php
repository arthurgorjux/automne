<<<<<<< TREE
<<<<<<< TREE
<?php //Generated on Thu, 11 Mar 2010 16:28:37 +0100 by Automne (TM) 4.0.1
require_once(dirname(__FILE__).'/../cms_rc_frontend.php');
=======
<?php //Generated on Fri, 19 Mar 2010 15:24:41 +0100 by Automne (TM) 4.0.1
=======
<?php //Generated on Mon, 24 May 2010 17:00:01 +0200 by Automne (TM) 4.0.2
>>>>>>> MERGE-SOURCE
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
>>>>>>> MERGE-SOURCE
if (!isset($cms_page_included) && !$_POST && !$_GET) {
<<<<<<< TREE
	CMS_view::redirect('http://test-folder/trunk/web/demo/28-administration.php', true, 301);
=======
	CMS_view::redirect('http://127.0.0.1/web/demo/28-administration.php', true, 301);
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
	<title>Automne 4 : Gestion des utilisateurs</title>
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
					<ul class="CMS_lvl2"><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/3-presentation.php">Présentation</a></li><li class="CMS_lvl2 CMS_open "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/24-documentation.php">Fonctionnalités</a><ul class="CMS_lvl3"><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/25-modeles.php">Modèles</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/26-rangees.php">Rangées</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/27-modules.php">Modules</a></li><li class="CMS_lvl3 CMS_nosub CMS_current"><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/28-administration.php">Gestion des utilisateurs</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/35-gestion-des-droits.php">Gestion des droits</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/37-droit-de-validation.php">Workflow de publication</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/38-aide-aux-utilisateurs.php">Aide utilisateurs</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/34-fonctions-avancees.php">Fonctions avancées</a></li></ul></li><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/31-exemples-de-modules.php">Exemples de modules</a></li></ul>
=======
					<ul class="CMS_lvl2"><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/3-presentation.php">Présentation</a></li><li class="CMS_lvl2 CMS_open "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/24-documentation.php">Fonctionnalités</a><ul class="CMS_lvl3"><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/25-modeles.php">Modèles</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/26-rangees.php">Rangées</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/27-modules.php">Modules</a></li><li class="CMS_lvl3 CMS_nosub CMS_current"><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/28-administration.php">Gestion des utilisateurs</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/35-gestion-des-droits.php">Gestion des droits</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/37-droit-de-validation.php">Workflow de publication</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/38-aide-aux-utilisateurs.php">Aide utilisateurs</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/34-fonctions-avancees.php">Fonctions avancées</a></li></ul></li><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/31-exemples-de-modules.php">Exemples de modules</a></li></ul>
>>>>>>> MERGE-SOURCE
				</div>
				<div id="content" class="page28">
					<div id="breadcrumbs">
<<<<<<< TREE
						<a href="http://test-folder/trunk/web/demo/2-accueil.php">Accueil</a> &gt; <a href="http://test-folder/trunk/web/demo/24-documentation.php">Fonctionnalités</a> &gt; 
=======
						<a href="http://127.0.0.1/web/demo/2-accueil.php">Accueil</a> &gt; <a href="http://127.0.0.1/web/demo/24-documentation.php">Fonctionnalités</a> &gt; 
>>>>>>> MERGE-SOURCE
					</div>
					<div id="title">
						<h1>Gestion des utilisateurs</h1>
					</div>
<<<<<<< TREE
					<atm-toc />
<<<<<<< TREE
					
	
	
		<div class="text"><h2>Principe de gestion d'utilisateur</h2><p>Lors de la cr&eacute;ation d&rsquo;un site avec Automne 4, un utilisateur privil&eacute;gi&eacute; dit <a href="http://test-folder/trunk/web/demo/35-gestion-des-droits.php">&laquo; Super Administrateur &raquo;</a> poss&egrave;de <strong>tous les droits sur l&rsquo;application.</strong></p> <p>Ce super administrateur a alors la possibilit&eacute; de cr&eacute;er des utilisateurs ainsi que des groupes d&rsquo;utilisateurs. Chacun dispose de droits sur certaines fonctionnalit&eacute;s de l&rsquo;application. Les groupes par d&eacute;faut sont : administrateur, validateur et r&eacute;dacteur.&nbsp;</p><p>Les r&eacute;dacteurs n'auront alors &agrave; leurs disposition que les outils qui leurs sont n&eacute;cessaires. Leurs interventions seront ainsi limit&eacute;s &agrave; leurs besoins.</p><p>Il est aussi possible, gr&acirc;ce au <a href="http://test-folder/trunk/web/demo/37-droit-de-validation.php">processus de workflow</a> de soumettre les donn&eacute;es saisies &agrave; la validation d'une autorit&eacute; sup&eacute;rieure. Ainsi le contenu pourra &ecirc;tre v&eacute;rifi&eacute; avant sa mise en ligne.</p></div>
	

=======
=======
>>>>>>> MERGE-SOURCE
					<?php /* Start clientspace [first] */   ?><?php /* Start row [210 Texte et Image Droite - r45_210_Texte__image_droite.xml] */   ?>
	
	
		<div class="text"><h2>Principe de gestion d'utilisateur</h2><p>Lors de la cr&eacute;ation d&rsquo;un site avec Automne 4, un utilisateur privil&eacute;gi&eacute; dit <a href="http://127.0.0.1/web/demo/35-gestion-des-droits.php">&laquo; Super Administrateur &raquo;</a> poss&egrave;de <strong>tous les droits sur l&rsquo;application.</strong></p> <p>Ce super administrateur a alors la possibilit&eacute; de cr&eacute;er des utilisateurs ainsi que des groupes d&rsquo;utilisateurs. Chacun dispose de droits sur certaines fonctionnalit&eacute;s de l&rsquo;application. Les groupes par d&eacute;faut sont : administrateur, validateur et r&eacute;dacteur.&nbsp;</p><p>Les r&eacute;dacteurs n'auront alors &agrave; leurs disposition que les outils qui leurs sont n&eacute;cessaires. Leurs interventions seront ainsi limit&eacute;s &agrave; leurs besoins.</p><p>Il est aussi possible, gr&acirc;ce au <a href="http://127.0.0.1/web/demo/37-droit-de-validation.php">processus de workflow</a> de soumettre les donn&eacute;es saisies &agrave; la validation d'une autorit&eacute; sup&eacute;rieure. Ainsi le contenu pourra &ecirc;tre v&eacute;rifi&eacute; avant sa mise en ligne.</p></div>
	
<?php /* End row [210 Texte et Image Droite - r45_210_Texte__image_droite.xml] */   ?><?php /* Start row [230 Texte et Média à Droite - r69_Texte_-_Media_a_droite.xml] */   ?>
>>>>>>> MERGE-SOURCE
	<div class="imgRight">
		<?php $cache_b8a23ab2fb372f37b1dec4cd4bf47b1c = new CMS_cache('b8a23ab2fb372f37b1dec4cd4bf47b1c', 'polymod', 'auto', true);
if ($cache_b8a23ab2fb372f37b1dec4cd4bf47b1c->exist()):
	//Get content from cache
	$cache_b8a23ab2fb372f37b1dec4cd4bf47b1c_content = $cache_b8a23ab2fb372f37b1dec4cd4bf47b1c->load();
else:
	$cache_b8a23ab2fb372f37b1dec4cd4bf47b1c->start();
	   ?>
<?php /*Generated on Mon, 24 May 2010 17:00:01 +0200 by Automne (TM) 4.0.2 */
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
				'item' => '27',
			),
		),
		'module' => 'pmedia',
		'language' => 'fr',
	);
	$parameters['pageID'] = '28';
	if (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != 'fr')) $cms_language = new CMS_language('fr');
	$parameters['public'] = true;
	if (isset($parameters['item'])) {$parameters['objectID'] = $parameters['item']->getObjectID();} elseif (isset($parameters['itemID']) && sensitiveIO::isPositiveInteger($parameters['itemID']) && !isset($parameters['objectID'])) $parameters['objectID'] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters['itemID']);
	if (!isset($object) || !is_array($object)) $object = array();
	if (!isset($object[2])) $object[2] = new CMS_poly_object(2, 0, array(), $parameters['public']);
	$parameters['module'] = 'pmedia';
<<<<<<< TREE
<<<<<<< TREE
	//SEARCH mediaresult TAG START 2_1684af
=======
	//SEARCH mediaresult TAG START 2_01383a
>>>>>>> MERGE-SOURCE
=======
	//SEARCH mediaresult TAG START 2_3bd64b
>>>>>>> MERGE-SOURCE
	$objectDefinition_mediaresult = '2';
	if (!isset($objectDefinitions[$objectDefinition_mediaresult])) {
		$objectDefinitions[$objectDefinition_mediaresult] = new CMS_poly_object_definition($objectDefinition_mediaresult);
	}
	//public search ?
<<<<<<< TREE
<<<<<<< TREE
	$public_2_1684af = isset($public_search) ? $public_search : false;
=======
	$public_2_01383a = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
=======
	$public_2_3bd64b = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
	//get search params
<<<<<<< TREE
<<<<<<< TREE
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_2_1684af);
=======
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_2_01383a);
>>>>>>> MERGE-SOURCE
=======
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_2_3bd64b);
>>>>>>> MERGE-SOURCE
	$launchSearch_mediaresult = true;
	//add search conditions if any
	if (isset($blockAttributes['search']['mediaresult']['item'])) {
<<<<<<< TREE
<<<<<<< TREE
		$values_3_0298e1 = array (
=======
		$values_3_0f263b = array (
>>>>>>> MERGE-SOURCE
=======
		$values_3_af2586 = array (
>>>>>>> MERGE-SOURCE
			'search' => 'mediaresult',
			'type' => 'item',
			'value' => 'block',
			'mandatory' => 'true',
		);
<<<<<<< TREE
<<<<<<< TREE
		$values_3_0298e1['value'] = $blockAttributes['search']['mediaresult']['item'];
		if ($values_3_0298e1['type'] == 'publication date after' || $values_3_0298e1['type'] == 'publication date before') {
=======
		$values_3_0f263b['value'] = $blockAttributes['search']['mediaresult']['item'];
		if ($values_3_0f263b['type'] == 'publication date after' || $values_3_0f263b['type'] == 'publication date before') {
>>>>>>> MERGE-SOURCE
=======
		$values_3_af2586['value'] = $blockAttributes['search']['mediaresult']['item'];
		if ($values_3_af2586['type'] == 'publication date after' || $values_3_af2586['type'] == 'publication date before') {
>>>>>>> MERGE-SOURCE
			//convert DB format to current language format
			$dt = new CMS_date();
<<<<<<< TREE
<<<<<<< TREE
			$dt->setFromDBValue($values_3_0298e1['value']);
			$values_3_0298e1['value'] = $dt->getLocalizedDate($cms_language->getDateFormat());
=======
			$dt->setFromDBValue($values_3_0f263b['value']);
			$values_3_0f263b['value'] = $dt->getLocalizedDate($cms_language->getDateFormat());
>>>>>>> MERGE-SOURCE
=======
			$dt->setFromDBValue($values_3_af2586['value']);
			$values_3_af2586['value'] = $dt->getLocalizedDate($cms_language->getDateFormat());
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
<<<<<<< TREE
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, $values_3_0298e1)) ? $launchSearch_mediaresult : false;
=======
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, $values_3_0f263b)) ? $launchSearch_mediaresult : false;
>>>>>>> MERGE-SOURCE
=======
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, $values_3_af2586)) ? $launchSearch_mediaresult : false;
>>>>>>> MERGE-SOURCE
	} elseif (true == true) {
		//search parameter is mandatory and no value found
		$launchSearch_mediaresult = false;
	}
<<<<<<< TREE
<<<<<<< TREE
	//RESULT mediaresult TAG START 4_8e6e36
=======
	//RESULT mediaresult TAG START 4_3561c5
>>>>>>> MERGE-SOURCE
=======
	//RESULT mediaresult TAG START 4_53ec85
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
		$object_4_8e6e36 = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_4_8e6e36 = $replace; //save previous replace vars if any
		$count_4_8e6e36 = 0;
		$content_4_8e6e36 = $content; //save previous content var if any
		$maxPages_4_8e6e36 = $search_mediaresult->getMaxPages();
		$maxResults_4_8e6e36 = $search_mediaresult->getNumRows();
=======
		$object_4_3561c5 = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_4_3561c5 = $replace; //save previous replace vars if any
		$count_4_3561c5 = 0;
		$content_4_3561c5 = $content; //save previous content var if any
		$maxPages_4_3561c5 = $search_mediaresult->getMaxPages();
		$maxResults_4_3561c5 = $search_mediaresult->getNumRows();
>>>>>>> MERGE-SOURCE
=======
		$object_4_53ec85 = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_4_53ec85 = $replace; //save previous replace vars if any
		$count_4_53ec85 = 0;
		$content_4_53ec85 = $content; //save previous content var if any
		$maxPages_4_53ec85 = $search_mediaresult->getMaxPages();
		$maxResults_4_53ec85 = $search_mediaresult->getNumRows();
>>>>>>> MERGE-SOURCE
		foreach ($results_mediaresult as $object[$objectDefinition_mediaresult]) {
			$content = "";
			$replace["atm-search"] = array (
				"{resultid}" 	=> (isset($resultID_mediaresult)) ? $resultID_mediaresult : $object[$objectDefinition_mediaresult]->getID(),
<<<<<<< TREE
<<<<<<< TREE
				"{firstresult}" => (!$count_4_8e6e36) ? 1 : 0,
				"{lastresult}" 	=> ($count_4_8e6e36 == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_4_8e6e36+1),
				"{maxpages}"    => $maxPages_4_8e6e36,
=======
				"{firstresult}" => (!$count_4_3561c5) ? 1 : 0,
				"{lastresult}" 	=> ($count_4_3561c5 == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_4_3561c5+1),
				"{maxpages}"    => $maxPages_4_3561c5,
>>>>>>> MERGE-SOURCE
=======
				"{firstresult}" => (!$count_4_53ec85) ? 1 : 0,
				"{lastresult}" 	=> ($count_4_53ec85 == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_4_53ec85+1),
				"{maxpages}"    => $maxPages_4_53ec85,
>>>>>>> MERGE-SOURCE
				"{currentpage}" => ($search_mediaresult->getAttribute('page')+1),
<<<<<<< TREE
<<<<<<< TREE
				"{maxresults}"  => $maxResults_4_8e6e36,
=======
				"{maxresults}"  => $maxResults_4_3561c5,
>>>>>>> MERGE-SOURCE
=======
				"{maxresults}"  => $maxResults_4_53ec85,
				"{altclass}"    => (($count_4_53ec85+1) % 2) ? "CMS_odd" : "CMS_even",
>>>>>>> MERGE-SOURCE
			);
<<<<<<< TREE
<<<<<<< TREE
			//IF TAG START 5_d7363f
=======
			//IF TAG START 5_e7c0de
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
			//IF TAG START 5_b66246
			$ifcondition_5_b66246 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition_5_b66246) {
				$func_5_b66246 = create_function("","return (".$ifcondition_5_b66246.");");
				if ($func_5_b66246()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"T&eacute;l&eacute;charger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\">";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 6_572011
=======
					//IF TAG START 6_78cd38
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 6_893718
					$ifcondition_6_893718 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition_6_893718) {
						$func_6_893718 = create_function("","return (".$ifcondition_6_893718.");");
						if ($func_6_893718()) {
>>>>>>> MERGE-SOURCE
							$content .="<img src=\"".$object[2]->objectValues(9)->getValue('fileIcon','')."\" alt=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" title=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" />";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 6_572011
=======
					}//IF TAG END 6_78cd38
>>>>>>> MERGE-SOURCE
=======
						unset($func_6_893718);
					}
					unset($ifcondition_6_893718);
					//IF TAG END 6_893718
>>>>>>> MERGE-SOURCE
					$content .=" ".$object[2]->getValue('label','')."</a>
					";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 7_808bff
=======
					//IF TAG START 7_799f7a
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 7_cfd678
					$ifcondition_7_cfd678 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_7_cfd678) {
						$func_7_cfd678 = create_function("","return (".$ifcondition_7_cfd678.");");
						if ($func_7_cfd678()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<div class=\"shadow\">
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
							</div>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 7_808bff
=======
					}//IF TAG END 7_799f7a
>>>>>>> MERGE-SOURCE
=======
						unset($func_7_cfd678);
					}
					unset($ifcondition_7_cfd678);
					//IF TAG END 7_cfd678
>>>>>>> MERGE-SOURCE
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 5_d7363f
			//IF TAG START 8_03a758
=======
			}//IF TAG END 5_e7c0de
			//IF TAG START 8_7c0a47
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
<<<<<<< TREE
					//IF TAG START 9_916783
=======
					//IF TAG START 9_25c3ff
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
				unset($func_5_b66246);
			}
			unset($ifcondition_5_b66246);
			//IF TAG END 5_b66246
			//IF TAG START 8_b7c012
			$ifcondition_8_b7c012 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
			if ($ifcondition_8_b7c012) {
				$func_8_b7c012 = create_function("","return (".$ifcondition_8_b7c012.");");
				if ($func_8_b7c012()) {
					//IF TAG START 9_729b85
					$ifcondition_9_729b85 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_9_729b85) {
						$func_9_729b85 = create_function("","return (".$ifcondition_9_729b85.");");
						if ($func_9_729b85()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<script type=\"text/javascript\">
							swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml', startimage:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."'}, {allowfullscreen:true, wmode:'transparent'}, false);
							</script>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 9_916783
					//IF TAG START 10_8795b5
=======
					}//IF TAG END 9_25c3ff
					//IF TAG START 10_0432a8
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
						unset($func_9_729b85);
					}
					unset($ifcondition_9_729b85);
					//IF TAG END 9_729b85
					//IF TAG START 10_08beee
					$ifcondition_10_08beee = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_10_08beee) {
						$func_10_08beee = create_function("","return (".$ifcondition_10_08beee.");");
						if ($func_10_08beee()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<script type=\"text/javascript\">
							swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml'}, {allowfullscreen:true, wmode:'transparent'}, false);
							</script>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 10_8795b5
=======
					}//IF TAG END 10_0432a8
>>>>>>> MERGE-SOURCE
=======
						unset($func_10_08beee);
					}
					unset($ifcondition_10_08beee);
					//IF TAG END 10_08beee
>>>>>>> MERGE-SOURCE
					$content .="
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-video\" style=\"width:320px;height:200px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 8_03a758
			//IF TAG START 11_8dd8b9
=======
			}//IF TAG END 8_7c0a47
			//IF TAG START 11_4c0856
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
				unset($func_8_b7c012);
			}
			unset($ifcondition_8_b7c012);
			//IF TAG END 8_b7c012
			//IF TAG START 11_af2422
			$ifcondition_11_af2422 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
			if ($ifcondition_11_af2422) {
				$func_11_af2422 = create_function("","return (".$ifcondition_11_af2422.");");
				if ($func_11_af2422()) {
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
					//IF TAG START 12_12624a
=======
					//IF TAG START 12_4faaad
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 12_344a70
					$ifcondition_12_344a70 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_12_344a70) {
						$func_12_344a70 = create_function("","return (".$ifcondition_12_344a70.");");
						if ($func_12_344a70()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<div class=\"shadow\">
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
							</div>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 12_12624a
=======
					}//IF TAG END 12_4faaad
>>>>>>> MERGE-SOURCE
=======
						unset($func_12_344a70);
					}
					unset($ifcondition_12_344a70);
					//IF TAG END 12_344a70
>>>>>>> MERGE-SOURCE
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 11_8dd8b9
			//IF TAG START 13_6eab5b
=======
			}//IF TAG END 11_4c0856
			//IF TAG START 13_e41885
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
				unset($func_11_af2422);
			}
			unset($ifcondition_11_af2422);
			//IF TAG END 11_af2422
			//IF TAG START 13_7e5383
			$ifcondition_13_7e5383 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition_13_7e5383) {
				$func_13_7e5383 = create_function("","return (".$ifcondition_13_7e5383.");");
				if ($func_13_7e5383()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<div class=\"shadow\">
					";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 14_3ce9f2
=======
					//IF TAG START 14_df1b48
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 14_f2e4d5
					$ifcondition_14_f2e4d5 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_14_f2e4d5) {
						$func_14_f2e4d5 = create_function("","return (".$ifcondition_14_f2e4d5.");");
						if ($func_14_f2e4d5()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" onclick=\"javascript:CMS_openPopUpImage('imagezoom.php?location=public&amp;module=pmedia&amp;file=".$object[2]->objectValues(9)->getValue('filename','')."&amp;label=".$object[2]->getValue('label','js')."');return false;\" target=\"_blank\" title=\"Voir l'image '".$object[2]->getValue('label','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" /></a>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 14_3ce9f2
					//IF TAG START 15_e6ae13
=======
					}//IF TAG END 14_df1b48
					//IF TAG START 15_e077d3
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
						unset($func_14_f2e4d5);
					}
					unset($ifcondition_14_f2e4d5);
					//IF TAG END 14_f2e4d5
					//IF TAG START 15_19ce0a
					$ifcondition_15_19ce0a = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_15_19ce0a) {
						$func_15_19ce0a = create_function("","return (".$ifcondition_15_19ce0a.");");
						if ($func_15_19ce0a()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" style=\"max-width:200px;\" />
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 15_e6ae13
=======
					}//IF TAG END 15_e077d3
>>>>>>> MERGE-SOURCE
=======
						unset($func_15_19ce0a);
					}
					unset($ifcondition_15_19ce0a);
					//IF TAG END 15_19ce0a
>>>>>>> MERGE-SOURCE
					$content .="
					</div>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 13_6eab5b
			$count_4_8e6e36++;
=======
			}//IF TAG END 13_e41885
			$count_4_3561c5++;
>>>>>>> MERGE-SOURCE
=======
				unset($func_13_7e5383);
			}
			unset($ifcondition_13_7e5383);
			//IF TAG END 13_7e5383
			$count_4_53ec85++;
>>>>>>> MERGE-SOURCE
			//do all result vars replacement
<<<<<<< TREE
<<<<<<< TREE
			$content_4_8e6e36.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
=======
			$content_4_3561c5.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
=======
			$content_4_53ec85.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
<<<<<<< TREE
		$content = $content_4_8e6e36; //retrieve previous content var if any
		$replace = $replace_4_8e6e36; //retrieve previous replace vars if any
		$object[$objectDefinition_mediaresult] = $object_4_8e6e36; //retrieve previous object search if any
=======
		$content = $content_4_3561c5; //retrieve previous content var if any
		$replace = $replace_4_3561c5; //retrieve previous replace vars if any
		$object[$objectDefinition_mediaresult] = $object_4_3561c5; //retrieve previous object search if any
>>>>>>> MERGE-SOURCE
=======
		$content = $content_4_53ec85; //retrieve previous content var if any
		unset($content_4_53ec85);
		$replace = $replace_4_53ec85; //retrieve previous replace vars if any
		unset($replace_4_53ec85);
		$object[$objectDefinition_mediaresult] = $object_4_53ec85; //retrieve previous object search if any
		unset($object_4_53ec85);
>>>>>>> MERGE-SOURCE
	}
<<<<<<< TREE
<<<<<<< TREE
	//RESULT mediaresult TAG END 4_8e6e36
=======
	//RESULT mediaresult TAG END 4_3561c5
>>>>>>> MERGE-SOURCE
=======
	//RESULT mediaresult TAG END 4_53ec85
>>>>>>> MERGE-SOURCE
	//destroy search and results mediaresult objects
	unset($search_mediaresult);
	unset($results_mediaresult);
<<<<<<< TREE
<<<<<<< TREE
	//SEARCH mediaresult TAG END 2_1684af
=======
	//SEARCH mediaresult TAG END 2_01383a
>>>>>>> MERGE-SOURCE
	echo CMS_polymod_definition_parsing::replaceVars($content, $replace);
}
=======
	//SEARCH mediaresult TAG END 2_3bd64b
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
	<?php $cache_b8a23ab2fb372f37b1dec4cd4bf47b1c_content = $cache_b8a23ab2fb372f37b1dec4cd4bf47b1c->endSave();
endif;
unset($cache_b8a23ab2fb372f37b1dec4cd4bf47b1c);
echo $cache_b8a23ab2fb372f37b1dec4cd4bf47b1c_content;
unset($cache_b8a23ab2fb372f37b1dec4cd4bf47b1c_content);
>>>>>>> MERGE-SOURCE
   ?>

	</div>
	
		<div class="text"><h3>Les utilisateurs peuvent cr&eacute;er d'autres utilisateurs ou groupes d'utilisateurs si et seulement si ils en ont les droits.</h3> <h3>Les utilisateurs appartenant &agrave; un groupe disposent des droits attribu&eacute;s au groupe.</h3></div>
		<div class="spacer"></div>
	
<?php /* End row [230 Texte et Média à Droite - r69_Texte_-_Media_a_droite.xml] */   ?><?php /* End clientspace [first] */   ?>
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