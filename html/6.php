<<<<<<< TREE
<<<<<<< TREE
<?php //Generated on Thu, 11 Mar 2010 16:28:49 +0100 by Automne (TM) 4.0.1
require_once(dirname(__FILE__).'/../cms_rc_frontend.php');
=======
<?php //Generated on Fri, 19 Mar 2010 15:24:31 +0100 by Automne (TM) 4.0.1
=======
<?php //Generated on Mon, 24 May 2010 16:59:51 +0200 by Automne (TM) 4.0.2
>>>>>>> MERGE-SOURCE
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
>>>>>>> MERGE-SOURCE
if (!isset($cms_page_included) && !$_POST && !$_GET) {
<<<<<<< TREE
	CMS_view::redirect('http://test-folder/trunk/web/demo/6-mediatheque.php', true, 301);
=======
	CMS_view::redirect('http://127.0.0.1/web/demo/6-mediatheque.php', true, 301);
>>>>>>> MERGE-SOURCE
}
 ?>
<<<<<<< TREE
<?php require_once(PATH_REALROOT_FS.'/automne/classes/polymodFrontEnd.php');  ?><?php if(isset($_REQUEST['out']) && $_REQUEST['out'] == 'xml') {
=======
<?php require_once($_SERVER["DOCUMENT_ROOT"].'/automne/classes/polymodFrontEnd.php');  ?><?php if(isset($_REQUEST['out']) && $_REQUEST['out'] == 'xml') {
$cms_view = CMS_view::getInstance();
//set default display mode for this page
$cms_view->setDisplayMode(CMS_view::SHOW_RAW);
$cms_view->setContentTag('data');
$cache_0d0fcbbbbbe713d8efb14e7bf1fab208 = new CMS_cache('0d0fcbbbbbe713d8efb14e7bf1fab208', 'polymod', 'auto', true);
if ($cache_0d0fcbbbbbe713d8efb14e7bf1fab208->exist()):
	//Get content from cache
	$cache_0d0fcbbbbbe713d8efb14e7bf1fab208_content = $cache_0d0fcbbbbbe713d8efb14e7bf1fab208->load();
else:
	$cache_0d0fcbbbbbe713d8efb14e7bf1fab208->start();
>>>>>>> MERGE-SOURCE

$content = "";
$replace = "";
$atmIfResults = array();
if (!isset($objectDefinitions) || !is_array($objectDefinitions)) $objectDefinitions = array();
$blockAttributes = array (
  'module' => 'pmedia',
  'language' => 'fr',
);
$parameters['pageID'] = '6';
if (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != 'fr')) $cms_language = new CMS_language('fr');
$parameters['public'] = true;
if (isset($parameters['item'])) {$parameters['objectID'] = $parameters['item']->getObjectID();} elseif (isset($parameters['itemID']) && sensitiveIO::isPositiveInteger($parameters['itemID']) && !isset($parameters['objectID'])) $parameters['objectID'] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters['itemID']);
if (!isset($object) || !is_array($object)) $object = array();
if (!isset($object[2])) $object[2] = new CMS_poly_object(2, 0, array(), $parameters['public']);
$parameters['module'] = 'pmedia';

$xmlCondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "out", "string", @$out))." == 'xml'", $replace);
if ($xmlCondition) {
	$func = create_function("","return (".$xmlCondition.");");
	if ($func()) {
<<<<<<< TREE
<<<<<<< TREE
		//AJAX TAG START 3_d4dcfb
		//SEARCH mediaresult TAG START 4_8b8ade
=======
		//AJAX TAG START 3_989692
		//SEARCH mediaresult TAG START 4_70c271
>>>>>>> MERGE-SOURCE
=======
		//AJAX TAG START 3_4bfb68
		//SEARCH mediaresult TAG START 4_47b18d
>>>>>>> MERGE-SOURCE
		$objectDefinition_mediaresult = '2';
		if (!isset($objectDefinitions[$objectDefinition_mediaresult])) {
			$objectDefinitions[$objectDefinition_mediaresult] = new CMS_poly_object_definition($objectDefinition_mediaresult);
		}
		//public search ?
<<<<<<< TREE
<<<<<<< TREE
		$public_4_8b8ade = isset($public_search) ? $public_search : false;
=======
		$public_4_70c271 = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
=======
		$public_4_47b18d = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
		//get search params
<<<<<<< TREE
<<<<<<< TREE
		$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_4_8b8ade);
=======
		$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_4_70c271);
>>>>>>> MERGE-SOURCE
=======
		$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_4_47b18d);
>>>>>>> MERGE-SOURCE
		$launchSearch_mediaresult = true;
		//add search conditions if any
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, array (
			'search' => 'mediaresult',
			'type' => 8,
			'value' => CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat),
			'mandatory' => 'false',
		))) ? $launchSearch_mediaresult : false;
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, array (
			'search' => 'mediaresult',
			'type' => 'keywords',
			'value' => CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword),
			'mandatory' => 'false',
		))) ? $launchSearch_mediaresult : false;
		$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, array (
			'search' => 'mediaresult',
			'type' => 'item',
			'value' => CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item),
			'mandatory' => 'false',
		))) ? $launchSearch_mediaresult : false;
		$search_mediaresult->setAttribute('itemsPerPage', (int) CMS_polymod_definition_parsing::replaceVars("10", $replace));
		$search_mediaresult->setAttribute('page', (int) (CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::getVarContent("request", "page", "int", @$page), $replace) -1 ));
		$search_mediaresult->addOrderCondition("objectID", "desc");
<<<<<<< TREE
<<<<<<< TREE
		//RESULT mediaresult TAG START 5_d24c99
=======
		//RESULT mediaresult TAG START 5_ae68e1
>>>>>>> MERGE-SOURCE
=======
		//RESULT mediaresult TAG START 5_99a202
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
			$object_5_d24c99 = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
			$replace_5_d24c99 = $replace; //save previous replace vars if any
			$count_5_d24c99 = 0;
			$content_5_d24c99 = $content; //save previous content var if any
			$maxPages_5_d24c99 = $search_mediaresult->getMaxPages();
			$maxResults_5_d24c99 = $search_mediaresult->getNumRows();
=======
			$object_5_ae68e1 = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
			$replace_5_ae68e1 = $replace; //save previous replace vars if any
			$count_5_ae68e1 = 0;
			$content_5_ae68e1 = $content; //save previous content var if any
			$maxPages_5_ae68e1 = $search_mediaresult->getMaxPages();
			$maxResults_5_ae68e1 = $search_mediaresult->getNumRows();
>>>>>>> MERGE-SOURCE
=======
			$object_5_99a202 = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
			$replace_5_99a202 = $replace; //save previous replace vars if any
			$count_5_99a202 = 0;
			$content_5_99a202 = $content; //save previous content var if any
			$maxPages_5_99a202 = $search_mediaresult->getMaxPages();
			$maxResults_5_99a202 = $search_mediaresult->getNumRows();
>>>>>>> MERGE-SOURCE
			foreach ($results_mediaresult as $object[$objectDefinition_mediaresult]) {
				$content = "";
				$replace["atm-search"] = array (
					"{resultid}" 	=> (isset($resultID_mediaresult)) ? $resultID_mediaresult : $object[$objectDefinition_mediaresult]->getID(),
<<<<<<< TREE
<<<<<<< TREE
					"{firstresult}" => (!$count_5_d24c99) ? 1 : 0,
					"{lastresult}" 	=> ($count_5_d24c99 == sizeof($results_mediaresult)-1) ? 1 : 0,
					"{resultcount}" => ($count_5_d24c99+1),
					"{maxpages}"    => $maxPages_5_d24c99,
=======
					"{firstresult}" => (!$count_5_ae68e1) ? 1 : 0,
					"{lastresult}" 	=> ($count_5_ae68e1 == sizeof($results_mediaresult)-1) ? 1 : 0,
					"{resultcount}" => ($count_5_ae68e1+1),
					"{maxpages}"    => $maxPages_5_ae68e1,
>>>>>>> MERGE-SOURCE
=======
					"{firstresult}" => (!$count_5_99a202) ? 1 : 0,
					"{lastresult}" 	=> ($count_5_99a202 == sizeof($results_mediaresult)-1) ? 1 : 0,
					"{resultcount}" => ($count_5_99a202+1),
					"{maxpages}"    => $maxPages_5_99a202,
>>>>>>> MERGE-SOURCE
					"{currentpage}" => ($search_mediaresult->getAttribute('page')+1),
<<<<<<< TREE
<<<<<<< TREE
					"{maxresults}"  => $maxResults_5_d24c99,
=======
					"{maxresults}"  => $maxResults_5_ae68e1,
>>>>>>> MERGE-SOURCE
=======
					"{maxresults}"  => $maxResults_5_99a202,
					"{altclass}"    => (($count_5_99a202+1) % 2) ? "CMS_odd" : "CMS_even",
>>>>>>> MERGE-SOURCE
				);
<<<<<<< TREE
<<<<<<< TREE
				//IF TAG START 6_ada38a
=======
				//IF TAG START 6_c811fe
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars("{firstresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
=======
				//IF TAG START 6_14b48a
				$ifcondition_6_14b48a = CMS_polymod_definition_parsing::replaceVars("{firstresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
				if ($ifcondition_6_14b48a) {
					$func_6_14b48a = create_function("","return (".$ifcondition_6_14b48a.");");
					if ($func_6_14b48a()) {
>>>>>>> MERGE-SOURCE
						$content .="
						<div id=\"maxResults\">{maxresults} r&eacute;sultat(s) pour votre recherche.</div>
						";
					}
<<<<<<< TREE
<<<<<<< TREE
				}//IF TAG END 6_ada38a
=======
				}//IF TAG END 6_c811fe
>>>>>>> MERGE-SOURCE
=======
					unset($func_6_14b48a);
				}
				unset($ifcondition_6_14b48a);
				//IF TAG END 6_14b48a
>>>>>>> MERGE-SOURCE
				$content .="
				<div class=\"mediaTop\">
				<div class=\"mediaBottom\">
				<h2 title=\"Afficher - Masquer le m&eacute;dia\">".$object[2]->getValue('label','')."&nbsp;&nbsp;<span class=\"date\">".$object[2]->getValue('formatedDateStart','d/m/Y')."</span></h2>";
<<<<<<< TREE
<<<<<<< TREE
				//IF TAG START 7_2e1a70
=======
				//IF TAG START 7_5e38c6
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
=======
				//IF TAG START 7_cd66bd
				$ifcondition_7_cd66bd = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
				if ($ifcondition_7_cd66bd) {
					$func_7_cd66bd = create_function("","return (".$ifcondition_7_cd66bd.");");
					if ($func_7_cd66bd()) {
>>>>>>> MERGE-SOURCE
						$content .="<span class=\"picto\"><a href=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."?cat=".$object[2]->objectValues(8)->getValue('id','')."\" rel=\"search\" alt=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\" title=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\"><img src=\"".$object[2]->objectValues(9)->getValue('fileIcon','')."\" alt=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')." - Cliquez pour chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\" title=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')." - Cliquez pour chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\" /></a></span>";
					}
<<<<<<< TREE
<<<<<<< TREE
				}//IF TAG END 7_2e1a70
=======
				}//IF TAG END 7_5e38c6
