<<<<<<< TREE
<<<<<<< TREE
<?php //Generated on Thu, 11 Mar 2010 16:57:18 +0100 by Automne (TM) 4.0.1
require_once(dirname(__FILE__).'/../cms_rc_frontend.php');
=======
<?php //Generated on Fri, 19 Mar 2010 15:24:29 +0100 by Automne (TM) 4.0.1
=======
<?php //Generated on Mon, 24 May 2010 16:59:49 +0200 by Automne (TM) 4.0.2
>>>>>>> MERGE-SOURCE
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
>>>>>>> MERGE-SOURCE
if (!isset($cms_page_included) && !$_POST && !$_GET) {
<<<<<<< TREE
	CMS_view::redirect('http://test-folder/trunk/web/demo/5-actualite.php', true, 301);
=======
	CMS_view::redirect('http://127.0.0.1/web/demo/5-actualite.php', true, 301);
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
$cache_d783dc927ccc48d1c073baef1fe5ef50 = new CMS_cache('d783dc927ccc48d1c073baef1fe5ef50', 'polymod', 'auto', true);
if ($cache_d783dc927ccc48d1c073baef1fe5ef50->exist()):
	//Get content from cache
	$cache_d783dc927ccc48d1c073baef1fe5ef50_content = $cache_d783dc927ccc48d1c073baef1fe5ef50->load();
else:
	$cache_d783dc927ccc48d1c073baef1fe5ef50->start();
>>>>>>> MERGE-SOURCE

$content = "";
$replace = "";
$atmIfResults = array();
if (!isset($objectDefinitions) || !is_array($objectDefinitions)) $objectDefinitions = array();
$blockAttributes = array (
  'module' => 'pnews',
  'language' => 'fr',
);
$parameters['pageID'] = '5';
if (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != 'fr')) $cms_language = new CMS_language('fr');
$parameters['public'] = true;
if (isset($parameters['item'])) {$parameters['objectID'] = $parameters['item']->getObjectID();} elseif (isset($parameters['itemID']) && sensitiveIO::isPositiveInteger($parameters['itemID']) && !isset($parameters['objectID'])) $parameters['objectID'] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters['itemID']);
if (!isset($object) || !is_array($object)) $object = array();
if (!isset($object[1])) $object[1] = new CMS_poly_object(1, 0, array(), $parameters['public']);
$parameters['module'] = 'pnews';

$xmlCondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "out", "string", @$out))." == 'xml'", $replace);
if ($xmlCondition) {
	$func = create_function("","return (".$xmlCondition.");");
	if ($func()) {
<<<<<<< TREE
<<<<<<< TREE
		//AJAX TAG START 3_bbb909
		//SEARCH newsresult TAG START 4_d05388
=======
		//AJAX TAG START 3_fe7474
		//SEARCH newsresult TAG START 4_a4e1c0
>>>>>>> MERGE-SOURCE
=======
		//AJAX TAG START 3_edb3e6
		//SEARCH newsresult TAG START 4_7c5c10
>>>>>>> MERGE-SOURCE
		$objectDefinition_newsresult = '1';
		if (!isset($objectDefinitions[$objectDefinition_newsresult])) {
			$objectDefinitions[$objectDefinition_newsresult] = new CMS_poly_object_definition($objectDefinition_newsresult);
		}
		//public search ?
<<<<<<< TREE
<<<<<<< TREE
		$public_4_d05388 = isset($public_search) ? $public_search : false;
=======
		$public_4_a4e1c0 = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
=======
		$public_4_7c5c10 = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
		//get search params
<<<<<<< TREE
<<<<<<< TREE
		$search_newsresult = new CMS_object_search($objectDefinitions[$objectDefinition_newsresult], $public_4_d05388);
=======
		$search_newsresult = new CMS_object_search($objectDefinitions[$objectDefinition_newsresult], $public_4_a4e1c0);
>>>>>>> MERGE-SOURCE
=======
		$search_newsresult = new CMS_object_search($objectDefinitions[$objectDefinition_newsresult], $public_4_7c5c10);
>>>>>>> MERGE-SOURCE
		$launchSearch_newsresult = true;
		//add search conditions if any
		$launchSearch_newsresult = (CMS_polymod_definition_parsing::addSearchCondition($search_newsresult, array (
			'search' => 'newsresult',
			'type' => 5,
			'value' => CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat),
			'mandatory' => 'false',
		))) ? $launchSearch_newsresult : false;
		$launchSearch_newsresult = (CMS_polymod_definition_parsing::addSearchCondition($search_newsresult, array (
			'search' => 'newsresult',
			'type' => 'keywords',
			'value' => CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword),
			'mandatory' => 'false',
		))) ? $launchSearch_newsresult : false;
		$launchSearch_newsresult = (CMS_polymod_definition_parsing::addSearchCondition($search_newsresult, array (
			'search' => 'newsresult',
			'type' => 'item',
			'value' => CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item),
			'mandatory' => 'false',
		))) ? $launchSearch_newsresult : false;
		$search_newsresult->setAttribute('itemsPerPage', (int) CMS_polymod_definition_parsing::replaceVars("10", $replace));
		$search_newsresult->setAttribute('page', (int) (CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::getVarContent("request", "page", "int", @$page), $replace) -1 ));
		$search_newsresult->addOrderCondition("objectID", "desc");
<<<<<<< TREE
<<<<<<< TREE
		//RESULT newsresult TAG START 5_6613b4
=======
		//RESULT newsresult TAG START 5_9a8b54
>>>>>>> MERGE-SOURCE
=======
		//RESULT newsresult TAG START 5_492a23
