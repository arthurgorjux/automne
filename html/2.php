<<<<<<< TREE
<?php //Generated on Thu, 11 Mar 2010 16:28:53 +0100 by Automne (TM) 4.0.1
require_once(dirname(__FILE__).'/../cms_rc_frontend.php');
=======
<?php //Generated on Fri, 19 Mar 2010 15:24:26 +0100 by Automne (TM) 4.0.1
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
>>>>>>> MERGE-SOURCE
if (!isset($cms_page_included) && !$_POST && !$_GET) {
<<<<<<< TREE
	CMS_view::redirect('http://test-folder/trunk/web/demo/2-accueil.php', true, 301);
=======
	CMS_view::redirect('http://127.0.0.1/web/demo/2-accueil.php', true, 301);
>>>>>>> MERGE-SOURCE
}
 ?>
<<<<<<< TREE
<?php require_once(PATH_REALROOT_FS.'/automne/classes/polymodFrontEnd.php');  ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";   ?>
=======
<?php require_once($_SERVER["DOCUMENT_ROOT"].'/automne/classes/polymodFrontEnd.php');  ?><?php /* Template [Accueil Démo - pt56_Accueil.xml] */   ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";   ?>
>>>>>>> MERGE-SOURCE
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Automne 4 : Automne version 4, goûter à la simplicité</title>
	<?php echo CMS_view::getCSS(array('/css/reset.css','/css/demo/common.css','/css/demo/accueil.css','/css/modules/pnews.css'), 'all');  ?>

	<!--[if lte IE 6]> 
		<link rel="stylesheet" type="text/css" href="/css/demo/ie6.css" media="all" />
	<![endif]-->
	<?php echo CMS_view::getCSS(array('/css/demo/print.css'), 'print');  ?>

	<?php echo CMS_view::getJavascript(array('','/js/CMS_functions.js','/js/modules/pnews/jquery-1.2.6.min-demo.js','/js/modules/pnews/pnews-demo.js'));  ?>

<<<<<<< TREE
	<link rel="icon" type="image/x-icon" href="http://test-folder/trunk/favicon.ico" />
	<meta name="description" content="Automne est un gestionnaire de contenu pour les entreprises open-source. Entièrement modulable il s'adapte à vos besoins." />
=======
	<link rel="icon" type="image/x-icon" href="http://127.0.0.1/favicon.ico" />
	<meta name="description" content="Automne est un gestionnaire de contenu pour les entreprises open-source. Entièrement modulable il s&#039;adapte à vos besoins." />
>>>>>>> MERGE-SOURCE
	<meta name="keywords" content="automne, cms, ecm, gestionnaire de contenu, toulouse, ws-interactive" />
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
			<div id="header"></div>
			<h1>Automne version 4, goûter à la simplicité</h1>
			<div id="menuLeft">
				<ul class="CMS_lvl2">
<<<<<<< TREE
					<li class="CMS_lvl2"><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/3-presentation.php">Présentation</a></li><li class="CMS_lvl2"><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/24-documentation.php">Fonctionnalités</a></li><li class="CMS_lvl2"><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/31-exemples-de-modules.php">Exemples de modules</a></li>
=======
					<li class="CMS_lvl2"><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/3-presentation.php">Présentation</a></li><li class="CMS_lvl2"><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/24-documentation.php">Fonctionnalités</a></li><li class="CMS_lvl2"><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/31-exemples-de-modules.php">Exemples de modules</a></li>
>>>>>>> MERGE-SOURCE
				</ul>
			</div>
			<div id="content">
				<div id="firstCol">
					<?php /* Start clientspace [first] */   ?><?php /* Start row [110 Sous Titre (niveau 2) - r43_100_Sous_Titre.xml] */   ?>

<h2>Faciliter la communication et les échanges !</h2>

<?php /* End row [110 Sous Titre (niveau 2) - r43_100_Sous_Titre.xml] */   ?><?php /* Start row [200 Texte - r44_200_Texte.xml] */   ?>

