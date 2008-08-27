<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	

$App = new App();	
$Nav = new Nav();	
$Menu = new Menu();		

include($App->getProjectCommon());  

	#*****************************************************************************
	#
	# Copyright (c) 2007 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		API Tools Team
	# Date:			April 23, 2008
	#
	# Description: This is the new main page for the API Tools team website
	#
	#
	#****************************************************************************
	
	$pageTitle 		= "API Tools";
	$pageKeywords	= "pde, api, tools";
	$pageAuthor		= "API Tools Team";
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML	

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>

		<div class="homeitem3col">
		  <h3>Introduction to API Tools</h3>
		  	<p>  API tooling will assist developers in API maintenance by reporting API defects such as binary incompatibilities, incorrect plug-in version numbers, missing or incorrect @since tags, and usage of non-API code between plug-ins. 
			  	The tooling will be integrated in the Eclipse SDK and will be used in the automated build process. 
			  	<br>
			  	Specifically, the tooling is designed to do the following:
				<ol>
				    <li> Identify binary compatibility issues between two versions of a software component or product.</li>
				    <li> Update version numbers for plug-ins (bundles) based on the Eclipse versioning scheme.</li>
				    <li> Update @since tags for newly added classes, interfaces, methods, etc.</li>
				    <li> Provide new javadoc tags and code assist to annotate types with special restrictions.</li>
				   	<li> Leverage existing information (in MANIFEST.MF) to define the visibility of packages between bundles.</li>
				    <li> Identify usage of non-API code between plug-ins.</li>
				    <li> Identity leakage of non-API types into API.</li>
				</ol>
			</p>
	    </div>
		<div class="homeitem3col">
		  <h3>Get involved!</h3>
		    <p>
		    	If you are interested in participating in the development of the API Tools component, 
		    	check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/pde-ui-build-dev">pde-dev@eclipse.org</a>.
				Chat with people there about your problems and interests, and find out what you can do to help.
			</p>
			<p>
				To get started you can check out the source for API Tools using either the <a href="../pde-api-tools/documents/projectSet.psf">extssh project set file</a> (if you have a bugzilla account) or the 
				<a href="../pde-api-tools/documents/pserverProjectSet.psf">pserver project set file</a> (if you do not have a bugzilla account).
			</p>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>

	EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
