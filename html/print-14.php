<?php //Generated on Fri, 28 Nov 2008 15:56:49 +0100 by Automne (TM) 4.0.0a1
if (!isset($cms_page_included) && !$_POST && !$_GET) {
	header('HTTP/1.x 301 Moved Permanently', true, 301);
	header('Location: http://localhost/web/fr/print-14-gestion-des-droits.php');
	exit;
}
require_once($_SERVER["DOCUMENT_ROOT"]."/cms_rc_frontend.php");
 ?><?php if (defined('APPLICATION_XHTML_DTD')) echo APPLICATION_XHTML_DTD."\n";  ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<title>Automne 4 : Gestion des droits</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" type="text/css" href="/css/print.css" />
</head>
<body>
<h1>Gestion des droits</h1>
<h3>

		
&raquo;
&nbsp;
Fonctionnalit�s
		

		
&raquo;
&nbsp;
Gestion des droits
		

</h3>



	
	
		<div class="text"><div class="text"><p>Dans cette page doit se trouver des explications sur :</p><ul><li>Droits sur les pages</li><li>Droits sur les modules</li><li>Droits sur les cat&eacute;gories</li><li>Droits d'administration</li><li>L'utilisateur &quot;anonyme&quot;</li></ul></div></div>
	
<br />
<hr />
<div align="center">
	<small>
		Derni�re mise � jour le 14/11/2008<br />
		
				Page  "Gestion des droits" (http://localhost/web/fr/14-gestion-des-droits.php)
				
<br />
		Tir� du site http://<?php echo $_SERVER["HTTP_HOST"];   ?>
	</small>
</div>
<script language="JavaScript">window.print();</script>
<?php if (SYSTEM_DEBUG && STATS_DEBUG) {view_stat(); if (VIEW_SQL && isset($_SESSION["cms_context"]) && is_object($_SESSION["cms_context"])) {save_stat();}}  ?>
</body>
</html>