>>>>>>> MERGE-SOURCE
		//launch search newsresult if not already done
		if($launchSearch_newsresult && !isset($results_newsresult)) {
			if (isset($search_newsresult)) {
				$results_newsresult = $search_newsresult->search();
			} else {
				CMS_grandFather::raiseError("Malformed atm-result tag : can't use this tag outside of atm-search \"newsresult\" tag ...");
				$results_newsresult = array();
			}
		} elseif (!$launchSearch_newsresult) {
			$results_newsresult = array();
		}
		if ($results_newsresult) {
<<<<<<< TREE
<<<<<<< TREE
			$object_5_6613b4 = (isset($object[$objectDefinition_newsresult])) ? $object[$objectDefinition_newsresult] : ""; //save previous object search if any
			$replace_5_6613b4 = $replace; //save previous replace vars if any
			$count_5_6613b4 = 0;
			$content_5_6613b4 = $content; //save previous content var if any
			$maxPages_5_6613b4 = $search_newsresult->getMaxPages();
			$maxResults_5_6613b4 = $search_newsresult->getNumRows();
=======
			$object_5_9a8b54 = (isset($object[$objectDefinition_newsresult])) ? $object[$objectDefinition_newsresult] : ""; //save previous object search if any
			$replace_5_9a8b54 = $replace; //save previous replace vars if any
			$count_5_9a8b54 = 0;
			$content_5_9a8b54 = $content; //save previous content var if any
			$maxPages_5_9a8b54 = $search_newsresult->getMaxPages();
			$maxResults_5_9a8b54 = $search_newsresult->getNumRows();
>>>>>>> MERGE-SOURCE
=======
			$object_5_492a23 = (isset($object[$objectDefinition_newsresult])) ? $object[$objectDefinition_newsresult] : ""; //save previous object search if any
			$replace_5_492a23 = $replace; //save previous replace vars if any
			$count_5_492a23 = 0;
			$content_5_492a23 = $content; //save previous content var if any
			$maxPages_5_492a23 = $search_newsresult->getMaxPages();
			$maxResults_5_492a23 = $search_newsresult->getNumRows();
>>>>>>> MERGE-SOURCE
			foreach ($results_newsresult as $object[$objectDefinition_newsresult]) {
				$content = "";
				$replace["atm-search"] = array (
					"{resultid}" 	=> (isset($resultID_newsresult)) ? $resultID_newsresult : $object[$objectDefinition_newsresult]->getID(),
<<<<<<< TREE
<<<<<<< TREE
					"{firstresult}" => (!$count_5_6613b4) ? 1 : 0,
					"{lastresult}" 	=> ($count_5_6613b4 == sizeof($results_newsresult)-1) ? 1 : 0,
					"{resultcount}" => ($count_5_6613b4+1),
					"{maxpages}"    => $maxPages_5_6613b4,
=======
					"{firstresult}" => (!$count_5_9a8b54) ? 1 : 0,
					"{lastresult}" 	=> ($count_5_9a8b54 == sizeof($results_newsresult)-1) ? 1 : 0,
					"{resultcount}" => ($count_5_9a8b54+1),
					"{maxpages}"    => $maxPages_5_9a8b54,
>>>>>>> MERGE-SOURCE
=======
					"{firstresult}" => (!$count_5_492a23) ? 1 : 0,
					"{lastresult}" 	=> ($count_5_492a23 == sizeof($results_newsresult)-1) ? 1 : 0,
					"{resultcount}" => ($count_5_492a23+1),
					"{maxpages}"    => $maxPages_5_492a23,
>>>>>>> MERGE-SOURCE
					"{currentpage}" => ($search_newsresult->getAttribute('page')+1),
<<<<<<< TREE
<<<<<<< TREE
					"{maxresults}"  => $maxResults_5_6613b4,
=======
					"{maxresults}"  => $maxResults_5_9a8b54,
>>>>>>> MERGE-SOURCE
=======
					"{maxresults}"  => $maxResults_5_492a23,
					"{altclass}"    => (($count_5_492a23+1) % 2) ? "CMS_odd" : "CMS_even",
>>>>>>> MERGE-SOURCE
				);
<<<<<<< TREE
<<<<<<< TREE
				//IF TAG START 6_ed48b2
=======
				//IF TAG START 6_e458a8
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars("{firstresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
=======
				//IF TAG START 6_cf7720
				$ifcondition_6_cf7720 = CMS_polymod_definition_parsing::replaceVars("{firstresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
				if ($ifcondition_6_cf7720) {
					$func_6_cf7720 = create_function("","return (".$ifcondition_6_cf7720.");");
					if ($func_6_cf7720()) {
>>>>>>> MERGE-SOURCE
						$content .="
						<div id=\"maxResults\">{maxresults} r&eacute;sultat(s) pour votre recherche.</div>
						";
					}
<<<<<<< TREE
<<<<<<< TREE
				}//IF TAG END 6_ed48b2
=======
				}//IF TAG END 6_e458a8
>>>>>>> MERGE-SOURCE
=======
					unset($func_6_cf7720);
				}
				unset($ifcondition_6_cf7720);
				//IF TAG END 6_cf7720
>>>>>>> MERGE-SOURCE
				$content .="
				<div class=\"newsTitle\">
				<h2><a href=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."?item=".$object[1]->getValue('id','')."\" title=\"".$object[1]->getValue('label','')."\">".$object[1]->getValue('label','')."</a></h2><span>".$object[1]->getValue('formatedDateStart','d/m/Y')."</span><div class=\"spacer\"></div>
				</div>
				<div class=\"newsContent\">
				";
<<<<<<< TREE
<<<<<<< TREE
				//IF TAG START 7_a9ce85
=======
				//IF TAG START 7_9e5fa9
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[1]->objectValues(4)->getValue('imageName','')), $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
=======
				//IF TAG START 7_9fcf31
				$ifcondition_7_9fcf31 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[1]->objectValues(4)->getValue('imageName','')), $replace);
				if ($ifcondition_7_9fcf31) {
					$func_7_9fcf31 = create_function("","return (".$ifcondition_7_9fcf31.");");
					if ($func_7_9fcf31()) {
>>>>>>> MERGE-SOURCE
						$content .="
						<div class=\"imgRight shadow\">
						".$object[1]->objectValues(4)->getValue('imageHTML','')."
						</div>
						";
					}
<<<<<<< TREE
<<<<<<< TREE
				}//IF TAG END 7_a9ce85
				//IF TAG START 8_38786e