>>>>>>> MERGE-SOURCE
=======
					unset($func_7_cd66bd);
				}
				unset($ifcondition_7_cd66bd);
				//IF TAG END 7_cd66bd
>>>>>>> MERGE-SOURCE
				$content .="<div class=\"spacer\"></div>
				<div class=\"mediaContent\">
				<div class=\"mediafile\">
				";
<<<<<<< TREE
<<<<<<< TREE
				//IF TAG START 8_daaa21
=======
				//IF TAG START 8_1ac47f
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
=======
				//IF TAG START 8_341e28
				$ifcondition_8_341e28 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
				if ($ifcondition_8_341e28) {
					$func_8_341e28 = create_function("","return (".$ifcondition_8_341e28.");");
					if ($func_8_341e28()) {
>>>>>>> MERGE-SOURCE
						$content .="
						<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"T&eacute;l&eacute;charger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\">";
<<<<<<< TREE
<<<<<<< TREE
						//IF TAG START 9_7cc8f3
=======
						//IF TAG START 9_478f0f
>>>>>>> MERGE-SOURCE
						$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
						if ($ifcondition) {
							$func = create_function("","return (".$ifcondition.");");
							if ($func()) {
=======
						//IF TAG START 9_1dbb0c
						$ifcondition_9_1dbb0c = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
						if ($ifcondition_9_1dbb0c) {
							$func_9_1dbb0c = create_function("","return (".$ifcondition_9_1dbb0c.");");
							if ($func_9_1dbb0c()) {
>>>>>>> MERGE-SOURCE
								$content .="<img src=\"".$object[2]->objectValues(9)->getValue('fileIcon','')."\" alt=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" title=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" />";
							}
<<<<<<< TREE
<<<<<<< TREE
						}//IF TAG END 9_7cc8f3
=======
						}//IF TAG END 9_478f0f
>>>>>>> MERGE-SOURCE
=======
							unset($func_9_1dbb0c);
						}
						unset($ifcondition_9_1dbb0c);
						//IF TAG END 9_1dbb0c
>>>>>>> MERGE-SOURCE
						$content .=" ".$object[2]->getValue('label','')."</a>
						";
<<<<<<< TREE
<<<<<<< TREE
						//IF TAG START 10_919363
=======
						//IF TAG START 10_90bec3
>>>>>>> MERGE-SOURCE
						$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
						if ($ifcondition) {
							$func = create_function("","return (".$ifcondition.");");
							if ($func()) {
=======
						//IF TAG START 10_93342e
						$ifcondition_10_93342e = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
						if ($ifcondition_10_93342e) {
							$func_10_93342e = create_function("","return (".$ifcondition_10_93342e.");");
							if ($func_10_93342e()) {
>>>>>>> MERGE-SOURCE
								$content .="
								<div class=\"imgLeft shadow\">
								<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
								</div>
								";
							}
<<<<<<< TREE
<<<<<<< TREE
						}//IF TAG END 10_919363
=======
						}//IF TAG END 10_90bec3
>>>>>>> MERGE-SOURCE
					}
<<<<<<< TREE
				}//IF TAG END 8_daaa21
				//IF TAG START 11_a8f352
=======
				}//IF TAG END 8_1ac47f
				//IF TAG START 11_c077c0
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
<<<<<<< TREE
						//IF TAG START 12_1a3cf9
=======
						//IF TAG START 12_c60feb
>>>>>>> MERGE-SOURCE
						$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
						if ($ifcondition) {
							$func = create_function("","return (".$ifcondition.");");
							if ($func()) {
								$content .="
								<script type=\"text/javascript\">
								swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml', startimage:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."'}, {allowfullscreen:true, wmode:'transparent'}, false);
								</script>
								";
							}
<<<<<<< TREE
						}//IF TAG END 12_1a3cf9
						//IF TAG START 13_c482b2
=======
						}//IF TAG END 12_c60feb
						//IF TAG START 13_ab7d70
>>>>>>> MERGE-SOURCE
						$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
						if ($ifcondition) {
							$func = create_function("","return (".$ifcondition.");");
							if ($func()) {
								$content .="
								<script type=\"text/javascript\">
								swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml'}, {allowfullscreen:true, wmode:'transparent'}, false);
								</script>
								";
							}
<<<<<<< TREE
						}//IF TAG END 13_c482b2
=======
						}//IF TAG END 13_ab7d70
>>>>>>> MERGE-SOURCE
						$content .="
						<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-video\" style=\"width:320px;height:200px;\">
						<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
						</div>
						";
					}
<<<<<<< TREE
				}//IF TAG END 11_a8f352
				//IF TAG START 14_54ecbd
=======
				}//IF TAG END 11_c077c0
				//IF TAG START 14_053f39
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
=======
							unset($func_10_93342e);
						}
						unset($ifcondition_10_93342e);
						//IF TAG END 10_93342e
					}
					unset($func_8_341e28);
				}
				unset($ifcondition_8_341e28);
				//IF TAG END 8_341e28
				//IF TAG START 11_2328a9
				$ifcondition_11_2328a9 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
				if ($ifcondition_11_2328a9) {
					$func_11_2328a9 = create_function("","return (".$ifcondition_11_2328a9.");");
					if ($func_11_2328a9()) {
						//IF TAG START 12_2d04db
						$ifcondition_12_2d04db = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
						if ($ifcondition_12_2d04db) {
							$func_12_2d04db = create_function("","return (".$ifcondition_12_2d04db.");");$atmIfResults['thumbnail']['if'] = false;
							if ($func_12_2d04db()) {$atmIfResults['thumbnail']['if'] = true;
							$content .="
							<script type=\"text/javascript\">
							swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml', startimage:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."'}, {allowfullscreen:true, wmode:'transparent'}, false);
							</script>
							";
						}
						unset($func_12_2d04db);
					}
					unset($ifcondition_12_2d04db);
					//IF TAG END 12_2d04db
					//ELSE TAG START 13_504e26
					if (isset($atmIfResults['thumbnail']['if']) && $atmIfResults['thumbnail']['if'] === false) {
>>>>>>> MERGE-SOURCE
						$content .="
						<script type=\"text/javascript\">
						swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml'}, {allowfullscreen:true, wmode:'transparent'}, false);
						</script>
<<<<<<< TREE
						<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-audio\" style=\"width:200px;height:20px;\">
						<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
						</div>
						";
<<<<<<< TREE
						//IF TAG START 15_a48368
=======
						//IF TAG START 15_a349d8
>>>>>>> MERGE-SOURCE
						$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
						if ($ifcondition) {
							$func = create_function("","return (".$ifcondition.");");
							if ($func()) {
								$content .="
								<div class=\"imgLeft shadow\">
								<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
								</div>
								";
							}
<<<<<<< TREE
						}//IF TAG END 15_a48368
=======
						}//IF TAG END 15_a349d8
>>>>>>> MERGE-SOURCE
					}
<<<<<<< TREE
				}//IF TAG END 14_54ecbd
				//IF TAG START 16_a7c722
=======
				}//IF TAG END 14_053f39
				//IF TAG START 16_284102
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
						$content .="
						<div class=\"imgLeft shadow\">
						";
<<<<<<< TREE
						//IF TAG START 17_ecae38
=======
						//IF TAG START 17_d214a1
>>>>>>> MERGE-SOURCE
						$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
						if ($ifcondition) {
							$func = create_function("","return (".$ifcondition.");");
							if ($func()) {
								$content .="
								<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" onclick=\"javascript:CMS_openPopUpImage('imagezoom.php?location=public&amp;module=pmedia&amp;file=".$object[2]->objectValues(9)->getValue('filename','')."&amp;label=".$object[2]->getValue('label','js')."');return false;\" target=\"_blank\" title=\"Voir l'image '".$object[2]->getValue('label','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" /></a>
								";
							}
<<<<<<< TREE
						}//IF TAG END 17_ecae38
						//IF TAG START 18_bb8e88
=======
						}//IF TAG END 17_d214a1
						//IF TAG START 18_66f3d4
>>>>>>> MERGE-SOURCE
						$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
						if ($ifcondition) {
							$func = create_function("","return (".$ifcondition.");");
							if ($func()) {
								$content .="
								<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" style=\"max-width:200px;\" />
								";
							}
<<<<<<< TREE
						}//IF TAG END 18_bb8e88