<div class="text"><p><strong>Automne est votre solution</strong> si vous recherchez un outil de gestion de contenu performant et &eacute;volutif. </p><p>Un outil permettant autonomie et contr&ocirc;le &eacute;ditorial.</p><p>Que votre contenu soit statique ou dynamique avec une gestion en bases de donn&eacute;es, Automne facilite la communication et les &eacute;changes <strong>sans contraintes techniques.<br /></strong></p></div>

<?php /* End row [200 Texte - r44_200_Texte.xml] */   ?><?php /* End clientspace [first] */   ?>
				</div>
				<div id="secondCol">
					<?php /* Start clientspace [second] */   ?><?php /* Start row [615 [Actualités] Dernière actualité - r66_615_Derniere_actualite.xml] */   ?>
	<?php /*Generated on Fri, 19 Mar 2010 15:24:26 +0100 by Automne (TM) 4.0.1 */
if(!APPLICATION_ENFORCES_ACCESS_CONTROL || (isset($cms_user) && is_a($cms_user, 'CMS_profile_user') && $cms_user->hasModuleClearance('pnews', CLEARANCE_MODULE_VIEW))){
	$content = "";
	$replace = "";
	if (!isset($objectDefinitions) || !is_array($objectDefinitions)) $objectDefinitions = array();
	$blockAttributes = array (
		'module' => 'pnews',
		'language' => 'fr',
	);
	$parameters['pageID'] = '2';
	if (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != 'fr')) $cms_language = new CMS_language('fr');
	$parameters['public'] = true;
	if (isset($parameters['item'])) {$parameters['objectID'] = $parameters['item']->getObjectID();} elseif (isset($parameters['itemID']) && sensitiveIO::isPositiveInteger($parameters['itemID']) && !isset($parameters['objectID'])) $parameters['objectID'] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters['itemID']);
	if (!isset($object) || !is_array($object)) $object = array();
	if (!isset($object[1])) $object[1] = new CMS_poly_object(1, 0, array(), $parameters['public']);
	$parameters['module'] = 'pnews';
<<<<<<< TREE
	//SEARCH lastNews TAG START 2_67faef
=======
	//SEARCH lastNews TAG START 2_8cc719
>>>>>>> MERGE-SOURCE
	$objectDefinition_lastNews = '1';
	if (!isset($objectDefinitions[$objectDefinition_lastNews])) {
		$objectDefinitions[$objectDefinition_lastNews] = new CMS_poly_object_definition($objectDefinition_lastNews);
	}
	//public search ?
<<<<<<< TREE
	$public_2_67faef = isset($public_search) ? $public_search : false;
=======
	$public_2_8cc719 = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
	//get search params
<<<<<<< TREE
	$search_lastNews = new CMS_object_search($objectDefinitions[$objectDefinition_lastNews], $public_2_67faef);
=======
	$search_lastNews = new CMS_object_search($objectDefinitions[$objectDefinition_lastNews], $public_2_8cc719);
>>>>>>> MERGE-SOURCE
	$launchSearch_lastNews = true;
	//add search conditions if any
	$search_lastNews->setAttribute('itemsPerPage', (int) CMS_polymod_definition_parsing::replaceVars("1", $replace));
	$search_lastNews->addOrderCondition("publication date after", "desc");
<<<<<<< TREE
	//RESULT lastNews TAG START 3_c0f00b
=======
	//RESULT lastNews TAG START 3_eea443
