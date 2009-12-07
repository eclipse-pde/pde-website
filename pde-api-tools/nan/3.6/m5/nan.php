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
	# Date:			December 7, 2009
	#
	# Description: a new and noteworty entry for API Tools 
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "API Tools 3.6M5 New and Noteworthy";
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
		  <tr>
		    <td width="30%" valign="top" align="left"><a name="usescanpatterntab" id="usescanpatterntab"></a><b>UI to provide search patterns for API use scans</b></td>
		    <td width="70%" valign="top"><p>You can now add search patterns to be used during an API use scan to constrain what references are reported. This
		    feature is available in UI and in our Ant tasks.</p>
		      <p><img src="pattern.png" alt="Patterns tab" /></p>
		      <p>The following wizard allows you to craft a variety of patterns.</p>
		      <p><img src="pattern-wizard.png" alt="Create new patterns using the convenient wizard" /> </p>
		      </td>
		  </tr>
		  <tr>
		    <td colspan="2"><hr />
		    </td>
		  </tr>
		  <tr>
		    <td width="30%" valign="top" align="left"><a name="archivepattern" id="archivepattern"></a><b>Filter references from embedded archives</b></td>
		    <td width="70%" valign="top"><p>During an API use scan you can now explicitly filter references from embedded archives within bundles by
		    providing an archive pattern to the use scan. This feature is available in the UI and in our Ant tasks.</p>
		      <p><img src="archive.png" alt="Archive pattern" /></p>
		      <p>The following wizard allows you to easily craft an archive pattern.</p>
		      <p><img src="archive-wizard.png" alt="Create a new archive pattern using the convenient wizard" /> </p>
		      </td>
		  </tr>
		  <tr>
		    <td colspan="2"><hr />
		    </td>
		  </tr>
		  <tr>
		    <td width="30%" valign="top" align="left"><a name="meta-data" id="meta-data"></a><b>Additional use scan information is available</b></td>
		    <td width="70%" valign="top"><p>You can now provide comments to accompany an API use scan, which will show up in 
		    the reports as additional information along with the scan parameters for reference. This feature is available in the UI and in our Ant tasks.</p>
		      <p><img src="description.png" alt="Scan description" /></p>
		      <p>The resulting report could look like the following.</p>
		      <p><img src="scandetails.png" alt="Sample use scan details report header." /> </p>
		      </td>
		  </tr>
		  <tr>
		    <td colspan="2"><hr />
		    </td>
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