=======
				}//IF TAG END 7_9e5fa9
				//IF TAG START 8_4ff686
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item))." == ".CMS_polymod_definition_parsing::prepareVar($object[1]->getValue('id','')), $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
=======
					unset($func_7_9fcf31);
				}
				unset($ifcondition_7_9fcf31);
				//IF TAG END 7_9fcf31
				//IF TAG START 8_ae1c8b
				$ifcondition_8_ae1c8b = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item))." == ".CMS_polymod_definition_parsing::prepareVar($object[1]->getValue('id','')), $replace);
				if ($ifcondition_8_ae1c8b) {
					$func_8_ae1c8b = create_function("","return (".$ifcondition_8_ae1c8b.");");
					if ($func_8_ae1c8b()) {
>>>>>>> MERGE-SOURCE
						$content .="
						<strong>".$object[1]->objectValues(2)->getValue('value','')."</strong>
						<br />".$object[1]->objectValues(3)->getValue('value','')."
						";
					}
<<<<<<< TREE
<<<<<<< TREE
				}//IF TAG END 8_38786e
				//IF TAG START 9_ea8bf8
=======
				}//IF TAG END 8_4ff686
				//IF TAG START 9_32c6c6
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
=======
					unset($func_8_ae1c8b);
				}
				unset($ifcondition_8_ae1c8b);
				//IF TAG END 8_ae1c8b
				//IF TAG START 9_6e8bab
				$ifcondition_9_6e8bab = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
				if ($ifcondition_9_6e8bab) {
					$func_9_6e8bab = create_function("","return (".$ifcondition_9_6e8bab.");");
					if ($func_9_6e8bab()) {
>>>>>>> MERGE-SOURCE
						$content .="
						".$object[1]->objectValues(2)->getValue('value','')."
						<a href=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."?item=".$object[1]->getValue('id','')."\" class=\"blocLien\" title=\"En savoir plus concernant '".$object[1]->getValue('label','')."'\">
						<span class=\"blocLienTop\">".$object[1]->getValue('label','')."</span>
						<span class=\"blocLienBottom\">En savoir plus</span>
						</a>
						";
					}
<<<<<<< TREE
<<<<<<< TREE
				}//IF TAG END 9_ea8bf8
=======
				}//IF TAG END 9_32c6c6
>>>>>>> MERGE-SOURCE
=======
					unset($func_9_6e8bab);
				}
				unset($ifcondition_9_6e8bab);
				//IF TAG END 9_6e8bab
>>>>>>> MERGE-SOURCE
				$content .="
				<div class=\"spacer\"></div>
				</div>
				";
<<<<<<< TREE
<<<<<<< TREE
				//IF TAG START 10_ed7347
=======
				//IF TAG START 10_d74fdb