>>>>>>> MERGE-SOURCE
	//launch search lastNews if not already done
	if($launchSearch_lastNews && !isset($results_lastNews)) {
		if (isset($search_lastNews)) {
			$results_lastNews = $search_lastNews->search();
		} else {
			CMS_grandFather::raiseError("Malformed atm-result tag : can't use this tag outside of atm-search \"lastNews\" tag ...");
			$results_lastNews = array();
		}
	} elseif (!$launchSearch_lastNews) {
		$results_lastNews = array();
	}
	if ($results_lastNews) {
<<<<<<< TREE
		$object_3_c0f00b = (isset($object[$objectDefinition_lastNews])) ? $object[$objectDefinition_lastNews] : ""; //save previous object search if any
		$replace_3_c0f00b = $replace; //save previous replace vars if any
		$count_3_c0f00b = 0;
		$content_3_c0f00b = $content; //save previous content var if any
		$maxPages_3_c0f00b = $search_lastNews->getMaxPages();
		$maxResults_3_c0f00b = $search_lastNews->getNumRows();
=======
		$object_3_eea443 = (isset($object[$objectDefinition_lastNews])) ? $object[$objectDefinition_lastNews] : ""; //save previous object search if any
		$replace_3_eea443 = $replace; //save previous replace vars if any
		$count_3_eea443 = 0;
		$content_3_eea443 = $content; //save previous content var if any
		$maxPages_3_eea443 = $search_lastNews->getMaxPages();
		$maxResults_3_eea443 = $search_lastNews->getNumRows();
>>>>>>> MERGE-SOURCE
		foreach ($results_lastNews as $object[$objectDefinition_lastNews]) {
			$content = "";
			$replace["atm-search"] = array (
				"{resultid}" 	=> (isset($resultID_lastNews)) ? $resultID_lastNews : $object[$objectDefinition_lastNews]->getID(),
<<<<<<< TREE
				"{firstresult}" => (!$count_3_c0f00b) ? 1 : 0,
				"{lastresult}" 	=> ($count_3_c0f00b == sizeof($results_lastNews)-1) ? 1 : 0,
				"{resultcount}" => ($count_3_c0f00b+1),
				"{maxpages}"    => $maxPages_3_c0f00b,
=======
				"{firstresult}" => (!$count_3_eea443) ? 1 : 0,
				"{lastresult}" 	=> ($count_3_eea443 == sizeof($results_lastNews)-1) ? 1 : 0,
				"{resultcount}" => ($count_3_eea443+1),
				"{maxpages}"    => $maxPages_3_eea443,
>>>>>>> MERGE-SOURCE
				"{currentpage}" => ($search_lastNews->getAttribute('page')+1),
<<<<<<< TREE
				"{maxresults}"  => $maxResults_3_c0f00b,
=======
				"{maxresults}"  => $maxResults_3_eea443,
>>>>>>> MERGE-SOURCE
			);
			$content .="
			<div class=\"lastNews\">
			<div class=\"newsTop\">
			<h3><a href=\"".CMS_tree::getPageValue("5","url")."?item=".$object[1]->getValue('id','')."\">".$object[1]->objectValues(1)->getValue('value','')."</a></h3>
			<span>".$object[1]->getValue('formatedDateStart','d/m/Y')."</span>
			<div class=\"spacer\"></div>
			</div>
			<div class=\"newsContent\">
			";
<<<<<<< TREE
			//IF TAG START 4_36b5aa
=======
			//IF TAG START 4_d5f79a
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[1]->objectValues(4)->getValue('imageWidth','')), $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					$content .="
					<div class=\"imgRight shadow\">
					<img src=\"".$object[1]->objectValues(4)->getValue('imagePath','')."/".$object[1]->objectValues(4)->getValue('imageName','')."\" alt=\"".$object[1]->objectValues(4)->getValue('imageLabel','')."\" title=\"".$object[1]->objectValues(4)->getValue('imageLabel','')."\" />
					</div>
					";
				}
<<<<<<< TREE
			}//IF TAG END 4_36b5aa
=======
			}//IF TAG END 4_d5f79a
>>>>>>> MERGE-SOURCE
			$content .="
			".$object[1]->objectValues(2)->getValue('htmlvalue','')."
			";
<<<<<<< TREE
			//IF TAG START 5_628929
=======
			//IF TAG START 5_8ed021
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[1]->objectValues(3)->getValue('value','')), $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					$content .="
					<a href=\"".CMS_tree::getPageValue("5","url")."?item=".$object[1]->getValue('id','')."\" class=\"blocLien\" title=\"En savoir plus concernant '".$object[1]->getValue('label','')."'\">
					<span class=\"blocLienBottom\">En savoir plus</span>
					</a>
					";
				}
<<<<<<< TREE
			}//IF TAG END 5_628929
