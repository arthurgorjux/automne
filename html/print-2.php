<<<<<<< TREE
<?php //Generated on Thu, 11 Mar 2010 16:28:53 +0100 by Automne (TM) 4.0.1
require_once(dirname(__FILE__).'/../cms_rc_frontend.php');
=======
<?php //Generated on Fri, 19 Mar 2010 15:24:26 +0100 by Automne (TM) 4.0.1
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
>>>>>>> MERGE-SOURCE
if (!isset($cms_page_included) && !$_POST && !$_GET) {
<<<<<<< TREE
	CMS_view::redirect('http://test-folder/trunk/web/demo/print-2-accueil.php', true, 301);
=======
	CMS_view::redirect('http://127.0.0.1/web/demo/print-2-accueil.php', true, 301);
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
	<title>Automne 4 : Automne version 4, goûter à la simplicité</title>
	<link rel="stylesheet" type="text/css" href="/css/print.css" />
</head>
<body>
<h1>Automne version 4, goûter à la simplicité</h1>
<h3>

</h3>
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
	//SEARCH lastNews TAG START 7_3746d1
=======
	//SEARCH lastNews TAG START 7_da47ad
>>>>>>> MERGE-SOURCE
	$objectDefinition_lastNews = '1';
	if (!isset($objectDefinitions[$objectDefinition_lastNews])) {
		$objectDefinitions[$objectDefinition_lastNews] = new CMS_poly_object_definition($objectDefinition_lastNews);
	}
	//public search ?
<<<<<<< TREE
	$public_7_3746d1 = isset($public_search) ? $public_search : false;
=======
	$public_7_da47ad = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
	//get search params
<<<<<<< TREE
	$search_lastNews = new CMS_object_search($objectDefinitions[$objectDefinition_lastNews], $public_7_3746d1);
=======
	$search_lastNews = new CMS_object_search($objectDefinitions[$objectDefinition_lastNews], $public_7_da47ad);
>>>>>>> MERGE-SOURCE
	$launchSearch_lastNews = true;
	//add search conditions if any
	$search_lastNews->setAttribute('itemsPerPage', (int) CMS_polymod_definition_parsing::replaceVars("1", $replace));
	$search_lastNews->addOrderCondition("publication date after", "desc");
<<<<<<< TREE
	//RESULT lastNews TAG START 8_a95e2c
=======
	//RESULT lastNews TAG START 8_461d22
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
		$object_8_a95e2c = (isset($object[$objectDefinition_lastNews])) ? $object[$objectDefinition_lastNews] : ""; //save previous object search if any
		$replace_8_a95e2c = $replace; //save previous replace vars if any
		$count_8_a95e2c = 0;
		$content_8_a95e2c = $content; //save previous content var if any
		$maxPages_8_a95e2c = $search_lastNews->getMaxPages();
		$maxResults_8_a95e2c = $search_lastNews->getNumRows();
=======
		$object_8_461d22 = (isset($object[$objectDefinition_lastNews])) ? $object[$objectDefinition_lastNews] : ""; //save previous object search if any
		$replace_8_461d22 = $replace; //save previous replace vars if any
		$count_8_461d22 = 0;
		$content_8_461d22 = $content; //save previous content var if any
		$maxPages_8_461d22 = $search_lastNews->getMaxPages();
		$maxResults_8_461d22 = $search_lastNews->getNumRows();
>>>>>>> MERGE-SOURCE
		foreach ($results_lastNews as $object[$objectDefinition_lastNews]) {
			$content = "";
			$replace["atm-search"] = array (
				"{resultid}" 	=> (isset($resultID_lastNews)) ? $resultID_lastNews : $object[$objectDefinition_lastNews]->getID(),
<<<<<<< TREE
				"{firstresult}" => (!$count_8_a95e2c) ? 1 : 0,
				"{lastresult}" 	=> ($count_8_a95e2c == sizeof($results_lastNews)-1) ? 1 : 0,
				"{resultcount}" => ($count_8_a95e2c+1),
				"{maxpages}"    => $maxPages_8_a95e2c,
=======
				"{firstresult}" => (!$count_8_461d22) ? 1 : 0,
				"{lastresult}" 	=> ($count_8_461d22 == sizeof($results_lastNews)-1) ? 1 : 0,
				"{resultcount}" => ($count_8_461d22+1),
				"{maxpages}"    => $maxPages_8_461d22,
>>>>>>> MERGE-SOURCE
				"{currentpage}" => ($search_lastNews->getAttribute('page')+1),
<<<<<<< TREE
				"{maxresults}"  => $maxResults_8_a95e2c,
=======
				"{maxresults}"  => $maxResults_8_461d22,
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
			//IF TAG START 9_137ae6
=======
			//IF TAG START 9_f1a7ab
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
			}//IF TAG END 9_137ae6
=======
			}//IF TAG END 9_f1a7ab
>>>>>>> MERGE-SOURCE
			$content .="
			".$object[1]->objectValues(2)->getValue('htmlvalue','')."
			";
<<<<<<< TREE
			//IF TAG START 10_00d406
=======
			//IF TAG START 10_acbb33
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
			}//IF TAG END 10_00d406