>>>>>>> MERGE-SOURCE
				$ifcondition = CMS_polymod_definition_parsing::replaceVars("{lastresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
				if ($ifcondition) {
					$func = create_function("","return (".$ifcondition.");");
					if ($func()) {
=======
				//IF TAG START 10_fe356a
				$ifcondition_10_fe356a = CMS_polymod_definition_parsing::replaceVars("{lastresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
				if ($ifcondition_10_fe356a) {
					$func_10_fe356a = create_function("","return (".$ifcondition_10_fe356a.");");
					if ($func_10_fe356a()) {
>>>>>>> MERGE-SOURCE
						$content .="
						<div class=\"pages\" id=\"pages\">
						";
<<<<<<< TREE
<<<<<<< TREE
						//FUNCTION TAG START 11_91007d
						$parameters_11_91007d = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
=======
						//FUNCTION TAG START 11_f70177
						$parameters_11_f70177 = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
>>>>>>> MERGE-SOURCE
=======
						//FUNCTION TAG START 11_ed5e08
						$parameters_11_ed5e08 = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
>>>>>>> MERGE-SOURCE
						if (method_exists(new CMS_poly_definition_functions(), "pages")) {
<<<<<<< TREE
<<<<<<< TREE
							$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_11_91007d, array (
=======
							$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_11_f70177, array (
>>>>>>> MERGE-SOURCE
=======
							$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_11_ed5e08, array (
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
														'alt' => 'page pr&eacute;c&eacute;dente',
														'title' => 'page pr&eacute;c&eacute;dente',
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
														'alt' => 'page suivante',
														'title' => 'page suivante',
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
<<<<<<< TREE
<<<<<<< TREE
						//FUNCTION TAG END 11_91007d
=======
						//FUNCTION TAG END 11_f70177
>>>>>>> MERGE-SOURCE
=======
						//FUNCTION TAG END 11_ed5e08
>>>>>>> MERGE-SOURCE
						$content .="
						</div>
						";
					}
<<<<<<< TREE
<<<<<<< TREE
				}//IF TAG END 10_ed7347
				$count_5_6613b4++;
=======
				}//IF TAG END 10_d74fdb
				$count_5_9a8b54++;
>>>>>>> MERGE-SOURCE
=======
					unset($func_10_fe356a);
				}
				unset($ifcondition_10_fe356a);
				//IF TAG END 10_fe356a
				$count_5_492a23++;
>>>>>>> MERGE-SOURCE
				//do all result vars replacement
<<<<<<< TREE
<<<<<<< TREE
				$content_5_6613b4.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
=======
				$content_5_9a8b54.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
=======
				$content_5_492a23.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
			}
<<<<<<< TREE
<<<<<<< TREE
			$content = $content_5_6613b4; //retrieve previous content var if any
			$replace = $replace_5_6613b4; //retrieve previous replace vars if any
			$object[$objectDefinition_newsresult] = $object_5_6613b4; //retrieve previous object search if any
=======
			$content = $content_5_9a8b54; //retrieve previous content var if any
			$replace = $replace_5_9a8b54; //retrieve previous replace vars if any
			$object[$objectDefinition_newsresult] = $object_5_9a8b54; //retrieve previous object search if any
>>>>>>> MERGE-SOURCE
=======
			$content = $content_5_492a23; //retrieve previous content var if any
			unset($content_5_492a23);
			$replace = $replace_5_492a23; //retrieve previous replace vars if any
			unset($replace_5_492a23);
			$object[$objectDefinition_newsresult] = $object_5_492a23; //retrieve previous object search if any
			unset($object_5_492a23);
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
<<<<<<< TREE
		//RESULT newsresult TAG END 5_6613b4
		//NO-RESULT newsresult TAG START 12_5687a8
=======
		//RESULT newsresult TAG END 5_9a8b54
		//NO-RESULT newsresult TAG START 12_fa1436
>>>>>>> MERGE-SOURCE
=======
		//RESULT newsresult TAG END 5_492a23
		//NO-RESULT newsresult TAG START 12_4cb63a
>>>>>>> MERGE-SOURCE
		//launch search newsresult if not already done
		if($launchSearch_newsresult && !isset($results_newsresult)) {
			if (isset($search_newsresult)) {
				$results_newsresult = $search_newsresult->search();
			} else {
				CMS_grandFather::raiseError("Malformed atm-noresult tag : can't use this tag outside of atm-search \"newsresult\" tag ...");
				$results_newsresult = array();
			}
		} elseif (!$launchSearch_newsresult) {
			$results_newsresult = array();
		}
		if (!$results_newsresult) {
			$content .="Aucun r&eacute;sultat trouv&eacute; pour votre recherche ...";
		}
<<<<<<< TREE
<<<<<<< TREE
		//NO-RESULT newsresult TAG END 12_5687a8
=======
		//NO-RESULT newsresult TAG END 12_fa1436
>>>>>>> MERGE-SOURCE
=======
		//NO-RESULT newsresult TAG END 12_4cb63a
>>>>>>> MERGE-SOURCE
		//destroy search and results newsresult objects
		unset($search_newsresult);
		unset($results_newsresult);
<<<<<<< TREE
<<<<<<< TREE
		//SEARCH newsresult TAG END 4_d05388
		//AJAX TAG END 3_bbb909
=======
		//SEARCH newsresult TAG END 4_a4e1c0
		//AJAX TAG END 3_fe7474
>>>>>>> MERGE-SOURCE
		//output XML response
		$view = CMS_view::getInstance();
		$view->setDisplayMode(CMS_view::SHOW_RAW);
		$view->setContentTag('data');
		$view->setContent(CMS_polymod_definition_parsing::replaceVars($content, $replace));
		$view->show();
=======
		//SEARCH newsresult TAG END 4_7c5c10
		//AJAX TAG END 3_edb3e6
		//set view format
		$cms_view->setDisplayMode(CMS_view::SHOW_RAW);
		$content = CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
	}
}
$content .= '<!--{elements:'.base64_encode(serialize(array (
  'module' => 
  array (
    0 => 'standard',
    1 => 'standard',
    2 => 'standard',
    3 => 'standard',
    4 => 'pnews',
  ),
))).'}-->';


	echo $content;
	$cache_d783dc927ccc48d1c073baef1fe5ef50_content = $cache_d783dc927ccc48d1c073baef1fe5ef50->endSave();
endif;
unset($cache_d783dc927ccc48d1c073baef1fe5ef50);
$content = $cache_d783dc927ccc48d1c073baef1fe5ef50_content;
unset($cache_d783dc927ccc48d1c073baef1fe5ef50_content);
$cms_view->setContent($content);
//output empty XML response
unset($content);
$cms_view->show();
}  ?><?php /* Template [Intérieur Démo - pt58_Interieur.xml] */   ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";   ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Automne 4 : Actualités</title>
	<?php echo CMS_view::getCSS(array('/css/reset.css','/css/demo/common.css','/css/demo/interieur.css','/css/modules/pnews.css'), 'all');  ?>

	<!--[if lte IE 6]> 
		<link rel="stylesheet" type="text/css" href="/css/demo/ie6.css" media="all" />
	<![endif]-->
	<?php echo CMS_view::getCSS(array('/css/demo/print.css'), 'print');  ?>

	<?php echo CMS_view::getJavascript(array('','/js/CMS_functions.js','/js/modules/pnews/jquery-1.2.6.min-demo.js','/js/modules/pnews/pnews-demo.js'));  ?>

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
					<ul class="CMS_lvl2"><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/3-presentation.php">Présentation</a></li><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/24-documentation.php">Fonctionnalités</a></li><li class="CMS_lvl2 CMS_open "><a class="CMS_lvl2" href="http://test-folder/trunk/web/demo/31-exemples-de-modules.php">Exemples de modules</a><ul class="CMS_lvl3"><li class="CMS_lvl3 CMS_nosub CMS_current"><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/5-actualite.php">Actualités</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/6-mediatheque.php">Médiathèque</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://test-folder/trunk/web/demo/36-formulaire.php">Formulaire</a></li></ul></li></ul>
=======
					<ul class="CMS_lvl2"><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/3-presentation.php">Présentation</a></li><li class="CMS_lvl2 CMS_sub "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/24-documentation.php">Fonctionnalités</a></li><li class="CMS_lvl2 CMS_open "><a class="CMS_lvl2" href="http://127.0.0.1/web/demo/31-exemples-de-modules.php">Exemples de modules</a><ul class="CMS_lvl3"><li class="CMS_lvl3 CMS_nosub CMS_current"><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/5-actualite.php">Actualités</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/6-mediatheque.php">Médiathèque</a></li><li class="CMS_lvl3 CMS_nosub "><a class="CMS_lvl3" href="http://127.0.0.1/web/demo/36-formulaire.php">Formulaire</a></li></ul></li></ul>
>>>>>>> MERGE-SOURCE
				</div>
				<div id="content" class="page5">
					<div id="breadcrumbs">
<<<<<<< TREE
						<a href="http://test-folder/trunk/web/demo/2-accueil.php">Accueil</a> &gt; <a href="http://test-folder/trunk/web/demo/31-exemples-de-modules.php">Exemples de modules</a> &gt; 
=======
						<a href="http://127.0.0.1/web/demo/2-accueil.php">Accueil</a> &gt; <a href="http://127.0.0.1/web/demo/31-exemples-de-modules.php">Exemples de modules</a> &gt; 
>>>>>>> MERGE-SOURCE
					</div>
					<div id="title">
						<h1>Actualités</h1>
					</div>
					<?php /* Start clientspace [first] */   ?><?php /* Start row [605 [Actualités] Recherche - r58_610_Actualites__Recherche_FR.xml] */   ?>
	<?php $cache_9c3de03d3686e8cdae2ef12cd0e29ae3 = new CMS_cache('9c3de03d3686e8cdae2ef12cd0e29ae3', 'polymod', 'auto', true);
if ($cache_9c3de03d3686e8cdae2ef12cd0e29ae3->exist()):
	//Get content from cache
	$cache_9c3de03d3686e8cdae2ef12cd0e29ae3_content = $cache_9c3de03d3686e8cdae2ef12cd0e29ae3->load();
else:
	$cache_9c3de03d3686e8cdae2ef12cd0e29ae3->start();
	   ?>
<?php /*Generated on Mon, 24 May 2010 16:59:49 +0200 by Automne (TM) 4.0.2 */
if(!APPLICATION_ENFORCES_ACCESS_CONTROL || (isset($cms_user) && is_a($cms_user, 'CMS_profile_user') && $cms_user->hasModuleClearance('pnews', CLEARANCE_MODULE_VIEW))){
	$content = "";
	$replace = "";
	$atmIfResults = array();
	if (!isset($objectDefinitions) || !is_array($objectDefinitions)) $objectDefinitions = array();
	$blockAttributes = array (
		'module' => 'pnews',
		'language' => 'fr',
	);
	$parameters['pageID'] = '5';
	if (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != 'fr')) $cms_language = new CMS_language('fr');
	$parameters['public'] = true;
	if (isset($parameters['item'])) {$parameters['objectID'] = $parameters['item']->getObjectID();} elseif (isset($parameters['itemID']) && sensitiveIO::isPositiveInteger($parameters['itemID']) && !isset($parameters['objectID'])) $parameters['objectID'] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters['itemID']);
	if (!isset($object) || !is_array($object)) $object = array();
	if (!isset($object[1])) $object[1] = new CMS_poly_object(1, 0, array(), $parameters['public']);
	$parameters['module'] = 'pnews';
	$content .="
	<div id=\"newssearch\">
	<script type=\"text/javascript\">
	var pageURL = '".CMS_tree::getPageValue($parameters['pageID'],"url")."';
	</script>
	<form action=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."\" method=\"get\">
	<h2>Rechercher des actualit&eacute;s : </h2>
	<div class=\"newsForm\">
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
	//FUNCTION TAG START 2_f6a4c1
	$parameters_2_f6a4c1 = array ('selected' => CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat), $replace),);
	$object_2_f6a4c1 = &$object[1]->objectValues(5);
	if (method_exists($object_2_f6a4c1, "selectOptions")) {
		$content .= CMS_polymod_definition_parsing::replaceVars($object_2_f6a4c1->selectOptions($parameters_2_f6a4c1, NULL), $replace);
=======
	//FUNCTION TAG START 2_b9bcfe
	$parameters_2_b9bcfe = array ('selected' => CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat), $replace),);
	$object_2_b9bcfe = &$object[1]->objectValues(5);
	if (method_exists($object_2_b9bcfe, "selectOptions")) {
		$content .= CMS_polymod_definition_parsing::replaceVars($object_2_b9bcfe->selectOptions($parameters_2_b9bcfe, NULL), $replace);
>>>>>>> MERGE-SOURCE
=======
	//FUNCTION TAG START 2_72ac39
	$parameters_2_72ac39 = array ('selected' => CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat), $replace),);
	$object_2_72ac39 = &$object[1]->objectValues(5);
	if (method_exists($object_2_72ac39, "selectOptions")) {
		$content .= CMS_polymod_definition_parsing::replaceVars($object_2_72ac39->selectOptions($parameters_2_72ac39, NULL), $replace);
>>>>>>> MERGE-SOURCE
	} else {
<<<<<<< TREE
<<<<<<< TREE
		CMS_grandFather::raiseError("Malformed atm-function tag : can't found method selectOptions on object : ".get_class($object_2_f6a4c1));
=======
		CMS_grandFather::raiseError("Malformed atm-function tag : can't found method selectOptions on object : ".get_class($object_2_b9bcfe));
>>>>>>> MERGE-SOURCE
=======
		CMS_grandFather::raiseError("Malformed atm-function tag : can't found method selectOptions on object : ".get_class($object_2_72ac39));
>>>>>>> MERGE-SOURCE
	}
