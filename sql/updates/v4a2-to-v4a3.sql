ALTER TABLE `profiles` CHANGE `moduleClearancesStack_pr` `moduleClearancesStack_pr` TEXT NOT NULL ,
CHANGE `validationClearancesStack_pr` `validationClearancesStack_pr` TEXT NOT NULL ;

REPLACE INTO `mod_object_plugin_definition` (`id_mowd`, `object_id_mowd`, `label_id_mowd`, `description_id_mowd`, `query_mowd`, `definition_mowd`, `compiled_definition_mowd`) VALUES (1, 2, 87, 88, 'a:1:{i:8;s:1:"0";}', '<atm-plugin language="fr">\r\n    <atm-plugin-valid>\r\n        <atm-if what="{[''object2''][''fields''][9][''fileExtension'']} != ''flv'' &amp;&amp; {[''object2''][''fields''][9][''fileExtension'']} != ''mp3'' &amp;&amp; {[''object2''][''fields''][9][''fileExtension'']} != ''jpg'' &amp;&amp; {[''object2''][''fields''][9][''fileExtension'']} != ''gif'' &amp;&amp; {[''object2''][''fields''][9][''fileExtension'']} != ''png''">\r\n			<a href="{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}" target="_blank" title="T�l�charger le document ''{[''object2''][''fields''][9][''fileLabel'']}'' ({[''object2''][''fields''][9][''fileExtension'']} - {[''object2''][''fields''][9][''fileSize'']}Mo)"><atm-if what="{[''object2''][''fields''][9][''fileIcon'']}"><img src="{[''object2''][''fields''][9][''fileIcon'']}" alt="Fichier {[''object2''][''fields''][9][''fileExtension'']}" title="Fichier {[''object2''][''fields''][9][''fileExtension'']}" /></atm-if> {[''object2''][''label'']}</a>\r\n		</atm-if>\r\n    	<atm-if what="{[''object2''][''fields''][9][''fileExtension'']} == ''flv''">\r\n			<atm-if what="{[''object2''][''fields''][9][''thumbnail'']}">\r\n				<script type="text/javascript" src="/js/modules/pmedia/swfobject.js"></script>\r\n				<script type="text/javascript">\r\n					swfobject.embedSWF(''/automne/playerflv/player_flv.swf'', ''media-{[''object2''][''id'']}'', ''320'', ''200'', ''9.0.0'', ''/automne/swfobject/expressInstall.swf'', {flv:''{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}'', configxml:''/automne/playerflv/config_playerflv.xml'', startimage:''{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''thumbnail'']}''}, {allowfullscreen:true, wmode:''transparent''}, false);\r\n				</script>\r\n			</atm-if>\r\n			<atm-if what="!{[''object2''][''fields''][9][''thumbnail'']}">\r\n				<script type="text/javascript" src="/js/modules/pmedia/swfobject.js"></script>\r\n				<script type="text/javascript">\r\n					swfobject.embedSWF(''/automne/playerflv/player_flv.swf'', ''media-{[''object2''][''id'']}'', ''320'', ''200'', ''9.0.0'', ''/automne/swfobject/expressInstall.swf'', {flv:''{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}'', configxml:''/automne/playerflv/config_playerflv.xml''}, {allowfullscreen:true, wmode:''transparent''}, false);\r\n				</script>\r\n			</atm-if>\r\n			<div id="media-{[''object2''][''id'']}" class="pmedias-video" style="width:320px;height:200px;">\r\n				<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>\r\n			</div>\r\n		</atm-if>\r\n		<atm-if what="{[''object2''][''fields''][9][''fileExtension'']} == ''mp3''">\r\n			<script type="text/javascript" src="/js/modules/pmedia/swfobject.js"></script>\r\n			<script type="text/javascript">\r\n				swfobject.embedSWF(''/automne/playermp3/player_mp3.swf'', ''media-{[''object2''][''id'']}'', ''200'', ''20'', ''9.0.0'', ''/automne/swfobject/expressInstall.swf'', {mp3:''{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}'', configxml:''/automne/playermp3/config_playermp3.xml''}, {wmode:''transparent''}, false);\r\n			</script>\r\n			<div id="media-{[''object2''][''id'']}" class="pmedias-audio" style="width:200px;height:20px;">\r\n				<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>\r\n			</div>\r\n		</atm-if>\r\n		<atm-if what="{[''object2''][''fields''][9][''fileExtension'']} == ''jpg'' || {[''object2''][''fields''][9][''fileExtension'']} == ''gif'' || {[''object2''][''fields''][9][''fileExtension'']} == ''png''">\r\n			<atm-if what="{[''object2''][''fields''][9][''thumbnail'']}">\r\n				<a href="{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}" onclick="javascript:CMS_openPopUpImage(''/imagezoom.php?location=public&amp;module=pmedia&amp;file={[''object2''][''fields''][9][''filename'']}&amp;label={[''object2''][''label'']|js}'');return false;" target="_blank" title="Voir l''image ''{[''object2''][''label'']}'' ({[''object2''][''fields''][9][''fileExtension'']} - {[''object2''][''fields''][9][''fileSize'']}Mo)"><img src="{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''thumbnail'']}" alt="{[''object2''][''label'']}" title="{[''object2''][''label'']}" /></a>\r\n			</atm-if>\r\n			<atm-if what="!{[''object2''][''fields''][9][''thumbnail'']}">\r\n				<img src="{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}" alt="{[''object2''][''label'']}" title="{[''object2''][''label'']}" style="max-width:200px;" />\r\n			</atm-if>\r\n		</atm-if>\r\n    </atm-plugin-valid>\r\n	<atm-plugin-view>\r\n        <atm-if what="{[''object2''][''fields''][9][''fileExtension'']} != ''jpg'' &amp;&amp; {[''object2''][''fields''][9][''fileExtension'']} != ''gif'' &amp;&amp; {[''object2''][''fields''][9][''fileExtension'']} != ''png''">\r\n			<a href="{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}" target="_blank" title="T�l�charger le document ''{[''object2''][''fields''][9][''fileLabel'']}'' ({[''object2''][''fields''][9][''fileExtension'']} - {[''object2''][''fields''][9][''fileSize'']}Mo)"><atm-if what="{[''object2''][''fields''][9][''fileIcon'']}"><img src="{[''object2''][''fields''][9][''fileIcon'']}" alt="Fichier {[''object2''][''fields''][9][''fileExtension'']}" title="Fichier {[''object2''][''fields''][9][''fileExtension'']}" /></atm-if> {[''object2''][''label'']}</a>\r\n		</atm-if>\r\n    	<atm-if what="{[''object2''][''fields''][9][''fileExtension'']} == ''jpg'' || {[''object2''][''fields''][9][''fileExtension'']} == ''gif'' || {[''object2''][''fields''][9][''fileExtension'']} == ''png''">\r\n			<atm-if what="{[''object2''][''fields''][9][''thumbnail'']}">\r\n				<a href="{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}" onclick="javascript:CMS_openPopUpImage(''/imagezoom.php?location=public&amp;module=pmedia&amp;file={[''object2''][''fields''][9][''filename'']}&amp;label={[''object2''][''label'']|js}'');return false;" target="_blank" title="Voir l''image ''{[''object2''][''label'']}'' ({[''object2''][''fields''][9][''fileExtension'']} - {[''object2''][''fields''][9][''fileSize'']}Mo)"><img src="{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''thumbnail'']}" alt="{[''object2''][''label'']}" title="{[''object2''][''label'']}" /></a>\r\n			</atm-if>\r\n			<atm-if what="!{[''object2''][''fields''][9][''thumbnail'']}">\r\n				<img src="{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}" alt="{[''object2''][''label'']}" title="{[''object2''][''label'']}" style="max-width:200px;" />\r\n			</atm-if>\r\n		</atm-if>\r\n    </atm-plugin-view>\r\n</atm-plugin>', '<?php\n//Generated by : $Id: v4a2-to-v4a3.sql,v 1.1 2009/02/09 10:24:47 sebastien Exp $\n$content = "";\n$replace = "";\nif (!isset($objectDefinitions) || !is_array($objectDefinitions)) $objectDefinitions = array();\n$parameters[''objectID''] = 2;\nif (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != ''fr'')) $cms_language = new CMS_language(''fr'');\n$parameters[''public''] = (isset($parameters[''public''])) ? $parameters[''public''] : true;\nif (isset($parameters[''item''])) {$parameters[''objectID''] = $parameters[''item'']->getObjectID();} elseif (isset($parameters[''itemID'']) && sensitiveIO::isPositiveInteger($parameters[''itemID'']) && !isset($parameters[''objectID''])) $parameters[''objectID''] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters[''itemID'']);\nif (!isset($object) || !is_array($object)) $object = array();\nif (!isset($object[2])) $object[2] = new CMS_poly_object(2, 0, array(), $parameters[''public'']);\n$parameters[''module''] = ''pmedia'';\n//PLUGIN TAG START 19_a9863a\nif (!sensitiveIO::isPositiveInteger($parameters[''itemID'']) || !sensitiveIO::isPositiveInteger($parameters[''objectID''])) {\n	CMS_grandFather::raiseError(''Error into atm-plugin tag : can\\''t found object infos to use into : $parameters[\\''itemID\\''] and $parameters[\\''objectID\\'']'');\n} else {\n	//search needed object (need to search it for publications and rights purpose)\n	if (!isset($objectDefinitions[$parameters[''objectID'']])) {\n		$objectDefinitions[$parameters[''objectID'']] = new CMS_poly_object_definition($parameters[''objectID'']);\n	}\n	$search_19_a9863a = new CMS_object_search($objectDefinitions[$parameters[''objectID'']], $parameters[''public'']);\n	$search_19_a9863a->addWhereCondition(''item'', $parameters[''itemID'']);\n	$results_19_a9863a = $search_19_a9863a->search();\n	if (isset($results_19_a9863a[$parameters[''itemID'']]) && is_object($results_19_a9863a[$parameters[''itemID'']])) {\n		$object[$parameters[''objectID'']] = $results_19_a9863a[$parameters[''itemID'']];\n	} else {\n		$object[$parameters[''objectID'']] = new CMS_poly_object($parameters[''objectID''], 0, array(), $parameters[''public'']);\n	}\n	//PLUGIN-VALID TAG START 20_b35980\n	if ($object[$parameters[''objectID'']]->isInUserSpace() && !isset($parameters[''plugin-view'']) && !isset($parameters[''has-plugin-view'']) ) {\n		//IF TAG START 21_68fccb\n		$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." != ''flv'' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." != ''mp3'' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." != ''jpg'' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." != ''gif'' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." != ''png''", $replace);\n		if ($ifcondition) {\n			$func = create_function("","return (".$ifcondition.");");\n			if ($func()) {\n				$content .="\n				<a href=\\"".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''filename'','''')."\\" target=\\"_blank\\" title=\\"T�l�charger le document ''".$object[2]->objectValues(9)->getValue(''fileLabel'','''')."'' (".$object[2]->objectValues(9)->getValue(''fileExtension'','''')." - ".$object[2]->objectValues(9)->getValue(''fileSize'','''')."Mo)\\">";\n				//IF TAG START 22_7470a1\n				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileIcon'','''')), $replace);\n				if ($ifcondition) {\n					$func = create_function("","return (".$ifcondition.");");\n					if ($func()) {\n						$content .="<img src=\\"".$object[2]->objectValues(9)->getValue(''fileIcon'','''')."\\" alt=\\"Fichier ".$object[2]->objectValues(9)->getValue(''fileExtension'','''')."\\" title=\\"Fichier ".$object[2]->objectValues(9)->getValue(''fileExtension'','''')."\\" />";\n					}\n				}//IF TAG END 22_7470a1\n				$content .=" ".$object[2]->getValue(''label'','''')."</a>\n				";\n			}\n		}//IF TAG END 21_68fccb\n		//IF TAG START 23_43220f\n		$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." == ''flv''", $replace);\n		if ($ifcondition) {\n			$func = create_function("","return (".$ifcondition.");");\n			if ($func()) {\n				//IF TAG START 24_52b55f\n				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''thumbnail'','''')), $replace);\n				if ($ifcondition) {\n					$func = create_function("","return (".$ifcondition.");");\n					if ($func()) {\n						$content .="\n						<script type=\\"text/javascript\\" src=\\"/js/modules/pmedia/swfobject.js\\"></script>\n						<script type=\\"text/javascript\\">\n						swfobject.embedSWF(''/automne/playerflv/player_flv.swf'', ''media-".$object[2]->getValue(''id'','''')."'', ''320'', ''200'', ''9.0.0'', ''/automne/swfobject/expressInstall.swf'', {flv:''".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''filename'','''')."'', configxml:''/automne/playerflv/config_playerflv.xml'', startimage:''".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''thumbnail'','''')."''}, {allowfullscreen:true, wmode:''transparent''}, false);\n						</script>\n						";\n					}\n				}//IF TAG END 24_52b55f\n				//IF TAG START 25_07925f\n				$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''thumbnail'','''')), $replace);\n				if ($ifcondition) {\n					$func = create_function("","return (".$ifcondition.");");\n					if ($func()) {\n						$content .="\n						<script type=\\"text/javascript\\" src=\\"/js/modules/pmedia/swfobject.js\\"></script>\n						<script type=\\"text/javascript\\">\n						swfobject.embedSWF(''/automne/playerflv/player_flv.swf'', ''media-".$object[2]->getValue(''id'','''')."'', ''320'', ''200'', ''9.0.0'', ''/automne/swfobject/expressInstall.swf'', {flv:''".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''filename'','''')."'', configxml:''/automne/playerflv/config_playerflv.xml''}, {allowfullscreen:true, wmode:''transparent''}, false);\n						</script>\n						";\n					}\n				}//IF TAG END 25_07925f\n				$content .="\n				<div id=\\"media-".$object[2]->getValue(''id'','''')."\\" class=\\"pmedias-video\\" style=\\"width:320px;height:200px;\\">\n				<p><a href=\\"http://www.adobe.com/go/getflashplayer\\"><img src=\\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\\" alt=\\"Get Adobe Flash player\\" /></a></p>\n				</div>\n				";\n			}\n		}//IF TAG END 23_43220f\n		//IF TAG START 26_14a1f5\n		$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." == ''mp3''", $replace);\n		if ($ifcondition) {\n			$func = create_function("","return (".$ifcondition.");");\n			if ($func()) {\n				$content .="\n				<script type=\\"text/javascript\\" src=\\"/js/modules/pmedia/swfobject.js\\"></script>\n				<script type=\\"text/javascript\\">\n				swfobject.embedSWF(''/automne/playermp3/player_mp3.swf'', ''media-".$object[2]->getValue(''id'','''')."'', ''200'', ''20'', ''9.0.0'', ''/automne/swfobject/expressInstall.swf'', {mp3:''".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''filename'','''')."'', configxml:''/automne/playermp3/config_playermp3.xml''}, {wmode:''transparent''}, false);\n				</script>\n				<div id=\\"media-".$object[2]->getValue(''id'','''')."\\" class=\\"pmedias-audio\\" style=\\"width:200px;height:20px;\\">\n				<p><a href=\\"http://www.adobe.com/go/getflashplayer\\"><img src=\\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\\" alt=\\"Get Adobe Flash player\\" /></a></p>\n				</div>\n				";\n			}\n		}//IF TAG END 26_14a1f5\n		//IF TAG START 27_ce5f40\n		$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." == ''jpg'' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." == ''gif'' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." == ''png''", $replace);\n		if ($ifcondition) {\n			$func = create_function("","return (".$ifcondition.");");\n			if ($func()) {\n				//IF TAG START 28_cac52b\n				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''thumbnail'','''')), $replace);\n				if ($ifcondition) {\n					$func = create_function("","return (".$ifcondition.");");\n					if ($func()) {\n						$content .="\n						<a href=\\"".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''filename'','''')."\\" onclick=\\"javascript:CMS_openPopUpImage(''/imagezoom.php?location=public&module=pmedia&file=".$object[2]->objectValues(9)->getValue(''filename'','''')."&label=".$object[2]->getValue(''label'',''js'')."'');return false;\\" target=\\"_blank\\" title=\\"Voir l''image ''".$object[2]->getValue(''label'','''')."'' (".$object[2]->objectValues(9)->getValue(''fileExtension'','''')." - ".$object[2]->objectValues(9)->getValue(''fileSize'','''')."Mo)\\"><img src=\\"".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''thumbnail'','''')."\\" alt=\\"".$object[2]->getValue(''label'','''')."\\" title=\\"".$object[2]->getValue(''label'','''')."\\" /></a>\n						";\n					}\n				}//IF TAG END 28_cac52b\n				//IF TAG START 29_ba2cd8\n				$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''thumbnail'','''')), $replace);\n				if ($ifcondition) {\n					$func = create_function("","return (".$ifcondition.");");\n					if ($func()) {\n						$content .="\n						<img src=\\"".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''filename'','''')."\\" alt=\\"".$object[2]->getValue(''label'','''')."\\" title=\\"".$object[2]->getValue(''label'','''')."\\" style=\\"max-width:200px;\\" />\n						";\n					}\n				}//IF TAG END 29_ba2cd8\n			}\n		}//IF TAG END 27_ce5f40\n	}\n	//PLUGIN-VALID END 20_b35980\n	//PLUGIN-VIEW TAG START 30_19a8a9\n	if ($object[$parameters[''objectID'']]->isInUserSpace() && isset($parameters[''plugin-view''])) {\n		//IF TAG START 31_a50acd\n		$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." != ''jpg'' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." != ''gif'' && ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." != ''png''", $replace);\n		if ($ifcondition) {\n			$func = create_function("","return (".$ifcondition.");");\n			if ($func()) {\n				$content .="\n				<a href=\\"".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''filename'','''')."\\" target=\\"_blank\\" title=\\"T�l�charger le document ''".$object[2]->objectValues(9)->getValue(''fileLabel'','''')."'' (".$object[2]->objectValues(9)->getValue(''fileExtension'','''')." - ".$object[2]->objectValues(9)->getValue(''fileSize'','''')."Mo)\\">";\n				//IF TAG START 32_56c21b\n				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileIcon'','''')), $replace);\n				if ($ifcondition) {\n					$func = create_function("","return (".$ifcondition.");");\n					if ($func()) {\n						$content .="<img src=\\"".$object[2]->objectValues(9)->getValue(''fileIcon'','''')."\\" alt=\\"Fichier ".$object[2]->objectValues(9)->getValue(''fileExtension'','''')."\\" title=\\"Fichier ".$object[2]->objectValues(9)->getValue(''fileExtension'','''')."\\" />";\n					}\n				}//IF TAG END 32_56c21b\n				$content .=" ".$object[2]->getValue(''label'','''')."</a>\n				";\n			}\n		}//IF TAG END 31_a50acd\n		//IF TAG START 33_2e643a\n		$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." == ''jpg'' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." == ''gif'' || ".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''fileExtension'',''''))." == ''png''", $replace);\n		if ($ifcondition) {\n			$func = create_function("","return (".$ifcondition.");");\n			if ($func()) {\n				//IF TAG START 34_dc2434\n				$ifcondition = CMS_polymod_definition_parsing::replaceVars(CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''thumbnail'','''')), $replace);\n				if ($ifcondition) {\n					$func = create_function("","return (".$ifcondition.");");\n					if ($func()) {\n						$content .="\n						<a href=\\"".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''filename'','''')."\\" onclick=\\"javascript:CMS_openPopUpImage(''/imagezoom.php?location=public&module=pmedia&file=".$object[2]->objectValues(9)->getValue(''filename'','''')."&label=".$object[2]->getValue(''label'',''js'')."'');return false;\\" target=\\"_blank\\" title=\\"Voir l''image ''".$object[2]->getValue(''label'','''')."'' (".$object[2]->objectValues(9)->getValue(''fileExtension'','''')." - ".$object[2]->objectValues(9)->getValue(''fileSize'','''')."Mo)\\"><img src=\\"".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''thumbnail'','''')."\\" alt=\\"".$object[2]->getValue(''label'','''')."\\" title=\\"".$object[2]->getValue(''label'','''')."\\" /></a>\n						";\n					}\n				}//IF TAG END 34_dc2434\n				//IF TAG START 35_307849\n				$ifcondition = CMS_polymod_definition_parsing::replaceVars("!".CMS_polymod_definition_parsing::prepareVar($object[2]->objectValues(9)->getValue(''thumbnail'','''')), $replace);\n				if ($ifcondition) {\n					$func = create_function("","return (".$ifcondition.");");\n					if ($func()) {\n						$content .="\n						<img src=\\"".$object[2]->objectValues(9)->getValue(''filePath'','''')."/".$object[2]->objectValues(9)->getValue(''filename'','''')."\\" alt=\\"".$object[2]->getValue(''label'','''')."\\" title=\\"".$object[2]->getValue(''label'','''')."\\" style=\\"max-width:200px;\\" />\n						";\n					}\n				}//IF TAG END 35_307849\n			}\n		}//IF TAG END 33_2e643a\n	}\n	//PLUGIN-VIEW END 30_19a8a9\n	$content .="\n	";\n}\n//PLUGIN TAG END 19_a9863a\necho CMS_polymod_definition_parsing::replaceVars($content, $replace);\n?>');


REPLACE INTO `mod_object_rss_definition` (`id_mord`, `object_id_mord`, `label_id_mord`, `description_id_mord`, `link_mord`, `author_mord`, `copyright_mord`, `categories_mord`, `ttl_mord`, `email_mord`, `definition_mord`, `compiled_definition_mord`, `last_compilation_mord`) VALUES (3, 1, 40, 41, '', '', '', '', 1440, '', '<atm-rss language="fr">\r\n    <atm-rss-title>Actualit�s du site d�mo d''Automne</atm-rss-title>\r\n    <atm-search what="{[''object1'']}" name="rss">\r\n        <atm-search-order search="rss" type="publication date after" direction="desc" />\r\n        <atm-result search="rss">\r\n            <atm-rss-item>\r\n                <atm-rss-item-url>{page:5:url}?item={[''object1''][''id'']}</atm-rss-item-url>\r\n                <atm-rss-item-title>{[''object1''][''fields''][1][''value'']}</atm-rss-item-title>\r\n                <atm-rss-item-content>{[''object1''][''fields''][2][''htmlvalue'']}</atm-rss-item-content>\r\n                <atm-rss-item-date>{[''object1''][''formatedDateStart'']|d/m/Y}</atm-rss-item-date>\r\n            </atm-rss-item>\r\n        </atm-result>\r\n    </atm-search>\r\n</atm-rss>', '<?php\n//Generated by : $Id: v4a2-to-v4a3.sql,v 1.1 2009/02/09 10:24:47 sebastien Exp $\n$content = "";\n$replace = "";\nif (!isset($objectDefinitions) || !is_array($objectDefinitions)) $objectDefinitions = array();\n$parameters[''objectID''] = 1;\nif (!isset($cms_language) || (isset($cms_language) && $cms_language->getCode() != ''fr'')) $cms_language = new CMS_language(''fr'');\n$parameters[''public''] = true;\nif (isset($parameters[''item''])) {$parameters[''objectID''] = $parameters[''item'']->getObjectID();} elseif (isset($parameters[''itemID'']) && sensitiveIO::isPositiveInteger($parameters[''itemID'']) && !isset($parameters[''objectID''])) $parameters[''objectID''] = CMS_poly_object_catalog::getObjectDefinitionByID($parameters[''itemID'']);\nif (!isset($object) || !is_array($object)) $object = array();\nif (!isset($object[1])) $object[1] = new CMS_poly_object(1, 0, array(), $parameters[''public'']);\n$parameters[''module''] = ''pnews'';\n//RSS TAG START 2_5600a6\nif (!sensitiveIO::isPositiveInteger($parameters[''objectID''])) {\n	CMS_grandFather::raiseError(''Error into atm-rss tag : can\\''t found object infos to use into : $parameters[\\''objectID\\'']'');\n} else {\n	//RSS-ITEM-TITLE TAG START 3_b8e10f\n	$content .= ''<title>'';\n	//save content\n	$content_3_b8e10f = $content;\n	$content = '''';\n	$content .="Actualit�s du site d�mo d''Automne";\n	//then remove tags from content and add it to old content\n	$entities = array(''&'' => ''&amp;'',''>'' => ''&gt;'',''<'' => ''&lt;'',);\n	$content = $content_3_b8e10f.str_replace(array_keys($entities),$entities,strip_tags(html_entity_decode($content)));\n	$content .= ''</title>'';\n	//RSS-ITEM-TITLE TAG END 3_b8e10f\n	//SEARCH rss TAG START 4_47e1e7\n	$objectDefinition_rss = ''1'';\n	if (!isset($objectDefinitions[$objectDefinition_rss])) {\n		$objectDefinitions[$objectDefinition_rss] = new CMS_poly_object_definition($objectDefinition_rss);\n	}\n	//public search ?\n	$public_4_47e1e7 = isset($public_search) ? $public_search : false;\n	//get search params\n	$search_rss = new CMS_object_search($objectDefinitions[$objectDefinition_rss], $public_4_47e1e7);\n	$launchSearch_rss = true;\n	//add search conditions if any\n	$search_rss->addOrderCondition("publication date after", "desc");\n	//RESULT rss TAG START 5_8b6b19\n	//launch search rss if not already done\n	if($launchSearch_rss && !isset($results_rss)) {\n		if (isset($search_rss)) {\n			$results_rss = $search_rss->search();\n		} else {\n			CMS_grandFather::raiseError("Malformed atm-result tag : can''t use this tag outside of atm-search \\"rss\\" tag ...");\n			$results_rss = array();\n		}\n	} elseif (!$launchSearch_rss) {\n		$results_rss = array();\n	}\n	if ($results_rss) {\n		$object_5_8b6b19 = $object[$objectDefinition_rss]; //save previous object search if any\n		$replace_5_8b6b19 = $replace; //save previous replace vars if any\n		$count_5_8b6b19 = 0;\n		$content_5_8b6b19 = $content; //save previous content var if any\n		$maxPages_5_8b6b19 = $search_rss->getMaxPages();\n		$maxResults_5_8b6b19 = $search_rss->getNumRows();\n		foreach ($results_rss as $object[$objectDefinition_rss]) {\n			$content = "";\n			$replace["atm-search"] = array (\n				"{resultid}" 	=> (isset($resultID_rss)) ? $resultID_rss : $object[$objectDefinition_rss]->getID(),\n				"{firstresult}" => (!$count_5_8b6b19) ? 1 : 0,\n				"{lastresult}" 	=> ($count_5_8b6b19 == sizeof($results_rss)-1) ? 1 : 0,\n				"{resultcount}" => ($count_5_8b6b19+1),\n				"{maxpages}"    => $maxPages_5_8b6b19,\n				"{currentpage}" => ($search_rss->getAttribute(''page'')+1),\n				"{maxresults}"  => $maxResults_5_8b6b19,\n			);\n			//RSS-ITEM TAG START 6_502182\n			$content .= ''<item>\n			<guid isPermaLink="false">object''.$parameters[''objectID''].''-''.$object[$parameters[''objectID'']]->getID().''</guid>'';\n			//RSS-ITEM-LINK TAG START 7_5a7286\n			$content .= ''<link>'';\n			//save content\n			$content_7_5a7286 = $content;\n			$content = '''';\n			$content .=CMS_tree::getPageValue("5","url")."?item=".$object[1]->getValue(''id'','''');\n			//then remove tags from content and add it to old content\n			$entities = array(''&'' => ''&amp;'',''>'' => ''&gt;'',''<'' => ''&lt;'',);\n			$content = $content_7_5a7286.str_replace(array_keys($entities),$entities,strip_tags(html_entity_decode($content)));\n			$content .= ''</link>'';\n			//RSS-ITEM-LINK TAG END 7_5a7286\n			//RSS-ITEM-TITLE TAG START 8_0fc26b\n			$content .= ''<title>'';\n			//save content\n			$content_8_0fc26b = $content;\n			$content = '''';\n			$content .=$object[1]->objectValues(1)->getValue(''value'','''');\n			//then remove tags from content and add it to old content\n			$entities = array(''&'' => ''&amp;'',''>'' => ''&gt;'',''<'' => ''&lt;'',);\n			$content = $content_8_0fc26b.str_replace(array_keys($entities),$entities,strip_tags(html_entity_decode($content)));\n			$content .= ''</title>'';\n			//RSS-ITEM-TITLE TAG END 8_0fc26b\n			//RSS-ITEM-DESCRIPTION TAG START 9_609408\n			$content .= ''<description>'';\n			$content .= ''<![CDATA['';\n			$content .=$object[1]->objectValues(2)->getValue(''htmlvalue'','''');\n			$content .= '']]>'';\n			$content .= ''</description>'';\n			//RSS-ITEM-DESCRIPTION TAG END 9_609408\n			//RSS-ITEM-PUBDATE TAG START 10_8538c0\n			$content .= ''<pubDate>'';\n			//save content\n			$content_10_8538c0 = $content;\n			$content = '''';\n			$content .=$object[1]->getValue(''formatedDateStart'',''d/m/Y'');\n			//then remove tags from content and add it to old content\n			$entities = array(''&'' => ''&amp;'',''>'' => ''&gt;'',''<'' => ''&lt;'',);\n			$content = $content_10_8538c0.str_replace(array_keys($entities),$entities,strip_tags(html_entity_decode($content)));\n			$content .= ''</pubDate>'';\n			//RSS-ITEM-PUBDATE TAG END 10_8538c0\n			$content .= ''</item>'';\n			//RSS-ITEM TAG END 6_502182\n			$count_5_8b6b19++;\n			//do all result vars replacement\n			$content_5_8b6b19.= CMS_polymod_definition_parsing::replaceVars($content, $replace);\n		}\n		$content = $content_5_8b6b19; //retrieve previous content var if any\n		$replace = $replace_5_8b6b19; //retrieve previous replace vars if any\n		$object[$objectDefinition_rss] = $object_5_8b6b19; //retrieve previous object search if any\n	}\n	//RESULT rss TAG END 5_8b6b19\n	//destroy search and results rss objects\n	unset($search_rss);\n	unset($results_rss);\n	//SEARCH rss TAG END 4_47e1e7\n	$content .="\n	";\n}\n//RSS TAG END 2_5600a6\necho CMS_polymod_definition_parsing::replaceVars($content, $replace);\n?>', '2009-02-06 12:02:30');