=======
						}//IF TAG END 18_66f3d4
>>>>>>> MERGE-SOURCE
						$content .="
						</div>
						";
					}
<<<<<<< TREE
				}//IF TAG END 16_a7c722
=======
				}//IF TAG END 16_284102
>>>>>>> MERGE-SOURCE
				$content .="
				</div>
				<div class=\"mediadesc\">
				Cat&eacute;gorie : <a href=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."?cat=".$object[2]->objectValues(8)->getValue('id','')."\" rel=\"search\" alt=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\" title=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\"><strong>".$object[2]->objectValues(8)->getValue('label','')."</strong></a><br />
				Taille : <strong>".$object[2]->objectValues(9)->getValue('fileSize','')."Mo</strong><br />
				T&eacute;l&eacute;charger : <a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"T&eacute;l&eacute;charger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><strong>".$object[2]->getValue('label','')."</strong></a><br />
				";
<<<<<<< TREE
				//IF TAG START 19_f6d255
=======
				//IF TAG START 19_754d51
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(7)->getValue('value','')), $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
						$content .="
						".$object[2]->objectValues(7)->getValue('value','')."
						";
					}
<<<<<<< TREE
				}//IF TAG END 19_f6d255
=======
				}//IF TAG END 19_754d51
>>>>>>> MERGE-SOURCE
				$content .="
				</div>
				<div class=\"spacer\"></div>
				</div>
				</div>
				</div>
				";
<<<<<<< TREE
				//IF TAG START 20_c9314c
=======
				//IF TAG START 20_856f20
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars("{lastresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
						$content .="
						<div class=\"pages\" id=\"pages\">
						";
<<<<<<< TREE
						//FUNCTION TAG START 21_ef0397
						$parameters_21_ef0397 = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
=======
						//FUNCTION TAG START 21_13aba9
						$parameters_21_13aba9 = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
>>>>>>> MERGE-SOURCE
						if (method_exists(new CMS_poly_definition_functions(), "pages")) {
<<<<<<< TREE
							$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_21_ef0397, array (
=======
							$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_21_13aba9, array (
>>>>>>> MERGE-SOURCE
								0 =>
								array (
									'textnode' => '
									',
								),
								1 =>
								array (
									'nodename' => 'pages',
									'attributes' =>
									array (
									),
									'childrens' =>
									array (
										0 =>
										array (
											'nodename' => 'a',
											'attributes' =>
											array (
												'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
											),
											'childrens' =>
											array (
												0 =>
												array (
													'textnode' => '{n}',
												),
											),
										),
										1 =>
										array (
											'textnode' => ' ',
										),
									),
								),
								2 =>
								array (
									'textnode' => '
									',
								),
								3 =>
								array (
									'nodename' => 'currentpage',
									'attributes' =>
									array (
									),
									'childrens' =>
									array (
										0 =>
										array (
											'nodename' => 'strong',
											'attributes' =>
											array (
											),
											'childrens' =>
											array (
												0 =>
												array (
													'textnode' => '{n}',
												),
											),
										),
										1 =>
										array (
											'textnode' => ' ',
										),
									),
								),
								4 =>
								array (
									'textnode' => '
									',
								),
								5 =>
								array (
									'nodename' => 'previous',
									'attributes' =>
									array (
									),
									'childrens' =>
									array (
										0 =>
										array (
											'nodename' => 'a',
											'attributes' =>
											array (
												'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
											),
											'childrens' =>
											array (
												0 =>
												array (
													'nodename' => 'img',
													'attributes' =>
													array (
														'src' => 'img/demo/interieur/newsPrevious.gif',
														'alt' => 'Page pr&eacute;c&eacute;dente',
														'title' => 'Page pr&eacute;c&eacute;dente',
													),
												),
											),
										),
										1 =>
										array (
											'textnode' => ' ',
										),
									),
								),
								6 =>
								array (
									'textnode' => '
									',
								),
								7 =>
								array (
									'nodename' => 'next',
									'attributes' =>
									array (
									),
									'childrens' =>
									array (
										0 =>
										array (
											'nodename' => 'a',
											'attributes' =>
											array (
												'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
											),
											'childrens' =>
											array (
												0 =>
												array (
													'nodename' => 'img',
													'attributes' =>
													array (
														'src' => 'img/demo/interieur/newsNext.gif',
														'alt' => 'Page suivante',
														'title' => 'Page suivante',
													),
												),
											),
										),
										1 =>
										array (
											'textnode' => ' ',
										),
									),
								),
								8 =>
								array (
									'textnode' => '
									',
								),
							)), $replace);
						} else {
							CMS_grandFather::raiseError("Malformed atm-function tag : can't found method pagesin CMS_poly_definition_functions");
=======
						";
					}
					//ELSE TAG END 13_504e26
					$content .="
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-video\" style=\"width:320px;height:200px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
				}
				unset($func_11_2328a9);
			}
			unset($ifcondition_11_2328a9);
			//IF TAG END 11_2328a9
			//IF TAG START 14_9496d2
			$ifcondition_14_9496d2 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
			if ($ifcondition_14_9496d2) {
				$func_14_9496d2 = create_function("","return (".$ifcondition_14_9496d2.");");
				if ($func_14_9496d2()) {
					$content .="
					<script type=\"text/javascript\">
					swfobject.embedSWF('/automne/playermp3/player_mp3.swf', 'media-".$object[2]->getValue('id','')."', '200', '20', '9.0.0', '/automne/swfobject/expressInstall.swf', {mp3:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playermp3/config_playermp3.xml'}, {wmode:'transparent'}, false);
					</script>
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-audio\" style=\"width:200px;height:20px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
					//IF TAG START 15_eea003
					$ifcondition_15_eea003 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_15_eea003) {
						$func_15_eea003 = create_function("","return (".$ifcondition_15_eea003.");");
						if ($func_15_eea003()) {
							$content .="
							<div class=\"imgLeft shadow\">
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
							</div>
							";
>>>>>>> MERGE-SOURCE
						}
<<<<<<< TREE
<<<<<<< TREE
						//FUNCTION TAG END 21_ef0397
=======
						//FUNCTION TAG END 21_13aba9
>>>>>>> MERGE-SOURCE
=======
						unset($func_15_eea003);
					}
					unset($ifcondition_15_eea003);
					//IF TAG END 15_eea003
				}
				unset($func_14_9496d2);
			}
			unset($ifcondition_14_9496d2);
			//IF TAG END 14_9496d2
			//IF TAG START 16_4f8edb
			$ifcondition_16_4f8edb = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition_16_4f8edb) {
				$func_16_4f8edb = create_function("","return (".$ifcondition_16_4f8edb.");");
				if ($func_16_4f8edb()) {
					$content .="
					<div class=\"imgLeft shadow\">
					";
					//IF TAG START 17_9a2056
					$ifcondition_17_9a2056 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_17_9a2056) {
						$func_17_9a2056 = create_function("","return (".$ifcondition_17_9a2056.");");$atmIfResults['thumbnail']['if'] = false;
						if ($func_17_9a2056()) {$atmIfResults['thumbnail']['if'] = true;
>>>>>>> MERGE-SOURCE
						$content .="
						<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" onclick=\"javascript:CMS_openPopUpImage('/imagezoom.php?location=public&amp;module=pmedia&amp;file=".$object[2]->objectValues(9)->getValue('filename','')."&amp;label=".$object[2]->getValue('label','js')."');return false;\" target=\"_blank\" title=\"Voir l'image '".$object[2]->getValue('label','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" /></a>
						";
					}
<<<<<<< TREE
<<<<<<< TREE
				}//IF TAG END 20_c9314c
				$count_5_d24c99++;
=======
				}//IF TAG END 20_856f20
				$count_5_ae68e1++;
>>>>>>> MERGE-SOURCE
				//do all result vars replacement
<<<<<<< TREE
				$content_5_d24c99.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
=======
				$content_5_ae68e1.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
			}
<<<<<<< TREE
			$content = $content_5_d24c99; //retrieve previous content var if any
			$replace = $replace_5_d24c99; //retrieve previous replace vars if any
			$object[$objectDefinition_mediaresult] = $object_5_d24c99; //retrieve previous object search if any
=======
			$content = $content_5_ae68e1; //retrieve previous content var if any
			$replace = $replace_5_ae68e1; //retrieve previous replace vars if any
			$object[$objectDefinition_mediaresult] = $object_5_ae68e1; //retrieve previous object search if any
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
		//RESULT mediaresult TAG END 5_d24c99
		//NO-RESULT mediaresult TAG START 22_faed1b
=======
		//RESULT mediaresult TAG END 5_ae68e1
		//NO-RESULT mediaresult TAG START 22_0e9451
>>>>>>> MERGE-SOURCE
		//launch search mediaresult if not already done
		if($launchSearch_mediaresult && !isset($results_mediaresult)) {
			if (isset($search_mediaresult)) {
				$results_mediaresult = $search_mediaresult->search();
			} else {
				CMS_grandFather::raiseError("Malformed atm-noresult tag : can't use this tag outside of atm-search \"mediaresult\" tag ...");
				$results_mediaresult = array();
			}
		} elseif (!$launchSearch_mediaresult) {
			$results_mediaresult = array();
		}
		if (!$results_mediaresult) {
			$content .="Aucun r&eacute;sultat trouv&eacute; pour votre recherche ...";
		}
<<<<<<< TREE
		//NO-RESULT mediaresult TAG END 22_faed1b
=======
		//NO-RESULT mediaresult TAG END 22_0e9451
>>>>>>> MERGE-SOURCE
		//destroy search and results mediaresult objects
		unset($search_mediaresult);
		unset($results_mediaresult);
<<<<<<< TREE
		//SEARCH mediaresult TAG END 4_8b8ade
		//AJAX TAG END 3_d4dcfb