<<<<<<< TREE
<<<<<<< TREE
	//FUNCTION TAG END 2_f6a4c1
=======
	//FUNCTION TAG END 2_b9bcfe
>>>>>>> MERGE-SOURCE
=======
	//FUNCTION TAG END 2_72ac39
>>>>>>> MERGE-SOURCE
	$content .="
	</select>
	</div>
	<div id=\"loadingSearch\"><img src=\"img/demo/interieur/loading-news.gif\" alt=\"Chargement ...\" title=\"Chargement ...\" /></div>
	<input type=\"submit\" class=\"button\" name=\"search\" id=\"submitSearch\" value=\"ok\" />
	<div class=\"spacer\"></div>
	</div>
	</form>
	</div>
	<div id=\"searchresult\">
	";
<<<<<<< TREE
<<<<<<< TREE
	//AJAX TAG START 3_bbb909
	//SEARCH newsresult TAG START 4_d05388
=======
	//AJAX TAG START 3_fe7474
	//SEARCH newsresult TAG START 4_a4e1c0
>>>>>>> MERGE-SOURCE
=======
	//AJAX TAG START 3_edb3e6
	//SEARCH newsresult TAG START 4_7c5c10
>>>>>>> MERGE-SOURCE
	$objectDefinition_newsresult = '1';
	if (!isset($objectDefinitions[$objectDefinition_newsresult])) {
		$objectDefinitions[$objectDefinition_newsresult] = new CMS_poly_object_definition($objectDefinition_newsresult);
	}
	//public search ?
