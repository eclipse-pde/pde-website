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
	
	
	$pageTitle 		= "API Tools 3.5M2 New and Noteworthy";
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
		 <tr id="itemname">
		    <td width="30%" valign="top" align="left"><b>API compatibility options  </b></td>
		    <td width="70%" valign="top"><p>API compatibility options have been simplified: the number of options has been reduced, options have been re-grouped, and descriptions have been improved. For example, compatibility options related to type parameters are now in their own group
		      rather being duplicated in the settings for classes, interfaces, methods, and so on.
		    </p>
		      <p> A large regression test suite (with over 1600 tests) has been developed to validate API use, compatibility, and version management scenarios. </p>
		      <p><img src="../images/err-warn.png" alt="Preferences &gt; Plug-in Development &gt; API Errors/Warnings" /></p>
		    </td>
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