=======
		//SEARCH mediaresult TAG END 4_70c271
		//AJAX TAG END 3_989692
>>>>>>> MERGE-SOURCE
		//output XML response
		$view = CMS_view::getInstance();
		$view->setDisplayMode(CMS_view::SHOW_RAW);
		$view->setContentTag('data');
		$view->setContent(CMS_polymod_definition_parsing::replaceVars($content, $replace));
		$view->show();
	}
}

						//output empty XML response
						$view = CMS_view::getInstance();
						//set default display mode for this page
						$view->setDisplayMode(CMS_view::SHOW_RAW);
						$view->setContentTag('data');
						$view->setContent('');
						$view->show();
=======
					unset($func_17_9a2056);
				}
				unset($ifcondition_17_9a2056);
				//IF TAG END 17_9a2056
				//ELSE TAG START 18_56bc69
				if (isset($atmIfResults['thumbnail']['if']) && $atmIfResults['thumbnail']['if'] === false) {
					$content .="
					<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" style=\"max-width:200px;\" />
					";
				}
				//ELSE TAG END 18_56bc69
				$content .="
				</div>
				";
			}
			unset($func_16_4f8edb);
		}
		unset($ifcondition_16_4f8edb);
		//IF TAG END 16_4f8edb
		$content .="
		</div>
		<div class=\"mediadesc\">
		Cat&eacute;gorie : <a href=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."?cat=".$object[2]->objectValues(8)->getValue('id','')."\" rel=\"search\" alt=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\" title=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\"><strong>".$object[2]->objectValues(8)->getValue('label','')."</strong></a><br />
		Taille : <strong>".$object[2]->objectValues(9)->getValue('fileSize','')."Mo</strong><br />
		T&eacute;l&eacute;charger : <a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"T&eacute;l&eacute;charger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><strong>".$object[2]->getValue('label','')."</strong></a><br />
		";
		//IF TAG START 19_d60b93
		$ifcondition_19_d60b93 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(7)->getValue('value','')), $replace);
		if ($ifcondition_19_d60b93) {
			$func_19_d60b93 = create_function("","return (".$ifcondition_19_d60b93.");");
			if ($func_19_d60b93()) {
				$content .="
				".$object[2]->objectValues(7)->getValue('value','')."
				";
			}
			unset($func_19_d60b93);
		}
		unset($ifcondition_19_d60b93);
		//IF TAG END 19_d60b93
		$content .="
		</div>
		<div class=\"spacer\"></div>
		</div>
		</div>
		</div>
		";
		//IF TAG START 20_87692e
		$ifcondition_20_87692e = CMS_polymod_definition_parsing::replaceVars("{lastresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
		if ($ifcondition_20_87692e) {
			$func_20_87692e = create_function("","return (".$ifcondition_20_87692e.");");
			if ($func_20_87692e()) {
				$content .="
				<div class=\"pages\" id=\"pages\">
				";
				//FUNCTION TAG START 21_b16cb9
				$parameters_21_b16cb9 = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
				if (method_exists(new CMS_poly_definition_functions(), "pages")) {
					$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_21_b16cb9, array (
						0 =>
						array (
							'textnode' => '
							',
						),
						1 =>
						array (
							'nodename' => 'pages',
							'attributes' =>
							array (
							),
							'childrens' =>
							array (
								0 =>
								array (
									'nodename' => 'a',
									'attributes' =>
									array (
										'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
									),
									'childrens' =>
									array (
										0 =>
										array (
											'textnode' => '{n}',
										),
									),
								),
								1 =>
								array (
									'textnode' => ' ',
								),
							),
						),
						2 =>
						array (
							'textnode' => '
							',
						),
						3 =>
						array (
							'nodename' => 'currentpage',
							'attributes' =>
							array (
							),
							'childrens' =>
							array (
								0 =>
								array (
									'nodename' => 'strong',
									'attributes' =>
									array (
									),
									'childrens' =>
									array (
										0 =>
										array (
											'textnode' => '{n}',
										),
									),
								),
								1 =>
								array (
									'textnode' => ' ',
								),
							),
						),
						4 =>
						array (
							'textnode' => '
							',
						),
						5 =>
						array (
							'nodename' => 'previous',
							'attributes' =>
							array (
							),
							'childrens' =>
							array (
								0 =>
								array (
									'nodename' => 'a',
									'attributes' =>
									array (
										'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
									),
									'childrens' =>
									array (
										0 =>
										array (
											'nodename' => 'img',
											'attributes' =>
											array (
												'src' => '/img/demo/interieur/newsPrevious.gif',
												'alt' => 'Page pr&eacute;c&eacute;dente',
												'title' => 'Page pr&eacute;c&eacute;dente',
											),
										),
									),
								),
								1 =>
								array (
									'textnode' => ' ',
								),
							),
						),
						6 =>
						array (
							'textnode' => '
							',
						),
						7 =>
						array (
							'nodename' => 'next',
							'attributes' =>
							array (
							),
							'childrens' =>
							array (
								0 =>
								array (
									'nodename' => 'a',
									'attributes' =>
									array (
										'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
									),
									'childrens' =>
									array (
										0 =>
										array (
											'nodename' => 'img',
											'attributes' =>
											array (
												'src' => '/img/demo/interieur/newsNext.gif',
												'alt' => 'Page suivante',
												'title' => 'Page suivante',
											),
										),
									),
								),
								1 =>
								array (
									'textnode' => ' ',
								),
							),
						),
						8 =>
						array (
							'textnode' => '
							',
						),
					)), $replace);
				} else {
					CMS_grandFather::raiseError("Malformed atm-function tag : can't found method pagesin CMS_poly_definition_functions");
				}
				//FUNCTION TAG END 21_b16cb9
				$content .="
				</div>
				";
			}
			unset($func_20_87692e);
		}
		unset($ifcondition_20_87692e);
		//IF TAG END 20_87692e
		$count_5_99a202++;
		//do all result vars replacement
		$content_5_99a202.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
	}
	$content = $content_5_99a202; //retrieve previous content var if any
	unset($content_5_99a202);
	$replace = $replace_5_99a202; //retrieve previous replace vars if any
	unset($replace_5_99a202);
	$object[$objectDefinition_mediaresult] = $object_5_99a202; //retrieve previous object search if any
	unset($object_5_99a202);
}
//RESULT mediaresult TAG END 5_99a202
//NO-RESULT mediaresult TAG START 22_ca97f5
//launch search mediaresult if not already done
if($launchSearch_mediaresult && !isset($results_mediaresult)) {
	if (isset($search_mediaresult)) {
		$results_mediaresult = $search_mediaresult->search();
	} else {
		CMS_grandFather::raiseError("Malformed atm-noresult tag : can't use this tag outside of atm-search \"mediaresult\" tag ...");
		$results_mediaresult = array();
	}
} elseif (!$launchSearch_mediaresult) {
	$results_mediaresult = array();
}
if (!$results_mediaresult) {
	$content .="Aucun r&eacute;sultat trouv&eacute; pour votre recherche ...";
}
//NO-RESULT mediaresult TAG END 22_ca97f5
//destroy search and results mediaresult objects
unset($search_mediaresult);
unset($results_mediaresult);
//SEARCH mediaresult TAG END 4_47b18d
//AJAX TAG END 3_4bfb68
//set view format
$cms_view->setDisplayMode(CMS_view::SHOW_RAW);
$content = CMS_polymod_definition_parsing::replaceVars($content, $replace);
	}
		}
$content .= '<!--{elements:'.base64_encode(serialize(array (
  'module' => 
  array (
    0 => 'standard',
    1 => 'standard',
    2 => 'standard',
    3 => 'standard',
    4 => 'pmedia',
  ),
))).'}-->';


	echo $content;
	$cache_0d0fcbbbbbe713d8efb14e7bf1fab208_content = $cache_0d0fcbbbbbe713d8efb14e7bf1fab208->endSave();
endif;
unset($cache_0d0fcbbbbbe713d8efb14e7bf1fab208);
$content = $cache_0d0fcbbbbbe713d8efb14e7bf1fab208_content;
unset($cache_0d0fcbbbbbe713d8efb14e7bf1fab208_content);
$cms_view->setContent($content);
//output empty XML response
unset($content);
$cms_view->show();
>>>>>>> MERGE-SOURCE
}  ?><?php /* Template [Intérieur Démo - pt58_Interieur.xml] */   ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";   ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Automne 4 : Médiathèque</title>
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
					<ul class="CMS_lvl2"><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/3-presentation.php">Présentation</a></li><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/24-documentation.php">Fonctionnalités</a></li><li class="CMS_lvl2 CMS_open "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/31-exemples-de-modules.php">Exemples de modules</a><ul class="CMS_lvl3"><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/5-actualite.php">Actualités</a></li><li class="CMS_lvl3 CMS_nosub CMS_current"><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/6-mediatheque.php">Médiathèque</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/36-formulaire.php">Formulaire</a></li></ul></li></ul>
=======
					<ul class="CMS_lvl2"><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/3-presentation.php">Présentation</a></li><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/24-documentation.php">Fonctionnalités</a></li><li class="CMS_lvl2 CMS_open "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/31-exemples-de-modules.php">Exemples de modules</a><ul class="CMS_lvl3"><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/5-actualite.php">Actualités</a></li><li class="CMS_lvl3 CMS_nosub CMS_current"><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/6-mediatheque.php">Médiathèque</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/36-formulaire.php">Formulaire</a></li></ul></li></ul>
>>>>>>> MERGE-SOURCE
				</div>
				<div id="content" class="page6">
					<div id="breadcrumbs">
<<<<<<< TREE
						<a href="http://test-folder/trunk/web/demo/2-accueil.php">Accueil</a> &gt; <a href="http://test-folder/trunk/web/demo/31-exemples-de-modules.php">Exemples de modules</a> &gt; 