=======
			}//IF TAG END 5_8ed021
>>>>>>> MERGE-SOURCE
			$content .="
			<div class=\"spacer\"></div>
			<div class=\"newsBottom\">
			<a class=\"newsAll\" href=\"".CMS_tree::getPageValue("5","url")."\">Toute l'actualite</a>
			";
<<<<<<< TREE
			//FUNCTION TAG START 6_71b2db
			$parameters_6_71b2db = array ('selected' => CMS_polymod_definition_parsing::replaceVars("3", $replace),);
			$object_6_71b2db = &$object[1];
			if (method_exists($object_6_71b2db, "rss")) {
				$content .= CMS_polymod_definition_parsing::replaceVars($object_6_71b2db->rss($parameters_6_71b2db, array (
=======
			//FUNCTION TAG START 6_16c7b9
			$parameters_6_16c7b9 = array ('selected' => CMS_polymod_definition_parsing::replaceVars("3", $replace),);
			$object_6_16c7b9 = &$object[1];
			if (method_exists($object_6_16c7b9, "rss")) {
				$content .= CMS_polymod_definition_parsing::replaceVars($object_6_16c7b9->rss($parameters_6_16c7b9, array (
>>>>>>> MERGE-SOURCE
					0 =>
					array (
						'textnode' => '
						',
					),
					1 =>
					array (
						'nodename' => 'a',
						'attributes' =>
						array (
							'class' => 'newsRSS',
							'title' => '{description}',
							'href' => '{url}',
						),
						'childrens' =>
						array (
							0 =>
							array (
								'nodename' => 'img',
								'attributes' =>
								array (
									'src' => 'img/demo/common/rss.gif',
									'alt' => '{label}',
								),
							),
						),
					),
					2 =>
					array (
						'textnode' => '
						',
					),
				)), $replace);
			} else {
<<<<<<< TREE
				CMS_grandFather::raiseError("Malformed atm-function tag : can't found method rss on object : ".get_class($object_6_71b2db));
=======
				CMS_grandFather::raiseError("Malformed atm-function tag : can't found method rss on object : ".get_class($object_6_16c7b9));
>>>>>>> MERGE-SOURCE
			}
<<<<<<< TREE
			//FUNCTION TAG END 6_71b2db
=======
			//FUNCTION TAG END 6_16c7b9
>>>>>>> MERGE-SOURCE
			$content .="
			</div>
			</div>
			</div>
			";
<<<<<<< TREE
			$count_3_c0f00b++;
=======
			$count_3_eea443++;
>>>>>>> MERGE-SOURCE
			//do all result vars replacement
<<<<<<< TREE
			$content_3_c0f00b.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
=======
			$content_3_eea443.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
		$content = $content_3_c0f00b; //retrieve previous content var if any
		$replace = $replace_3_c0f00b; //retrieve previous replace vars if any
		$object[$objectDefinition_lastNews] = $object_3_c0f00b; //retrieve previous object search if any
=======
		$content = $content_3_eea443; //retrieve previous content var if any
		$replace = $replace_3_eea443; //retrieve previous replace vars if any
		$object[$objectDefinition_lastNews] = $object_3_eea443; //retrieve previous object search if any
>>>>>>> MERGE-SOURCE
	}
<<<<<<< TREE
	//RESULT lastNews TAG END 3_c0f00b
=======
	//RESULT lastNews TAG END 3_eea443
>>>>>>> MERGE-SOURCE
	//destroy search and results lastNews objects
	unset($search_lastNews);
	unset($results_lastNews);
<<<<<<< TREE
	//SEARCH lastNews TAG END 2_67faef
=======
	//SEARCH lastNews TAG END 2_8cc719
>>>>>>> MERGE-SOURCE
	echo CMS_polymod_definition_parsing::replaceVars($content, $replace);
}
   ?>
<?php /* End row [615 [Actualités] Dernière actualité - r66_615_Derniere_actualite.xml] */   ?><?php /* End clientspace [second] */   ?>
				</div>
			</div>
			<div class="spacer"></div>
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