<<<<<<< TREE
<<<<<<< TREE
	$public_4_d05388 = isset($public_search) ? $public_search : false;
=======
	$public_4_a4e1c0 = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
=======
	$public_4_7c5c10 = isset($public_search) ? $public_search : false;
>>>>>>> MERGE-SOURCE
	//get search params
<<<<<<< TREE
<<<<<<< TREE
	$search_newsresult = new CMS_object_search($objectDefinitions[$objectDefinition_newsresult], $public_4_d05388);
=======
	$search_newsresult = new CMS_object_search($objectDefinitions[$objectDefinition_newsresult], $public_4_a4e1c0);
>>>>>>> MERGE-SOURCE
=======
	$search_newsresult = new CMS_object_search($objectDefinitions[$objectDefinition_newsresult], $public_4_7c5c10);
>>>>>>> MERGE-SOURCE
	$launchSearch_newsresult = true;
	//add search conditions if any
	$launchSearch_newsresult = (CMS_polymod_definition_parsing::addSearchCondition($search_newsresult, array (
		'search' => 'newsresult',
		'type' => 5,
		'value' => CMS_poly_definition_functions::getVarContent("request", "cat", "int", @$cat),
		'mandatory' => 'false',
	))) ? $launchSearch_newsresult : false;
	$launchSearch_newsresult = (CMS_polymod_definition_parsing::addSearchCondition($search_newsresult, array (
		'search' => 'newsresult',
		'type' => 'keywords',
		'value' => CMS_poly_definition_functions::getVarContent("request", "keyword", "string", @$keyword),
		'mandatory' => 'false',
	))) ? $launchSearch_newsresult : false;
	$launchSearch_newsresult = (CMS_polymod_definition_parsing::addSearchCondition($search_newsresult, array (
		'search' => 'newsresult',
		'type' => 'item',
		'value' => CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item),
		'mandatory' => 'false',
	))) ? $launchSearch_newsresult : false;
	$search_newsresult->setAttribute('itemsPerPage', (int) CMS_polymod_definition_parsing::replaceVars("10", $replace));
	$search_newsresult->setAttribute('page', (int) (CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::getVarContent("request", "page", "int", @$page), $replace) -1 ));
	$search_newsresult->addOrderCondition("objectID", "desc");
<<<<<<< TREE
<<<<<<< TREE
	//RESULT newsresult TAG START 5_6613b4
=======
	//RESULT newsresult TAG START 5_9a8b54
>>>>>>> MERGE-SOURCE
=======
	//RESULT newsresult TAG START 5_492a23
