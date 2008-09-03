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
	# Description: 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "API Tools Project Test Plan";
	$pageKeywords	= "api, platform, pde, tooling, tools, tags, test, testing, plan, plans, 3.5";
	$pageAuthor		= "API Tools Team";
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>Testers</h3>
			<p>Committers: Darin Wright, Michael Rennie, Olivier Thomann</p>
			<p>Community: Anyone who wants to help</p>
		</div>			
		<div class="homeitem3col">
			<a name="TOP"></a>
			<h3>Test Grid</h3>
			<div align="center">
			<table width="80%" border="1">
			  <tr> 
			    <td><b>Feature</b></td>
			    <td><b>Darin Wright</b></td>
			    <td><b>Michael Rennie</b></td>
			    <td><b>Olivier Thomann</b></td>
			  </tr>
			  <tr> 
			    <td><a href="#APISETUP">API Setup</a></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
				<td><div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#APIPROFILES">API Profiles</a></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#BUILDING">Building</a></td>
				<td> <div align="center"></div></td>
			    <td> <div align="center"></div></td>
				<td><div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#QUICKFIXES">Quick Fixes</a></td>
			    <td><div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
				<td> <div align="center"></div></td>
				<td> <div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#FILTERS">Filters</a></td>
			    <td><div align="center"></div></td>
			    <td><div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			    <td><div align="center"></div></td>
			  </tr>
			  <tr> 
			    <td><a href="#PREFERENCES">Preferences</a></td>
				<td><div align="center"></div></td>
			    <td><div align="center"></div></td>
			    <td> <div align="center"><img src="/eclipse/debug/images/ok.gif" width="10" height="10"></div></td>
			  </tr>
			</table>
			</div>
		</div>
		<div class="homeitem3col">
			<h3>Feature Testing</h3>
			<a name="APISETUP"></a>
			<h4>API Tools Setup</h4>
				<ol>
				<li> General
					<ul>
						<li> setup wizard should have a help topic</li>
					</ul>
				</li>
				<li> Setup API Tooling
				<ul><li> wizard with no selections in workspace and with selections; if the there are selected projects in the workspace that can have API tooling setup on them, they should be preselected in the wizard 
				</li><li> try canceling the wizard
				</li><li> try selecting / unselecting all to make sure the finish and preview button work as expected
				</li><li> try selecting a project and viewing a preview
				</li><li> try selecting projects that do and do not have a component.xml file
				</li><li> ensure tags are added correctly to files (from the component.xml)
				</li></ul>
				</li></ol>
				<p><a href="#TOP">Back to top</a><br><hr></p>
			<a name="APIPROFILES"></a>
			<h4>API Profiles</h4>
				<ol><li> General
				<ul><li> changing / editing / removing of the default profile should ask you to build when the Ok button is pressed on the preference page
				</li><li> the page and wizard should have help topics
				</li></ul>
				</li><li> Create a new API profile
				<ul><li> try completing the wizard and canceling it
				</li><li> try renaming a profile (accepting and canceling the process)
				</li><li> try changing the location of the new profile and resetting the profile
				</li></ul>
				</li><li> Edit an API profile
				
				<ul><li> try completing the wizard and canceling it
				</li><li> try renaming a profile (accepting and canceling the process)
				</li></ul>
				</li><li> Deleting an API profile
				<ul><li> try deleting a profile 
				</li><li> try deleting select profiles
				</li><li> try deleting all profiles
				</li></ul>
				</li><li> Default Profile
				<ul><li> try selecting a new default profile
				
				</li><li> try editing the default profile (rename, should still be the default after rename)
				</li><li> try deleting the default profile
				</li></ul>
				</li><li> Change the warning level for missing default profiles
				</li></ol>
				<p><a href="#TOP">Back to top</a><br><hr></p>
			<a name="BUILDING"></a>
			<h4>Building</h4>
				<ol><li> Full Build
				<ul><li> Run a full build on one project
				<ul><li> markers should be updated
				
				</li><li> filters should be respected
				</li><li> progress messages should be correct
				</li><li> time to build should be resonable
				</li></ul>
				</li><li> Run a full build on the workspace
				<ul><li> builder should only run on 'API aware' projects
				</li><li> markers should be updated
				</li><li> filters should be respected
				</li><li> progress messages should be correct
				
				</li><li> time to build should be resonable
				</li></ul>
				</li></ul>
				</li><li> Incremental Building
				<ul><li> Change a dependent type
				<ul><li> builder should run for dependent's
				</li><li> markers should be updated for dependent's
				</li><li> filters should be respected on type and dependent's
				</li><li> time to build should be reasonable
				</li></ul>
				
				</li></ul>
				</li></ol>
				<p><a href="#TOP">Back to top</a><br><hr></p>
			<a name="QUICKFIXES"></a>
			<h4>Quick Fixes</h4>
				<ol><li> Usage problems
				</li><li> Compatibility problems
				</li><li> Version problems
				</li><li> Since Tag problems
				</li><li> API Leak problems
				</li></ol>
				<p><a href="#TOP">Back to top</a><br><hr></p>
			<a name="FILTERS"></a>
			<h4>Filters</h4>
				<ol><li> General
				<ul><li> Property page should have a help topic
				</li><li> Remove button should enable / disable properly
				</li></ul>
				</li><li> Add Filters
				<ul><li> Use the quick fix 
				</li><li> Drag &amp; Drop in an existing filter file
				
				</li><li> Check out a filter file from CVS
				</li><li> First added filter should cause filter file to be created immediately
				</li><li> Other added filters should be written to filter file immediately
				</li></ul>
				</li><li> Remove Filters
				<ul><li> Use the property page
				<ul><li> Try removing one or more filters by individually selecting filters or their parent file.
				</li><li> Ensure rmeoved filters are removed (apply change or click Ok to close the property page, and reopen)
				</li><li> Canceling deleting filters should make no change
				
				</li><li> Removing filters should rebuild the project (incremental)
				</li><li> Removing last filter should remove the filter file immediately
				</li></ul>
				</li><li> Drag &amp; Drop a filter file out of the project
				</li><li> Over-ride and update from CVS
				</li></ul>
				</li><li> Share Filters
				<ul><li> Commit filter to CVS and check it out in another workspace
				</li><li> Should update filtered problems on next rebuild (unless the filter store for the project in question is already loaded)
	
				</li></ul>
				</li></ol>
				<p><a href="#TOP">Back to top</a><br><hr></p>
			<a name="PREFERENCES"></a>
			<h4>Preferences</h4>
				<ol><li> General
				<ul><li> The API Errors/Warnings page should have a help topic
				</li></ul>
				</li><li> Workspace
				<ul><li> Change any number of preferences and apply the page (via the Apply button or the Ok button)
				</li><li> Change any number of preferences and hit 'Restore Default'
				
				</li><li> Change any number of preferences and cancel the page
				</li><li> Change all preferences using the 'Set all to' buttons (and apply / cancel / restore defaults)
				</li><li> Use the link to configure project specific settings
				</li></ul>
				</li><li> Per-Project
				<ul><li> Try turning project specific settings on / off
				</li><li> Change any number of preferences and apply the page (via the Apply button or the Ok button)
				</li><li> Change any number of preferences and hit 'Restore Default'
				</li><li> Change any number of preferences and cancel the page
				
				</li><li> Change all preferences using the 'Set all to' buttons (and apply / cancel / restore defaults)
				</li><li> Use the link to configure workspace settings
				</li></ul>
				</li></ol>
				<p><a href="#TOP">Back to top</a><br><hr></p>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>