REPLACE INTO `mod_object_definition` (`id_mod`, `label_id_mod`, `description_id_mod`, `resource_usage_mod`, `module_mod`, `admineditable_mod`, `composedLabel_mod`, `previewURL_mod`, `indexable_mod`, `indexURL_mod`, `compiledIndexURL_mod`, `resultsDefinition_mod`) VALUES (2, 70, 71, 1, 'pmedia', 0, '', '6||item={[''object2''][''id'']}', 0, '', '', '<div class="pmedias">\r\n	<atm-if what="{[''object2''][''fields''][9][''thumbnail'']} &amp;&amp; {[''object2''][''fields''][9][''fileExtension'']} != ''flv'' &amp;&amp; {[''object2''][''fields''][9][''fileExtension'']} != ''mp3''">\r\n		<p style="float:right;"><a href="{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}" target="_blank"><img src="{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''thumbnail'']}" /></a></p>\r\n	</atm-if>\r\n	<atm-if what="{[''object2''][''fields''][9][''fileExtension'']} == ''flv''">\r\n		<atm-if what="{[''object2''][''fields''][9][''thumbnail'']}">\r\n			<script type="text/javascript">\r\n				swfobject.embedSWF(''/automne/playerflv/player_flv.swf'', ''media-{[''object2''][''id'']}'', ''320'', ''200'', ''9.0.0'', ''/automne/swfobject/expressInstall.swf'', {flv:''{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}'', configxml:''/automne/playerflv/config_playerflv.xml'', startimage:''{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''thumbnail'']}''}, {allowfullscreen:true, wmode:''transparent''}, {''style'':''float:right;''});\r\n			</script>\r\n		</atm-if>\r\n		<atm-if what="!{[''object2''][''fields''][9][''thumbnail'']}">\r\n			<script type="text/javascript">\r\n				swfobject.embedSWF(''/automne/playerflv/player_flv.swf'', ''media-{[''object2''][''id'']}'', ''320'', ''200'', ''9.0.0'', ''/automne/swfobject/expressInstall.swf'', {flv:''{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}'', configxml:''/automne/playerflv/config_playerflv.xml''}, {allowfullscreen:true, wmode:''transparent''}, {''style'':''float:right;''});\r\n			</script>\r\n		</atm-if>\r\n		<div id="media-{[''object2''][''id'']}" class="pmedias-video" style="width:320px;height:200px;float:right;">\r\n			<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>\r\n		</div>\r\n	</atm-if>\r\n	<atm-if what="{[''object2''][''fields''][9][''fileExtension'']} == ''mp3''">\r\n		<script type="text/javascript">\r\n			swfobject.embedSWF(''/automne/playermp3/player_mp3.swf'', ''media-{[''object2''][''id'']}'', ''200'', ''20'', ''9.0.0'', ''/automne/swfobject/expressInstall.swf'', {mp3:''{[''object2''][''fields''][9][''filePath'']}/{[''object2''][''fields''][9][''filename'']}'', configxml:''/automne/playermp3/config_playermp3.xml''}, {wmode:''transparent''}, {''style'':''float:right;''});\r\n		</script>\r\n		<div id="media-{[''object2''][''id'']}" class="pmedias-audio" style="width:200px;height:20px;float:right;">\r\n			<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>\r\n		</div>\r\n	</atm-if>\r\n	<p>{[''object2''][''fields''][9][''fieldname'']} : <strong><atm-if what="{[''object2''][''fields''][9][''fileIcon'']}"><img src="{[''object2''][''fields''][9][''fileIcon'']}" alt="{[''object2''][''fields''][9][''fileExtension'']}" title="{[''object2''][''fields''][9][''fileExtension'']}" /></atm-if> {[''object2''][''fields''][9][''fileHTML'']} ({[''object2''][''fields''][9][''fileSize'']}Mo)</strong></p>\r\n	<p>{[''object2''][''fields''][8][''fieldname'']} : <strong>{[''object2''][''fields''][8][''label'']}</strong></p>\r\n	<div style="clear:both;"> </div>\r\n</div>');