>>>>>>> MERGE-SOURCE
	//launch search newsresult if not already done
	if($launchSearch_newsresult && !isset($results_newsresult)) {
		if (isset($search_newsresult)) {
			$results_newsresult = $search_newsresult->search();
		} else {
			CMS_grandFather::raiseError("Malformed atm-result tag : can't use this tag outside of atm-search \"newsresult\" tag ...");
			$results_newsresult = array();
		}
	} elseif (!$launchSearch_newsresult) {
		$results_newsresult = array();
	}
	if ($results_newsresult) {
<<<<<<< TREE
<<<<<<< TREE
		$object_5_6613b4 = (isset($object[$objectDefinition_newsresult])) ? $object[$objectDefinition_newsresult] : ""; //save previous object search if any
		$replace_5_6613b4 = $replace; //save previous replace vars if any
		$count_5_6613b4 = 0;
		$content_5_6613b4 = $content; //save previous content var if any
		$maxPages_5_6613b4 = $search_newsresult->getMaxPages();
		$maxResults_5_6613b4 = $search_newsresult->getNumRows();
=======
		$object_5_9a8b54 = (isset($object[$objectDefinition_newsresult])) ? $object[$objectDefinition_newsresult] : ""; //save previous object search if any
		$replace_5_9a8b54 = $replace; //save previous replace vars if any
		$count_5_9a8b54 = 0;
		$content_5_9a8b54 = $content; //save previous content var if any
		$maxPages_5_9a8b54 = $search_newsresult->getMaxPages();
		$maxResults_5_9a8b54 = $search_newsresult->getNumRows();
>>>>>>> MERGE-SOURCE
=======
		$object_5_492a23 = (isset($object[$objectDefinition_newsresult])) ? $object[$objectDefinition_newsresult] : ""; //save previous object search if any
		$replace_5_492a23 = $replace; //save previous replace vars if any
		$count_5_492a23 = 0;
		$content_5_492a23 = $content; //save previous content var if any
		$maxPages_5_492a23 = $search_newsresult->getMaxPages();
		$maxResults_5_492a23 = $search_newsresult->getNumRows();
>>>>>>> MERGE-SOURCE
		foreach ($results_newsresult as $object[$objectDefinition_newsresult]) {
			$content = "";
			$replace["atm-search"] = array (
				"{resultid}" 	=> (isset($resultID_newsresult)) ? $resultID_newsresult : $object[$objectDefinition_newsresult]->getID(),
<<<<<<< TREE
<<<<<<< TREE
				"{firstresult}" => (!$count_5_6613b4) ? 1 : 0,
				"{lastresult}" 	=> ($count_5_6613b4 == sizeof($results_newsresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_5_6613b4+1),
				"{maxpages}"    => $maxPages_5_6613b4,
=======
				"{firstresult}" => (!$count_5_9a8b54) ? 1 : 0,
				"{lastresult}" 	=> ($count_5_9a8b54 == sizeof($results_newsresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_5_9a8b54+1),
				"{maxpages}"    => $maxPages_5_9a8b54,
>>>>>>> MERGE-SOURCE
=======
				"{firstresult}" => (!$count_5_492a23) ? 1 : 0,
				"{lastresult}" 	=> ($count_5_492a23 == sizeof($results_newsresult)-1) ? 1 : 0,
				"{resultcount}" => ($count_5_492a23+1),
				"{maxpages}"    => $maxPages_5_492a23,
>>>>>>> MERGE-SOURCE
				"{currentpage}" => ($search_newsresult->getAttribute('page')+1),
<<<<<<< TREE
<<<<<<< TREE
				"{maxresults}"  => $maxResults_5_6613b4,
=======
				"{maxresults}"  => $maxResults_5_9a8b54,
>>>>>>> MERGE-SOURCE
=======
				"{maxresults}"  => $maxResults_5_492a23,
				"{altclass}"    => (($count_5_492a23+1) % 2) ? "CMS_odd" : "CMS_even",
>>>>>>> MERGE-SOURCE
			);
<<<<<<< TREE
<<<<<<< TREE
			//IF TAG START 6_ed48b2
=======
			//IF TAG START 6_e458a8
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars("{firstresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
			//IF TAG START 6_cf7720
			$ifcondition_6_cf7720 = CMS_polymod_definition_parsing::replaceVars("{firstresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
			if ($ifcondition_6_cf7720) {
				$func_6_cf7720 = create_function("","return (".$ifcondition_6_cf7720.");");
				if ($func_6_cf7720()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<div id=\"maxResults\">{maxresults} r&eacute;sultat(s) pour votre recherche.</div>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 6_ed48b2
=======
			}//IF TAG END 6_e458a8
>>>>>>> MERGE-SOURCE
=======
				unset($func_6_cf7720);
			}
			unset($ifcondition_6_cf7720);
			//IF TAG END 6_cf7720
>>>>>>> MERGE-SOURCE
			$content .="
			<div class=\"newsTitle\">
			<h2><a href=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."?item=".$object[1]->getValue('id','')."\" title=\"".$object[1]->getValue('label','')."\">".$object[1]->getValue('label','')."</a></h2><span>".$object[1]->getValue('formatedDateStart','d/m/Y')."</span><div class=\"spacer\"></div>
			</div>
			<div class=\"newsContent\">
			";
<<<<<<< TREE
<<<<<<< TREE
			//IF TAG START 7_a9ce85
=======
			//IF TAG START 7_9e5fa9
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[1]->objectValues(4)->getValue('imageName','')), $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
			//IF TAG START 7_9fcf31
			$ifcondition_7_9fcf31 = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[1]->objectValues(4)->getValue('imageName','')), $replace);
			if ($ifcondition_7_9fcf31) {
				$func_7_9fcf31 = create_function("","return (".$ifcondition_7_9fcf31.");");
				if ($func_7_9fcf31()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<div class=\"imgRight shadow\">
					".$object[1]->objectValues(4)->getValue('imageHTML','')."
					</div>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 7_a9ce85
			//IF TAG START 8_38786e
=======
			}//IF TAG END 7_9e5fa9
			//IF TAG START 8_4ff686
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item))." == ".CMS_polymod_definition_parsing::prepareVar($object[1]->getValue('id','')), $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
				unset($func_7_9fcf31);
			}
			unset($ifcondition_7_9fcf31);
			//IF TAG END 7_9fcf31
			//IF TAG START 8_ae1c8b
			$ifcondition_8_ae1c8b = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item))." == ".CMS_polymod_definition_parsing::prepareVar($object[1]->getValue('id','')), $replace);
			if ($ifcondition_8_ae1c8b) {
				$func_8_ae1c8b = create_function("","return (".$ifcondition_8_ae1c8b.");");
				if ($func_8_ae1c8b()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<strong>".$object[1]->objectValues(2)->getValue('value','')."</strong>
					<br />".$object[1]->objectValues(3)->getValue('value','')."
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 8_38786e
			//IF TAG START 9_ea8bf8
=======
			}//IF TAG END 8_4ff686
			//IF TAG START 9_32c6c6
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
				unset($func_8_ae1c8b);
			}
			unset($ifcondition_8_ae1c8b);
			//IF TAG END 8_ae1c8b
			//IF TAG START 9_6e8bab
			$ifcondition_9_6e8bab = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
			if ($ifcondition_9_6e8bab) {
				$func_9_6e8bab = create_function("","return (".$ifcondition_9_6e8bab.");");
				if ($func_9_6e8bab()) {
>>>>>>> MERGE-SOURCE
					$content .="
					".$object[1]->objectValues(2)->getValue('value','')."
					<a href=\"".CMS_tree::getPageValue($parameters['pageID'],"url")."?item=".$object[1]->getValue('id','')."\" class=\"blocLien\" title=\"En savoir plus concernant '".$object[1]->getValue('label','')."'\">
					<span class=\"blocLienTop\">".$object[1]->getValue('label','')."</span>
					<span class=\"blocLienBottom\">En savoir plus</span>
					</a>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 9_ea8bf8
=======
			}//IF TAG END 9_32c6c6
>>>>>>> MERGE-SOURCE
=======
				unset($func_9_6e8bab);
			}
			unset($ifcondition_9_6e8bab);
			//IF TAG END 9_6e8bab
>>>>>>> MERGE-SOURCE
			$content .="
			<div class=\"spacer\"></div>
			</div>
			";
<<<<<<< TREE
<<<<<<< TREE
			//IF TAG START 10_ed7347
=======
			//IF TAG START 10_d74fdb
