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
	# Description: This page presents all test plans used and the milestones they were used for
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "API Tools Test Plans";
	$pageKeywords	= "api, platform, pde, tooling, tools, tags, test, testing, plan, plans, 3.5, 3.4.2, 3.4.x, 3.4";
	$pageAuthor		= "API Tools Team";
	
	include("../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>This page contains all of test plans used by the API tools team during a given test pass. The test plan used
		for each test pass is available in its respective section.</p>		
		<div class="homeitem3col">
			<h2><b>3.5 Test Plans</b></h2>
			<a name="3-5_testing"></a>
			<ul>
				<li><a href="/pde/pde-api-tools/test_plans/test_plan-3.5M4.php">3.5M4</a></li>
				<li><a href="/pde/pde-api-tools/test_plans/test_plan-3.5M2.php">3.5M2</a></li>
			</ul>
			<h2><b>3.4.x Test Plans</b></h2>
			<a name="3-4-x_testing"></a>
			<ul>
				<li><a href="/pde/pde-api-tools/test_plans/test_plan-3.4.2.php">3.4.2</a></li>
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