=======
						<a href="http://127.0.0.1/web/demo/2-accueil.php">Accueil</a> &gt; <a href="http://127.0.0.1/web/demo/31-exemples-de-modules.php">Exemples de modules</a> &gt; 
>>>>>>> MERGE-SOURCE
					</div>
					<div id="title">
						<h1>Médiathèque</h1>
					</div>
					<?php /* Start clientspace [first] */   ?><?php /* Start row [650 [Médiathèque] Recherche - r68_650_Mediatheque.xml] */   ?>
	<?php $cache_95078d39da2efc05a97eb8ddb2f73177 = new CMS_cache('95078d39da2efc05a97eb8ddb2f73177', 'polymod', 'auto', true);
if ($cache_95078d39da2efc05a97eb8ddb2f73177->exist()):
	//Get content from cache
	$cache_95078d39da2efc05a97eb8ddb2f73177_content = $cache_95078d39da2efc05a97eb8ddb2f73177->load();
else:
	$cache_95078d39da2efc05a97eb8ddb2f73177->start();
	   ?>
<?php /*Generated on Mon, 24 May 2010 16:59:51 +0200 by Automne (TM) 4.0.2 */
if(!APPLICATION_ENFORCES_ACCESS_CONTROL || (isset($cms_user) && is_a($cms_user, 'CMS_profile_user') && $cms_user->hasModuleClearance('pmedia', CLEARANCE_MODULE_VIEW))){
	$content = "";
	$replace = "";
	$atmIfResults = array();
	if (!isset($objectDefinitions) || !is_array($objectDefinitions)) $objectDefinitions = array();
	$blockAttributes = array (
		'module' => 'pmedia',
		'language' => 'fr',
	);
	$parameters['pageID'] = '6';
	if (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != 'fr')) $cms_language = new CMS_language('fr');
	$parameters['public'] = true;
	if (isset($parameters['item'])) {$parameters['objectID'] = $parameters['item']->getObjectID();} elseif (isset($parameters['itemID']) && sensitiveIO::isPositiveInteger($parameters['itemID']) && !isset($parameters['objectID'])) $parameters['objectID'] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters['itemID']);
	if (!isset($object) || !is_array($object)) $object = array();
	if (!isset($object[2])) $object[2] = new CMS_poly_object(2, 0, array(), $parameters['public']);
	$parameters['module'] = 'pmedia';
	$content .="
	<div id=\"mediasearch\">
	<script type=\"text/javascript\">
	var pageURL = '".CMS_tree::getPageValue($parameters['pageID'],"url")."';
	</script>
	<form action=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."\" method=\"get\">
	<h2>Rechercher des documents et m&eacute;dias : </h2>
	<div class=\"mediaForm\">
	<div class=\"formKeywords\">
	<label for=\"keyword\">Mots Cl&eacute;s : </label><br /><input type=\"text\" id=\"keyword\" name=\"keyword\" value=\"".CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword)."\" /><br />
	</div>
	<div class=\"formCat\">
	<label for=\"cat\">Cat&eacute;gorie : </label><br />
	<select id=\"cat\" name=\"cat\">
	<option value=\"\"> </option>
	";
<<<<<<< TREE
<<<<<<< TREE
	//FUNCTION TAG START 2_bf060b
	$parameters_2_bf060b = array ('selected' => CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat), $replace),);
	$object_2_bf060b = &$object[2]->objectValues(8);
	if (method_exists($object_2_bf060b, "selectOptions")) {
		$content .= CMS_polymod_definition_parsing::replaceVars($object_2_bf060b->selectOptions($parameters_2_bf060b, NULL), $replace);
=======
	//FUNCTION TAG START 2_3a6967
	$parameters_2_3a6967 = array ('selected' => CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat), $replace),);
	$object_2_3a6967 = &$object[2]->objectValues(8);
	if (method_exists($object_2_3a6967, "selectOptions")) {
		$content .= CMS_polymod_definition_parsing::replaceVars($object_2_3a6967->selectOptions($parameters_2_3a6967, NULL), $replace);
>>>>>>> MERGE-SOURCE
=======
	//FUNCTION TAG START 2_13cf58
	$parameters_2_13cf58 = array ('selected' => CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat), $replace),);
	$object_2_13cf58 = &$object[2]->objectValues(8);
	if (method_exists($object_2_13cf58, "selectOptions")) {
		$content .= CMS_polymod_definition_parsing::replaceVars($object_2_13cf58->selectOptions($parameters_2_13cf58, NULL), $replace);
>>>>>>> MERGE-SOURCE
	} else {
<<<<<<< TREE
<<<<<<< TREE
		CMS_grandFather::raiseError("Malformed atm-function tag : can't found method selectOptions on object : ".get_class($object_2_bf060b));
=======
		CMS_grandFather::raiseError("Malformed atm-function tag : can't found method selectOptions on object : ".get_class($object_2_3a6967));
>>>>>>> MERGE-SOURCE
=======
		CMS_grandFather::raiseError("Malformed atm-function tag : can't found method selectOptions on object : ".get_class($object_2_13cf58));
>>>>>>> MERGE-SOURCE
	}
<<<<<<< TREE
<<<<<<< TREE
	//FUNCTION TAG END 2_bf060b
=======
	//FUNCTION TAG END 2_3a6967
>>>>>>> MERGE-SOURCE
=======
	//FUNCTION TAG END 2_13cf58
>>>>>>> MERGE-SOURCE
	$content .="
	</select>
	</div>
	<div id=\"loadingSearch\"><img src=\"img/demo/interieur/loading-media.gif\" alt=\"Chargement ...\" title=\"Chargement ...\" /></div>
	<input type=\"submit\" class=\"button\" name=\"search\" id=\"submitSearch\" value=\"ok\" />
	<div class=\"spacer\"></div>
	</div>
	</form>
	</div>
	<div id=\"searchresult\">
	";
<<<<<<< TREE
<<<<<<< TREE
	//AJAX TAG START 3_d4dcfb
	//SEARCH mediaresult TAG START 4_8b8ade
=======
	//AJAX TAG START 3_989692
	//SEARCH mediaresult TAG START 4_70c271
>>>>>>> MERGE-SOURCE
=======
	//AJAX TAG START 3_4bfb68
	//SEARCH mediaresult TAG START 4_47b18d
>>>>>>> MERGE-SOURCE
	$objectDefinition_mediaresult = '2';
	if (!isset($objectDefinitions[$objectDefinition_mediaresult])) {
		$objectDefinitions[$objectDefinition_mediaresult] = new CMS_poly_object_definition($objectDefinition_mediaresult);
	}
	//public search ?
<<<<<<< TREE
<<<<<<< TREE
	$public_4_8b8ade = isset($public_search) ? $public_search : false;
=======
	$public_4_70c271 = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
=======
	$public_4_47b18d = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
	//get search params
<<<<<<< TREE
<<<<<<< TREE
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_4_8b8ade);
=======
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_4_70c271);
>>>>>>> MERGE-SOURCE
=======
	$search_mediaresult = new CMS_object_search($objectDefinitions[$objectDefinition_mediaresult], $public_4_47b18d);
>>>>>>> MERGE-SOURCE
	$launchSearch_mediaresult = true;
	//add search conditions if any
	$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, array (
		'search' => 'mediaresult',
		'type' => 8,
		'value' => CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat),
		'mandatory' => 'false',
	))) ? $launchSearch_mediaresult : false;
	$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, array (
		'search' => 'mediaresult',
		'type' => 'keywords',
		'value' => CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword),
		'mandatory' => 'false',
	))) ? $launchSearch_mediaresult : false;
	$launchSearch_mediaresult = (CMS_polymod_definition_parsing::addSearchCondition($search_mediaresult, array (
		'search' => 'mediaresult',
		'type' => 'item',
		'value' => CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item),
		'mandatory' => 'false',
	))) ? $launchSearch_mediaresult : false;
	$search_mediaresult->setAttribute('itemsPerPage', (int) CMS_polymod_definition_parsing::replaceVars("10", $replace));
	$search_mediaresult->setAttribute('page', (int) (CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::getVarContent("request", "page", "int", @$page), $replace) -1 ));
	$search_mediaresult->addOrderCondition("objectID", "desc");
<<<<<<< TREE
<<<<<<< TREE
	//RESULT mediaresult TAG START 5_d24c99
=======
	//RESULT mediaresult TAG START 5_ae68e1
>>>>>>> MERGE-SOURCE
=======
	//RESULT mediaresult TAG START 5_99a202
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
		$object_5_d24c99 = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_5_d24c99 = $replace; //save previous replace vars if any
		$count_5_d24c99 = 0;
		$content_5_d24c99 = $content; //save previous content var if any
		$maxPages_5_d24c99 = $search_mediaresult->getMaxPages();
		$maxResults_5_d24c99 = $search_mediaresult->getNumRows();
=======
		$object_5_ae68e1 = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_5_ae68e1 = $replace; //save previous replace vars if any
		$count_5_ae68e1 = 0;
		$content_5_ae68e1 = $content; //save previous content var if any
		$maxPages_5_ae68e1 = $search_mediaresult->getMaxPages();
		$maxResults_5_ae68e1 = $search_mediaresult->getNumRows();
>>>>>>> MERGE-SOURCE
=======
		$object_5_99a202 = (isset($object[$objectDefinition_mediaresult])) ? $object[$objectDefinition_mediaresult] : ""; //save previous object search if any
		$replace_5_99a202 = $replace; //save previous replace vars if any
		$count_5_99a202 = 0;
		$content_5_99a202 = $content; //save previous content var if any
		$maxPages_5_99a202 = $search_mediaresult->getMaxPages();
		$maxResults_5_99a202 = $search_mediaresult->getNumRows();