>>>>>>> MERGE-SOURCE
			$ifcondition = CMS_polymod_definition_parsing::replaceVars("{lastresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
			if ($ifcondition) {
				$func = create_function("","return (".$ifcondition.");");
				if ($func()) {
=======
			//IF TAG START 10_fe356a
			$ifcondition_10_fe356a = CMS_polymod_definition_parsing::replaceVars("{lastresult} && !".CMS_polymod_definition_parsing::prepareVar(CMS_poly_definition_functions::getVarContent("request", "item", "int", @$item)), $replace);
			if ($ifcondition_10_fe356a) {
				$func_10_fe356a = create_function("","return (".$ifcondition_10_fe356a.");");
				if ($func_10_fe356a()) {
>>>>>>> MERGE-SOURCE
					$content .="
					<div class=\"pages\" id=\"pages\">
					";
<<<<<<< TREE
<<<<<<< TREE
					//FUNCTION TAG START 11_91007d
					$parameters_11_91007d = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
=======
					//FUNCTION TAG START 11_f70177
					$parameters_11_f70177 = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
>>>>>>> MERGE-SOURCE
=======
					//FUNCTION TAG START 11_ed5e08
					$parameters_11_ed5e08 = array ('maxpages' => CMS_polymod_definition_parsing::replaceVars("{maxpages}", $replace),'currentpage' => CMS_polymod_definition_parsing::replaceVars("{currentpage}", $replace),'displayedpage' => CMS_polymod_definition_parsing::replaceVars("5", $replace),);
>>>>>>> MERGE-SOURCE
					if (method_exists(new CMS_poly_definition_functions(), "pages")) {
<<<<<<< TREE
<<<<<<< TREE
						$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_11_91007d, array (
=======
						$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_11_f70177, array (
>>>>>>> MERGE-SOURCE
=======
						$content .= CMS_polymod_definition_parsing::replaceVars(CMS_poly_definition_functions::pages($parameters_11_ed5e08, array (
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
													'alt' => 'page pr&eacute;c&eacute;dente',
													'title' => 'page pr&eacute;c&eacute;dente',
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
													'alt' => 'page suivante',
													'title' => 'page suivante',
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
<<<<<<< TREE
<<<<<<< TREE
					//FUNCTION TAG END 11_91007d
=======
					//FUNCTION TAG END 11_f70177
>>>>>>> MERGE-SOURCE
=======
					//FUNCTION TAG END 11_ed5e08
>>>>>>> MERGE-SOURCE
					$content .="
					</div>
					";
				}
<<<<<<< TREE
<<<<<<< TREE
			}//IF TAG END 10_ed7347
			$count_5_6613b4++;
=======
			}//IF TAG END 10_d74fdb
			$count_5_9a8b54++;
>>>>>>> MERGE-SOURCE
=======
				unset($func_10_fe356a);
			}
			unset($ifcondition_10_fe356a);
			//IF TAG END 10_fe356a
			$count_5_492a23++;
>>>>>>> MERGE-SOURCE
			//do all result vars replacement
<<<<<<< TREE
<<<<<<< TREE
			$content_5_6613b4.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
=======
			$content_5_9a8b54.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
=======
			$content_5_492a23.= CMS_polymod_definition_parsing::replaceVars($content, $replace);
>>>>>>> MERGE-SOURCE
		}
<<<<<<< TREE
<<<<<<< TREE
		$content = $content_5_6613b4; //retrieve previous content var if any
		$replace = $replace_5_6613b4; //retrieve previous replace vars if any
		$object[$objectDefinition_newsresult] = $object_5_6613b4; //retrieve previous object search if any
=======
		$content = $content_5_9a8b54; //retrieve previous content var if any
		$replace = $replace_5_9a8b54; //retrieve previous replace vars if any
		$object[$objectDefinition_newsresult] = $object_5_9a8b54; //retrieve previous object search if any
>>>>>>> MERGE-SOURCE
=======
		$content = $content_5_492a23; //retrieve previous content var if any
		unset($content_5_492a23);
		$replace = $replace_5_492a23; //retrieve previous replace vars if any
		unset($replace_5_492a23);
		$object[$objectDefinition_newsresult] = $object_5_492a23; //retrieve previous object search if any
		unset($object_5_492a23);
>>>>>>> MERGE-SOURCE
	}
<<<<<<< TREE
<<<<<<< TREE
	//RESULT newsresult TAG END 5_6613b4
	//NO-RESULT newsresult TAG START 12_5687a8
=======
	//RESULT newsresult TAG END 5_9a8b54
	//NO-RESULT newsresult TAG START 12_fa1436
>>>>>>> MERGE-SOURCE
=======
	//RESULT newsresult TAG END 5_492a23
	//NO-RESULT newsresult TAG START 12_4cb63a
>>>>>>> MERGE-SOURCE
	//launch search newsresult if not already done
	if($launchSearch_newsresult && !isset($results_newsresult)) {
		if (isset($search_newsresult)) {
			$results_newsresult = $search_newsresult->search();
		} else {
			CMS_grandFather::raiseError("Malformed atm-noresult tag : can't use this tag outside of atm-search \"newsresult\" tag ...");
			$results_newsresult = array();
		}
	} elseif (!$launchSearch_newsresult) {
		$results_newsresult = array();
	}
	if (!$results_newsresult) {
		$content .="Aucun r&eacute;sultat trouv&eacute; pour votre recherche ...";
	}
<<<<<<< TREE
<<<<<<< TREE
	//NO-RESULT newsresult TAG END 12_5687a8
=======
	//NO-RESULT newsresult TAG END 12_fa1436
>>>>>>> MERGE-SOURCE
=======
	//NO-RESULT newsresult TAG END 12_4cb63a
>>>>>>> MERGE-SOURCE
	//destroy search and results newsresult objects
	unset($search_newsresult);
	unset($results_newsresult);
<<<<<<< TREE
<<<<<<< TREE
	//SEARCH newsresult TAG END 4_d05388
	//AJAX TAG END 3_bbb909
=======
	//SEARCH newsresult TAG END 4_a4e1c0
	//AJAX TAG END 3_fe7474
>>>>>>> MERGE-SOURCE
=======
	//SEARCH newsresult TAG END 4_7c5c10
	//AJAX TAG END 3_edb3e6
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
			4 => 'pnews',
		),
	))).'}-->';
	echo $content;
	unset($content);}
	   ?>
	<?php $cache_9c3de03d3686e8cdae2ef12cd0e29ae3_content = $cache_9c3de03d3686e8cdae2ef12cd0e29ae3->endSave();
endif;
unset($cache_9c3de03d3686e8cdae2ef12cd0e29ae3);
echo $cache_9c3de03d3686e8cdae2ef12cd0e29ae3_content;
unset($cache_9c3de03d3686e8cdae2ef12cd0e29ae3_content);
   ?>
	
<?php /* End row [605 [Actualités] Recherche - r58_610_Actualites__Recherche_FR.xml] */   ?><?php /* End clientspace [first] */   ?>
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