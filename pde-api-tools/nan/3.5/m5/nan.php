<?php  
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());

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
	# Date:			February 19, 2009
	#
	# Description: a new and noteworty entry for API Tools 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "API Tools 3.5M5 New and Noteworthy";
	$pageKeywords	= "api, platform, pde, tooling, tools, tags, test, testing, new, noteworthy, plan, plans";
	$pageAuthor		= "API Tools Team";
	
	#adjust the level of file nesting, our default is for a milestone entry inside a milestone for a given version
	
	include("../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		<tr> 
		    <td colspan="2"> <hr></td>
		  </tr>
		 <tr id="systemLibrary">
		    <td valign="top" align="left"><b>System library validation  </b></td>
		    <td valign="top"><p>API tools analyzes use of system libraries and creates problems when code accesses members that may not be present at runtime. For example, when a plug-in specifies a required execution environment of J2SE-1.4, but the only JRE installed in the workspace for building is J2SE-1.6, it is possible to access methods that exist in 1.6, but not in 1.4. In order for the validation to work, you must install relevant execution environment descriptions from an update site.</p>
		      <p><img src="../images/ee-validation.png" alt="API Errors/Warnings preference page" /> </p>
		      <p>The API Errors/Warnings preference page displays installed execution environments. Use the &quot;install them now&quot; hyperlink to install additional environments via the software updates dialog. </p></td>
		  </tr>
		   <tr> 
		    <td colspan="2"> <hr /> </td>
		  </tr>
		</table>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