>>>>>>> MERGE-SOURCE
		foreach ($results_mediaresult as $object[$objectDefinition_mediaresult]) {
			$content = "";
			$replace["atm-search"] = array (
				"{resultid}" 	=> (isset($resultID_mediaresult)) ? $resultID_mediaresult : $object[$objectDefinition_mediaresult]->getID(),
<<<<<<< TREE
<<<<<<< TREE
				"{firstresult}" => (!$count_5_d24c99) ? 1 : 0,
				"{lastresult}" 	=> ($count_5_d24c99 == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_5_d24c99+1),
				"{maxpages}"    => $maxPages_5_d24c99,
=======
				"{firstresult}" => (!$count_5_ae68e1) ? 1 : 0,
				"{lastresult}" 	=> ($count_5_ae68e1 == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_5_ae68e1+1),
				"{maxpages}"    => $maxPages_5_ae68e1,
>>>>>>> MERGE-SOURCE
=======
				"{firstresult}" => (!$count_5_99a202) ? 1 : 0,
				"{lastresult}" 	=> ($count_5_99a202 == sizeof($results_mediaresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_5_99a202+1),
				"{maxpages}"    => $maxPages_5_99a202,
>>>>>>> MERGE-SOURCE
				"{currentpage}" => ($search_mediaresult->getAttribute('page')+1),
<<<<<<< TREE
<<<<<<< TREE
				"{maxresults}"  => $maxResults_5_d24c99,
=======
				"{maxresults}"  => $maxResults_5_ae68e1,
>>>>>>> MERGE-SOURCE
=======
				"{maxresults}"  => $maxResults_5_99a202,
				"{altclass}"    => (($count_5_99a202+1) % 2) ? "CMS_odd" : "CMS_even",
>>>>>>> MERGE-SOURCE
			);
<<<<<<< TREE
<<<<<<< TREE
			//IF TAG START 6_ada38a
=======
			//IF TAG START 6_c811fe
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars("{firstresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
			//IF TAG START 6_14b48a
			$ifcondition_6_14b48a = CMS_polymod_definition_parsing::replaceVars("{firstresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
			if ($ifcondition_6_14b48a) {
				$func_6_14b48a = create_function("","return (".$ifcondition_6_14b48a.");");
				if ($func_6_14b48a()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<div id=\"maxResults\">{maxresults} r&eacute;sultat(s) pour votre recherche.</div>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 6_ada38a
=======
			}//IF TAG END 6_c811fe
>>>>>>> MERGE-SOURCE
=======
				unset($func_6_14b48a);
			}
			unset($ifcondition_6_14b48a);
			//IF TAG END 6_14b48a
>>>>>>> MERGE-SOURCE
			$content .="
			<div class=\"mediaTop\">
			<div class=\"mediaBottom\">
			<h2 title=\"Afficher - Masquer le m&eacute;dia\">".$object[2]->getValue('label','')."&nbsp;&nbsp;<span class=\"date\">".$object[2]->getValue('formatedDateStart','d/m/Y')."</span></h2>";
<<<<<<< TREE
<<<<<<< TREE
			//IF TAG START 7_2e1a70
=======
			//IF TAG START 7_5e38c6
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
			//IF TAG START 7_cd66bd
			$ifcondition_7_cd66bd = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
			if ($ifcondition_7_cd66bd) {
				$func_7_cd66bd = create_function("","return (".$ifcondition_7_cd66bd.");");
				if ($func_7_cd66bd()) {
>>>>>>> MERGE-SOURCE
					$content .="<span class=\"picto\"><a href=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."?cat=".$object[2]->objectValues(8)->getValue('id','')."\" rel=\"search\" alt=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\" title=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\"><img src=\"".$object[2]->objectValues(9)->getValue('fileIcon','')."\" alt=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')." - Cliquez pour chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\" title=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')." - Cliquez pour chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\" /></a></span>";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 7_2e1a70
=======
			}//IF TAG END 7_5e38c6
>>>>>>> MERGE-SOURCE
=======
				unset($func_7_cd66bd);
			}
			unset($ifcondition_7_cd66bd);
			//IF TAG END 7_cd66bd
>>>>>>> MERGE-SOURCE
			$content .="<div class=\"spacer\"></div>
			<div class=\"mediaContent\">
			<div class=\"mediafile\">
			";
<<<<<<< TREE
<<<<<<< TREE
			//IF TAG START 8_daaa21
=======
			//IF TAG START 8_1ac47f
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
			//IF TAG START 8_341e28
			$ifcondition_8_341e28 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'flv' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'mp3' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'jpg' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'gif' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." != 'png'", $replace);
			if ($ifcondition_8_341e28) {
				$func_8_341e28 = create_function("","return (".$ifcondition_8_341e28.");");
				if ($func_8_341e28()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"T&eacute;l&eacute;charger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\">";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 9_7cc8f3
=======
					//IF TAG START 9_478f0f
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 9_1dbb0c
					$ifcondition_9_1dbb0c = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileIcon','')), $replace);
					if ($ifcondition_9_1dbb0c) {
						$func_9_1dbb0c = create_function("","return (".$ifcondition_9_1dbb0c.");");
						if ($func_9_1dbb0c()) {
>>>>>>> MERGE-SOURCE
							$content .="<img src=\"".$object[2]->objectValues(9)->getValue('fileIcon','')."\" alt=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" title=\"Fichier ".$object[2]->objectValues(9)->getValue('fileExtension','')."\" />";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 9_7cc8f3
=======
					}//IF TAG END 9_478f0f
>>>>>>> MERGE-SOURCE
=======
						unset($func_9_1dbb0c);
					}
					unset($ifcondition_9_1dbb0c);
					//IF TAG END 9_1dbb0c
>>>>>>> MERGE-SOURCE
					$content .=" ".$object[2]->getValue('label','')."</a>
					";
<<<<<<< TREE
<<<<<<< TREE
					//IF TAG START 10_919363
=======
					//IF TAG START 10_90bec3
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
=======
					//IF TAG START 10_93342e
					$ifcondition_10_93342e = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_10_93342e) {
						$func_10_93342e = create_function("","return (".$ifcondition_10_93342e.");");
						if ($func_10_93342e()) {
>>>>>>> MERGE-SOURCE
							$content .="
							<div class=\"imgLeft shadow\">
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
							</div>
							";
						}
<<<<<<< TREE
<<<<<<< TREE
					}//IF TAG END 10_919363
=======
					}//IF TAG END 10_90bec3
>>>>>>> MERGE-SOURCE
				}
<<<<<<< TREE
			}//IF TAG END 8_daaa21
			//IF TAG START 11_a8f352
=======
			}//IF TAG END 8_1ac47f
			//IF TAG START 11_c077c0
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
<<<<<<< TREE
					//IF TAG START 12_1a3cf9
=======
					//IF TAG START 12_c60feb
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<script type=\"text/javascript\">
							swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml', startimage:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."'}, {allowfullscreen:true, wmode:'transparent'}, false);
							</script>
							";
						}
<<<<<<< TREE
					}//IF TAG END 12_1a3cf9
					//IF TAG START 13_c482b2
=======
					}//IF TAG END 12_c60feb
					//IF TAG START 13_ab7d70
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<script type=\"text/javascript\">
							swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml'}, {allowfullscreen:true, wmode:'transparent'}, false);
							</script>
							";
						}
<<<<<<< TREE
					}//IF TAG END 13_c482b2
=======
					}//IF TAG END 13_ab7d70
>>>>>>> MERGE-SOURCE
					$content .="
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-video\" style=\"width:320px;height:200px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
				}
<<<<<<< TREE
			}//IF TAG END 11_a8f352
			//IF TAG START 14_54ecbd
=======
			}//IF TAG END 11_c077c0
			//IF TAG START 14_053f39
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
						unset($func_10_93342e);
					}
					unset($ifcondition_10_93342e);
					//IF TAG END 10_93342e
				}
				unset($func_8_341e28);
			}
			unset($ifcondition_8_341e28);
			//IF TAG END 8_341e28
			//IF TAG START 11_2328a9
			$ifcondition_11_2328a9 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'flv'", $replace);
			if ($ifcondition_11_2328a9) {
				$func_11_2328a9 = create_function("","return (".$ifcondition_11_2328a9.");");
				if ($func_11_2328a9()) {
					//IF TAG START 12_2d04db
					$ifcondition_12_2d04db = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition_12_2d04db) {
						$func_12_2d04db = create_function("","return (".$ifcondition_12_2d04db.");");$atmIfResults['thumbnail']['if'] = false;
						if ($func_12_2d04db()) {$atmIfResults['thumbnail']['if'] = true;
						$content .="
						<script type=\"text/javascript\">
						swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml', startimage:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."'}, {allowfullscreen:true, wmode:'transparent'}, false);
						</script>
						";
					}
					unset($func_12_2d04db);
				}
				unset($ifcondition_12_2d04db);
				//IF TAG END 12_2d04db
				//ELSE TAG START 13_504e26
				if (isset($atmIfResults['thumbnail']['if']) && $atmIfResults['thumbnail']['if'] === false) {
>>>>>>> MERGE-SOURCE
					$content .="
					<script type=\"text/javascript\">
					swfobject.embedSWF('/automne/playerflv/player_flv.swf', 'media-".$object[2]->getValue('id','')."', '320', '200', '9.0.0', '/automne/swfobject/expressInstall.swf', {flv:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playerflv/config_playerflv.xml'}, {allowfullscreen:true, wmode:'transparent'}, false);
					</script>
<<<<<<< TREE
					<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-audio\" style=\"width:200px;height:20px;\">
					<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
					</div>
					";
<<<<<<< TREE
					//IF TAG START 15_a48368
=======
					//IF TAG START 15_a349d8
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<div class=\"imgLeft shadow\">
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
							</div>
							";
						}
<<<<<<< TREE
					}//IF TAG END 15_a48368
=======
					}//IF TAG END 15_a349d8
