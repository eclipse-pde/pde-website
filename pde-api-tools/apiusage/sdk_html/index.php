<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	

	#*****************************************************************************
	#
	# Copyright (c) 2009 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		API Tools Team
	# Date:			February 9, 2009
	#
	# Description: This is an entry page for API use scan example reports
	#
	#
	#****************************************************************************

$App 	= new App();	
$Nav	= new Nav();	
$Menu 	= new Menu();		

include($App->getProjectCommon()); 
   
$pageTitle 		= "PDE/API Tools API Usage";
$pageKeywords	= "PDE, pde, API, Java, plan, planning, JDT, development, tools, ide, Eclipse, usage, report, reporting, graph";
$pageAuthor		= "The PDE Team";

ob_start();
?>
		
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<?php include("index.html"); ?>
	</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
