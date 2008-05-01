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
	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>

		<div class="homeitem3col">
		  <h3>About API Tools</h3>
		  	<p>The goal of API Tools is to help the user in maintaining good APIs.</p>
	    </div>
		<div class="homeitem3col">
		  <h3>Get involved!</h3>
		    <p>
		    	If you are interested in participating in the development of the API Tools component, 
		    	check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/pde-ui-build-dev">pde-dev@eclipse.org</a>.
				Chat with people there about your problems and interests, and find out what you can do to help.
			</p>
			<p>
				To get started you can check out the source for API Tools using either the <a href="../documents/projectSet.psf">extssh project set file</a> (if you have a bugzilla account) or the 
				<a href="../documents/pserverProjectSet.psf">pserver project set file</a> (if you do not have a bugzilla account).
			</p>
		</div>
	</div>

	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>API Tools links</h6>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="http://wiki.eclipse.org/Api_Tooling">WIKI</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