>>>>>>> MERGE-SOURCE
				}
<<<<<<< TREE
			}//IF TAG END 14_54ecbd
			//IF TAG START 16_a7c722
=======
			}//IF TAG END 14_053f39
			//IF TAG START 16_284102
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					$content .="
					<div class=\"imgLeft shadow\">
					";
<<<<<<< TREE
					//IF TAG START 17_ecae38
=======
					//IF TAG START 17_d214a1
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" onclick=\"javascript:CMS_openPopUpImage('imagezoom.php?location=public&amp;module=pmedia&amp;file=".$object[2]->objectValues(9)->getValue('filename','')."&amp;label=".$object[2]->getValue('label','js')."');return false;\" target=\"_blank\" title=\"Voir l'image '".$object[2]->getValue('label','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" /></a>
							";
						}
<<<<<<< TREE
					}//IF TAG END 17_ecae38
					//IF TAG START 18_bb8e88
=======
					}//IF TAG END 17_d214a1
					//IF TAG START 18_66f3d4
>>>>>>> MERGE-SOURCE
					$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
					if ($ifcondition) {
						$func = create_function("","return (".$ifcondition.");");
						if ($func()) {
							$content .="
							<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" style=\"max-width:200px;\" />
							";
						}
<<<<<<< TREE
					}//IF TAG END 18_bb8e88
=======
					}//IF TAG END 18_66f3d4
>>>>>>> MERGE-SOURCE
					$content .="
					</div>
					";
				}
<<<<<<< TREE
			}//IF TAG END 16_a7c722
=======
			}//IF TAG END 16_284102
>>>>>>> MERGE-SOURCE
			$content .="
			</div>
			<div class=\"mediadesc\">
			Cat&eacute;gorie : <a href=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."?cat=".$object[2]->objectValues(8)->getValue('id','')."\" rel=\"search\" alt=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\" title=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\"><strong>".$object[2]->objectValues(8)->getValue('label','')."</strong></a><br />
			Taille : <strong>".$object[2]->objectValues(9)->getValue('fileSize','')."Mo</strong><br />
			T&eacute;l&eacute;charger : <a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"T&eacute;l&eacute;charger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><strong>".$object[2]->getValue('label','')."</strong></a><br />
			";
<<<<<<< TREE
			//IF TAG START 19_f6d255
=======
			//IF TAG START 19_754d51
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(7)->getValue('value','')), $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					$content .="
					".$object[2]->objectValues(7)->getValue('value','')."
					";
				}
<<<<<<< TREE
			}//IF TAG END 19_f6d255
=======
			}//IF TAG END 19_754d51
>>>>>>> MERGE-SOURCE
			$content .="
			</div>
			<div class=\"spacer\"></div>
			</div>
			</div>
			</div>
			";
<<<<<<< TREE
			//IF TAG START 20_c9314c
