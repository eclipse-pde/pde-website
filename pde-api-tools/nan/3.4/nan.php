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
	# Copyright (c) 2008 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		API Tools Team
	# Date:			August 27, 2008
	#
	# Description: a new and noteworty entry for API Tools 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "API Tools 3.4 New and Noteworthy";
	$pageKeywords	= "api, platform, pde, tooling, tools, tags, test, testing, new, noteworthy, plan, plans";
	$pageAuthor		= "API Tools Team";
	
	#adjust the level of file nesting, our default is for a milestone entry inside a milestone for a given version
	
	include("../../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Eclipse 3.4 was the first release of API Tooling</p>
		<table border="0" width="80%" cellpadding="10" cellspacing="0">
		<tr> 
		    <td colspan="2"> <hr></td>
		  </tr>
		 <tr>
		    <td align="left" valign="top"><p><b>API analysis </b></p></td>
		    <td valign="top"><p>Integrated tooling assists developers with API maintenance. Developers can add special Javadoc tags to document API restrictions and specify an API baseline for binary compatibility checks.</p>
		      <p>Code is analyzed during incremental and full builds and problems are reported (quick fixes are provided where possible):</p>
		      <ul>
		        <li>Binary incompatibilities between releases </li>
		        <li>Illegal use of APIs based on restrictions </li>
		        <li>Leaking non-API types from an API package </li>
		        <li>Incorrect plug-in version numbers </li>
		        <li>Missing or incorrect @since tags</li>
		        </ul>
		      <p><img src="missing-since.png" alt="Problem and quick fix for a missing @since tag"></p>
		      <p>Problem severities can be configured for the workspace and overridden per project at a fine grained level, and specific problems can be filtered from the workspace (problem filters can be shared in CVS). </p></td>
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
