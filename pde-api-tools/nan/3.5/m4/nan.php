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
	
	
	$pageTitle 		= "API Tools 3.5M4 New and Noteworthy";
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
		 <tr id="api.noextend">
		    <td width="30%" valign="top" align="left"><b>@noextend restriction supported on interfaces</b></td>
		    <td width="70%" valign="top"><p>API tooling now supports two restrictions on interfaces - <code>@noimplement</code> and <code>@noextend</code>. This allows an interface to be extended when it is not to be implemented directly. For example, a client may be permitted to subclass an existing implementation of a <code>@noimplement</code> interface and extend the base interface with extra function.</p>
		      <p>Component owners should decide where to add <code>@noextend</code> tags on existing interfaces, as this was previously implicit. To maintain the API contracts specified in 3.4, <code>@noextend</code> tags can be added to all interfaces specified as <code>@noimplement</code>. In some cases the <code>@noextend</code> restriction can be omitted, as clients that extend and implement a <code>@noimplement</code> interface will still be flagged with errors. However, if you would like to reserve the right to add constants to an API interface in the future, you must add the <code>@noextend</code> tag. This is because adding a field to an interface is binary incompatible if clients can extend or implement an interface (see <a href="http://wiki.eclipse.org/Evolving_Java-based_APIs_2#Evolving_API_Interfaces">Evolving API Interfaces</a>).<br />
		    </p></td>
		  </tr>
		  <tr>
		    <td colspan="2"><hr />    </td>
		  </tr>
		  <tr id="api.breakage">
		    <td width="30%" valign="top" align="left"><b>Selective  API breakage</b></td>
		    <td width="70%" valign="top"><p>You can now be alerted to breaking API changes even if you have incremented the major version of your plug-in. The first time you change a plug-in's API in an incompatible way, problems inform you to increment the major version of your plug-in. Once you increment the major version of your plug-in, API tooling allows additional breaking API changes without warning. Use the new preference <strong>Report API breakage even if authorized by major version increment</strong> to enable this feature (on the <strong>Plug-in Development &gt; API Errors/Warnings</strong> preference page, on the top of the <strong>API Compatibility</strong> tab). When this preference is enabled you must use API problem filters to selectively permit incompatible API changes.</p>
		      <p><img src="../../images/api-breakage-option.png" alt="Preference to report API breakage regardless of plug-in version numbers"/></p></td>
		  </tr>
		  <tr>
		    <td colspan="2"><hr />    </td>
		  </tr>
		  <tr id="api.ee.validation">
		    <td valign="top" align="left"><b>Execution environment validation </b></td>
		    <td valign="top"><p>API tooling now warns you when you accesses code in a system library that is not part of a plug-in's required execution environment. For example, if your plug-in's target environment is J2SE-1.3, but you are developing against a J2SE-1.5 JRE, it can be easy to unintentionally reference types and methods that only exist in J2SE-1.4 or J2SE-1.5. Such references are now flagged with problems. You can adjust the severity of this problem via the <strong>Invalid references in system libraries</strong> option on the <strong>API Use</strong> tab of the <strong>Plug-in Development &gt; API Errors/Warnings</strong> preference page. </p>
		      <p><img src="../images/ee-validation.png" alt="Illegal access warning"/></p></td>
		  </tr>
		  <tr>
		    <td colspan="2"><hr />    </td>
		  </tr>
		  <tr id="api.stale.filters">
		    <td valign="top" align="left"><b>Stale API problem filters </b></td>
		    <td valign="top"><p>API tooling creates warnings for problem filters that are no longer needed. API problem filters often become stale because they are used to filter known incompatibilities between two specific releases. A quick fix is available to remove stale filters. </p>
		    <p><img src="../images/filter-quick-fix.png" alt="Quick fix to remove stale filters"/></p></td>
		  </tr>
		  <tr>
		    <td colspan="2"><hr />    </td>
		  </tr>
		  <tr id="api.ant.tasks">
		    <td valign="top" align="left"><b>API tooling Ant tasks  </b></td>
		    <td valign="top"><p>Ant tasks to perform API analysis and generate simple HTML reports are now available. These are the same Ant tasks used in the Eclipse SDK build. Documentation for each task is available in the <strong>Reference</strong> section of the <strong>Plug-in Development Environment Guide</strong>.</p>
		    <p><img src="../images/ant-tasks.png" alt="Ant task documentation"/> </p></td>
		  </tr>
		  <tr>
		    <td colspan="2"><hr />    </td>
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