=======
			//IF TAG START 20_856f20
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars("{lastresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
					$content .="
					<div class=\"pages\" id=\"pages\">
					";
<<<<<<< TREE
					//FUNCTION TAG START 21_ef0397
					$parameters_21_ef0397 = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
=======
					//FUNCTION TAG START 21_13aba9
					$parameters_21_13aba9 = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
>>>>>>> MERGE-SOURCE
					if (method_exists(new CMS_poly_definition_functions(), "pages")) {
<<<<<<< TREE
						$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_21_ef0397, array (
=======
						$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_21_13aba9, array (
>>>>>>> MERGE-SOURCE
							0 =>
							array (
								'textnode' => '
								',
							),
							1 =>
							array (
								'nodename' => 'pages',
								'attributes' =>
								array (
								),
								'childrens' =>
								array (
									0 =>
									array (
										'nodename' => 'a',
										'attributes' =>
										array (
											'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
										),
										'childrens' =>
										array (
											0 =>
											array (
												'textnode' => '{n}',
											),
										),
									),
									1 =>
									array (
										'textnode' => ' ',
									),
								),
							),
							2 =>
							array (
								'textnode' => '
								',
							),
							3 =>
							array (
								'nodename' => 'currentpage',
								'attributes' =>
								array (
								),
								'childrens' =>
								array (
									0 =>
									array (
										'nodename' => 'strong',
										'attributes' =>
										array (
										),
										'childrens' =>
										array (
											0 =>
											array (
												'textnode' => '{n}',
											),
										),
									),
									1 =>
									array (
										'textnode' => ' ',
									),
								),
							),
							4 =>
							array (
								'textnode' => '
								',
							),
							5 =>
							array (
								'nodename' => 'previous',
								'attributes' =>
								array (
								),
								'childrens' =>
								array (
									0 =>
									array (
										'nodename' => 'a',
										'attributes' =>
										array (
											'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
										),
										'childrens' =>
										array (
											0 =>
											array (
												'nodename' => 'img',
												'attributes' =>
												array (
													'src' => 'img/demo/interieur/newsPrevious.gif',
													'alt' => 'Page pr&eacute;c&eacute;dente',
													'title' => 'Page pr&eacute;c&eacute;dente',
												),
											),
										),
									),
									1 =>
									array (
										'textnode' => ' ',
									),
								),
							),
							6 =>
							array (
								'textnode' => '
								',
							),
							7 =>
							array (
								'nodename' => 'next',
								'attributes' =>
								array (
								),
								'childrens' =>
								array (
									0 =>
									array (
										'nodename' => 'a',
										'attributes' =>
										array (
											'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
										),
										'childrens' =>
										array (
											0 =>
											array (
												'nodename' => 'img',
												'attributes' =>
												array (
													'src' => 'img/demo/interieur/newsNext.gif',
													'alt' => 'Page suivante',
													'title' => 'Page suivante',
												),
											),
										),
									),
									1 =>
									array (
										'textnode' => ' ',
									),
								),
							),
							8 =>
							array (
								'textnode' => '
								',
							),
						)), $replace);
					} else {
						CMS_grandFather::raiseError("Malformed atm-function tag : can't found method pagesin CMS_poly_definition_functions");
=======
					";
				}
				//ELSE TAG END 13_504e26
				$content .="
				<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-video\" style=\"width:320px;height:200px;\">
				<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
				</div>
				";
			}
			unset($func_11_2328a9);
		}
		unset($ifcondition_11_2328a9);
		//IF TAG END 11_2328a9
		//IF TAG START 14_9496d2
		$ifcondition_14_9496d2 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'mp3'", $replace);
		if ($ifcondition_14_9496d2) {
			$func_14_9496d2 = create_function("","return (".$ifcondition_14_9496d2.");");
			if ($func_14_9496d2()) {
				$content .="
				<script type=\"text/javascript\">
				swfobject.embedSWF('/automne/playermp3/player_mp3.swf', 'media-".$object[2]->getValue('id','')."', '200', '20', '9.0.0', '/automne/swfobject/expressInstall.swf', {mp3:'".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."', configxml:'/automne/playermp3/config_playermp3.xml'}, {wmode:'transparent'}, false);
				</script>
				<div id=\"media-".$object[2]->getValue('id','')."\" class=\"pmedias-audio\" style=\"width:200px;height:20px;\">
				<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Get Adobe Flash player\" /></a></p>
				</div>
				";
				//IF TAG START 15_eea003
				$ifcondition_15_eea003 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
				if ($ifcondition_15_eea003) {
					$func_15_eea003 = create_function("","return (".$ifcondition_15_eea003.");");
					if ($func_15_eea003()) {
						$content .="
						<div class=\"imgLeft shadow\">
						<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" />
						</div>
						";
>>>>>>> MERGE-SOURCE
					}
<<<<<<< TREE
<<<<<<< TREE
					//FUNCTION TAG END 21_ef0397
=======
					//FUNCTION TAG END 21_13aba9
>>>>>>> MERGE-SOURCE
=======
					unset($func_15_eea003);
				}
				unset($ifcondition_15_eea003);
				//IF TAG END 15_eea003
			}
			unset($func_14_9496d2);
		}
		unset($ifcondition_14_9496d2);
		//IF TAG END 14_9496d2
		//IF TAG START 16_4f8edb
		$ifcondition_16_4f8edb = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'jpg' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'gif' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('fileExtension',''))." == 'png'", $replace);
		if ($ifcondition_16_4f8edb) {
			$func_16_4f8edb = create_function("","return (".$ifcondition_16_4f8edb.");");
			if ($func_16_4f8edb()) {
				$content .="
				<div class=\"imgLeft shadow\">
				";
				//IF TAG START 17_9a2056
				$ifcondition_17_9a2056 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue('thumbnail','')), $replace);
				if ($ifcondition_17_9a2056) {
					$func_17_9a2056 = create_function("","return (".$ifcondition_17_9a2056.");");$atmIfResults['thumbnail']['if'] = false;
					if ($func_17_9a2056()) {$atmIfResults['thumbnail']['if'] = true;
>>>>>>> MERGE-SOURCE
					$content .="
					<a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" onclick=\"javascript:CMS_openPopUpImage('/imagezoom.php?location=public&amp;module=pmedia&amp;file=".$object[2]->objectValues(9)->getValue('filename','')."&amp;label=".$object[2]->getValue('label','js')."');return false;\" target=\"_blank\" title=\"Voir l'image '".$object[2]->getValue('label','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('thumbnail','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" /></a>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 20_c9314c
			$count_5_d24c99++;
=======
			}//IF TAG END 20_856f20
			$count_5_ae68e1++;
>>>>>>> MERGE-SOURCE
			//do all result vars replacement
<<<<<<< TREE
			$content_5_d24c99.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
=======
			$content_5_ae68e1.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
		$content = $content_5_d24c99; //retrieve previous content var if any
		$replace = $replace_5_d24c99; //retrieve previous replace vars if any
		$object[$objectDefinition_mediaresult] = $object_5_d24c99; //retrieve previous object search if any
=======
		$content = $content_5_ae68e1; //retrieve previous content var if any
		$replace = $replace_5_ae68e1; //retrieve previous replace vars if any
		$object[$objectDefinition_mediaresult] = $object_5_ae68e1; //retrieve previous object search if any
>>>>>>> MERGE-SOURCE
	}
<<<<<<< TREE
	//RESULT mediaresult TAG END 5_d24c99
	//NO-RESULT mediaresult TAG START 22_faed1b
=======
	//RESULT mediaresult TAG END 5_ae68e1
	//NO-RESULT mediaresult TAG START 22_0e9451
>>>>>>> MERGE-SOURCE
=======
				unset($func_17_9a2056);
			}
			unset($ifcondition_17_9a2056);
			//IF TAG END 17_9a2056
			//ELSE TAG START 18_56bc69
			if (isset($atmIfResults['thumbnail']['if']) && $atmIfResults['thumbnail']['if'] === false) {
				$content .="
				<img src=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" alt=\"".$object[2]->getValue('label','')."\" title=\"".$object[2]->getValue('label','')."\" style=\"max-width:200px;\" />
				";
			}
			//ELSE TAG END 18_56bc69
			$content .="
			</div>
			";
		}
		unset($func_16_4f8edb);
	}
	unset($ifcondition_16_4f8edb);
	//IF TAG END 16_4f8edb
	$content .="
	</div>
	<div class=\"mediadesc\">
	Cat&eacute;gorie : <a href=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."?cat=".$object[2]->objectValues(8)->getValue('id','')."\" rel=\"search\" alt=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\" title=\"Chercher dans la cat&eacute;gorie ".$object[2]->objectValues(8)->getValue('label','')."\"><strong>".$object[2]->objectValues(8)->getValue('label','')."</strong></a><br />
	Taille : <strong>".$object[2]->objectValues(9)->getValue('fileSize','')."Mo</strong><br />
	T&eacute;l&eacute;charger : <a href=\"".$object[2]->objectValues(9)->getValue('filePath','')."/".$object[2]->objectValues(9)->getValue('filename','')."\" target=\"_blank\" title=\"T&eacute;l&eacute;charger le document '".$object[2]->objectValues(9)->getValue('fileLabel','')."' (".$object[2]->objectValues(9)->getValue('fileExtension','')." - ".$object[2]->objectValues(9)->getValue('fileSize','')."Mo)\"><strong>".$object[2]->getValue('label','')."</strong></a><br />
	";
	//IF TAG START 19_d60b93
	$ifcondition_19_d60b93 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(7)->getValue('value','')), $replace);
	if ($ifcondition_19_d60b93) {
		$func_19_d60b93 = create_function("","return (".$ifcondition_19_d60b93.");");
		if ($func_19_d60b93()) {
			$content .="
			".$object[2]->objectValues(7)->getValue('value','')."
			";
		}
		unset($func_19_d60b93);
	}
	unset($ifcondition_19_d60b93);
	//IF TAG END 19_d60b93
	$content .="
	</div>
	<div class=\"spacer\"></div>
	</div>
	</div>
	</div>
	";
	//IF TAG START 20_87692e
	$ifcondition_20_87692e = CMS_polymod_definition_parsing::replaceVars("{lastresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
	if ($ifcondition_20_87692e) {
		$func_20_87692e = create_function("","return (".$ifcondition_20_87692e.");");
		if ($func_20_87692e()) {
			$content .="
			<div class=\"pages\" id=\"pages\">
			";
			//FUNCTION TAG START 21_b16cb9
			$parameters_21_b16cb9 = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
			if (method_exists(new CMS_poly_definition_functions(), "pages")) {
				$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_21_b16cb9, array (
					0 =>
					array (
						'textnode' => '
						',
					),
					1 =>
					array (
						'nodename' => 'pages',
						'attributes' =>
						array (
						),
						'childrens' =>
						array (
							0 =>
							array (
								'nodename' => 'a',
								'attributes' =>
								array (
									'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
								),
								'childrens' =>
								array (
									0 =>
									array (
										'textnode' => '{n}',
									),
								),
							),
							1 =>
							array (
								'textnode' => ' ',
							),
						),
					),
					2 =>
					array (
						'textnode' => '
						',
					),
					3 =>
					array (
						'nodename' => 'currentpage',
						'attributes' =>
						array (
						),
						'childrens' =>
						array (
							0 =>
							array (
								'nodename' => 'strong',
								'attributes' =>
								array (
								),
								'childrens' =>
								array (
									0 =>
									array (
										'textnode' => '{n}',
									),
								),
							),
							1 =>
							array (
								'textnode' => ' ',
							),
						),
					),
					4 =>
					array (
						'textnode' => '
						',
					),
					5 =>
					array (
						'nodename' => 'previous',
						'attributes' =>
						array (
						),
						'childrens' =>
						array (
							0 =>
							array (
								'nodename' => 'a',
								'attributes' =>
								array (
									'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
								),
								'childrens' =>
								array (
									0 =>
									array (
										'nodename' => 'img',
										'attributes' =>
										array (
											'src' => '/img/demo/interieur/newsPrevious.gif',
											'alt' => 'Page pr&eacute;c&eacute;dente',
											'title' => 'Page pr&eacute;c&eacute;dente',
										),
									),
								),
							),
							1 =>
							array (
								'textnode' => ' ',
							),
						),
					),
					6 =>
					array (
						'textnode' => '
						',
					),
					7 =>
					array (
						'nodename' => 'next',
						'attributes' =>
						array (
						),
						'childrens' =>
						array (
							0 =>
							array (
								'nodename' => 'a',
								'attributes' =>
								array (
									'href' => CMS_tree::getPageValue($parameters['pageID'],"url").'?cat='.CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat).'&amp;keyword='.CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword).'&amp;page={n}',
								),
								'childrens' =>
								array (
									0 =>
									array (
										'nodename' => 'img',
										'attributes' =>
										array (
											'src' => '/img/demo/interieur/newsNext.gif',
											'alt' => 'Page suivante',
											'title' => 'Page suivante',
										),
									),
								),
							),
							1 =>
							array (
								'textnode' => ' ',
							),
						),
					),
					8 =>
					array (
						'textnode' => '
						',
					),
				)), $replace);
			} else {
				CMS_grandFather::raiseError("Malformed atm-function tag : can't found method pagesin CMS_poly_definition_functions");
			}
			//FUNCTION TAG END 21_b16cb9
			$content .="
			</div>
			";
		}
		unset($func_20_87692e);
	}
	unset($ifcondition_20_87692e);
	//IF TAG END 20_87692e
	$count_5_99a202++;
	//do all result vars replacement
	$content_5_99a202.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
}
$content = $content_5_99a202; //retrieve previous content var if any
unset($content_5_99a202);
$replace = $replace_5_99a202; //retrieve previous replace vars if any
unset($replace_5_99a202);
$object[$objectDefinition_mediaresult] = $object_5_99a202; //retrieve previous object search if any
unset($object_5_99a202);
	}
	//RESULT mediaresult TAG END 5_99a202
	//NO-RESULT mediaresult TAG START 22_ca97f5
>>>>>>> MERGE-SOURCE
	//launch search mediaresult if not already done
	if($launchSearch_mediaresult && !isset($results_mediaresult)) {
if (isset($search_mediaresult)) {
	$results_mediaresult = $search_mediaresult->search();
} else {
	CMS_grandFather::raiseError("Malformed atm-noresult tag : can't use this tag outside of atm-search \"mediaresult\" tag ...");
	$results_mediaresult = array();
}
	} elseif (!$launchSearch_mediaresult) {
$results_mediaresult = array();
	}
	if (!$results_mediaresult) {
$content .="Aucun r&eacute;sultat trouv&eacute; pour votre recherche ...";
	}
<<<<<<< TREE
<<<<<<< TREE
	//NO-RESULT mediaresult TAG END 22_faed1b
=======
	//NO-RESULT mediaresult TAG END 22_0e9451
>>>>>>> MERGE-SOURCE
=======
	//NO-RESULT mediaresult TAG END 22_ca97f5
>>>>>>> MERGE-SOURCE
	//destroy search and results mediaresult objects
	unset($search_mediaresult);
	unset($results_mediaresult);
<<<<<<< TREE
<<<<<<< TREE
	//SEARCH mediaresult TAG END 4_8b8ade
	//AJAX TAG END 3_d4dcfb
=======
	//SEARCH mediaresult TAG END 4_70c271
	//AJAX TAG END 3_989692
>>>>>>> MERGE-SOURCE
=======
	//SEARCH mediaresult TAG END 4_47b18d
	//AJAX TAG END 3_4bfb68
>>>>>>> MERGE-SOURCE
	$content .="
	</div>
	";
	$content = CMS_polymod_definition_parsing::replaceVars($content, $replace);
	$content .= '<!--{elements:'.base64_encode(serialize(array (
'module' =>
array (
	0 => 'standard',
	1 => 'standard',
	2 => 'standard',
	3 => 'standard',
	4 => 'pmedia',
),
	))).'}-->';
	echo $content;
	unset($content);}
	   ?>
	<?php $cache_95078d39da2efc05a97eb8ddb2f73177_content = $cache_95078d39da2efc05a97eb8ddb2f73177->endSave();
endif;
unset($cache_95078d39da2efc05a97eb8ddb2f73177);
echo $cache_95078d39da2efc05a97eb8ddb2f73177_content;
unset($cache_95078d39da2efc05a97eb8ddb2f73177_content);
   ?>

<?php /* End row [650 [Médiathèque] Recherche - r68_650_Mediatheque.xml] */   ?><?php /* End clientspace [first] */   ?>
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