=======
			}//IF TAG END 10_acbb33
>>>>>>> MERGE-SOURCE
			$content .="
			<div class=\"spacer\"></div>
			<div class=\"newsBottom\">
			<a class=\"newsAll\" href=\"".CMS_tree::getPageValue("5","url")."\">Toute l'actualite</a>
			";
<<<<<<< TREE
			//FUNCTION TAG START 11_739691
			$parameters_11_739691 = array ('selected' => CMS_polymod_definition_parsing::replaceVars("3", $replace),);
			$object_11_739691 = &$object[1];
			if (method_exists($object_11_739691, "rss")) {
				$content .= CMS_polymod_definition_parsing::replaceVars($object_11_739691->rss($parameters_11_739691, array (
=======
			//FUNCTION TAG START 11_2a2665
			$parameters_11_2a2665 = array ('selected' => CMS_polymod_definition_parsing::replaceVars("3", $replace),);
			$object_11_2a2665 = &$object[1];
			if (method_exists($object_11_2a2665, "rss")) {
				$content .= CMS_polymod_definition_parsing::replaceVars($object_11_2a2665->rss($parameters_11_2a2665, array (
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
				CMS_grandFather::raiseError("Malformed atm-function tag : can't found method rss on object : ".get_class($object_11_739691));
=======
				CMS_grandFather::raiseError("Malformed atm-function tag : can't found method rss on object : ".get_class($object_11_2a2665));
>>>>>>> MERGE-SOURCE
			}
<<<<<<< TREE
			//FUNCTION TAG END 11_739691
=======
			//FUNCTION TAG END 11_2a2665
>>>>>>> MERGE-SOURCE
			$content .="
			</div>
			</div>
			</div>
			";
<<<<<<< TREE
			$count_8_a95e2c++;
=======
			$count_8_461d22++;
>>>>>>> MERGE-SOURCE
			//do all result vars replacement
<<<<<<< TREE
			$content_8_a95e2c.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
=======
			$content_8_461d22.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
		$content = $content_8_a95e2c; //retrieve previous content var if any
		$replace = $replace_8_a95e2c; //retrieve previous replace vars if any
		$object[$objectDefinition_lastNews] = $object_8_a95e2c; //retrieve previous object search if any
=======
		$content = $content_8_461d22; //retrieve previous content var if any
		$replace = $replace_8_461d22; //retrieve previous replace vars if any
		$object[$objectDefinition_lastNews] = $object_8_461d22; //retrieve previous object search if any
>>>>>>> MERGE-SOURCE
	}
<<<<<<< TREE
	//RESULT lastNews TAG END 8_a95e2c
=======
	//RESULT lastNews TAG END 8_461d22
>>>>>>> MERGE-SOURCE
	//destroy search and results lastNews objects
	unset($search_lastNews);
	unset($results_lastNews);
<<<<<<< TREE
	//SEARCH lastNews TAG END 7_3746d1
=======
	//SEARCH lastNews TAG END 7_da47ad
>>>>>>> MERGE-SOURCE
	echo CMS_polymod_definition_parsing::replaceVars($content, $replace);
}
   ?>
<?php /* End row [615 [Actualités] Dernière actualité - r66_615_Derniere_actualite.xml] */   ?><?php /* End clientspace [second] */   ?><br /><?php /* Start clientspace [first] */   ?><?php /* Start row [110 Sous Titre (niveau 2) - r43_100_Sous_Titre.xml] */   ?>

<h2>Faciliter la communication et les échanges !</h2>

<?php /* End row [110 Sous Titre (niveau 2) - r43_100_Sous_Titre.xml] */   ?><?php /* Start row [200 Texte - r44_200_Texte.xml] */   ?>

<div class="text"><p><strong>Automne est votre solution</strong> si vous recherchez un outil de gestion de contenu performant et &eacute;volutif. </p><p>Un outil permettant autonomie et contr&ocirc;le &eacute;ditorial.</p><p>Que votre contenu soit statique ou dynamique avec une gestion en bases de donn&eacute;es, Automne facilite la communication et les &eacute;changes <strong>sans contraintes techniques.<br /></strong></p></div>

<?php /* End row [200 Texte - r44_200_Texte.xml] */   ?><?php /* End clientspace [first] */   ?><br />
<hr />
<div align="center">
	<small>
		
		
<<<<<<< TREE
				Page  "Accueil" (http://test-folder/trunk/web/demo/2-accueil.php)
=======
				Page  "Accueil" (http://127.0.0.1/web/demo/2-accueil.php)
>>>>>>> MERGE-SOURCE
				<br />
		Tir&eacute; du site http://<?php echo $_SERVER["HTTP_HOST"];    ?>
	</small>
</div>
<script language="JavaScript">window.print();</script>
<?php if (SYSTEM_DEBUG && STATS_DEBUG) {view_stat();}   ?>
</body>
</html>