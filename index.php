<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE";
	$pageKeywords	= "pde, build, ui, plug-in, development, environment, bundle";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>

		<div class="homeitem3col">
		  <h3>About the PDE Subproject</h3>
		  	<p>
				The Plug-in Development Environment (PDE) provides tools to create, develop, test, debug, build and deploy Eclipse plug-ins, fragments, features, update sites and RCP products. </p>
		  	<p>PDE also provides comprehensive OSGi tooling, which makes it an ideal environment for component programming, not just Eclipse plug-in development.</p>
		  	<p>PDE is built atop the <a href="http://www.eclipse.org/platform/">Platform</a>  and <a href="http://www.eclipse.org/jdt/">JDT</a>, and ships as part of the Eclipse SDK. </p>
		  	<p><strong><em>In PDE we do tooling, but our business is people! </em></strong></p>
		</div>
		</p>
		<div class="homeitem3col">
		  <h3>PDE Components</h3>
			<p>
				The PDE subproject is broken down into three main components, Build, UI and API Tooling.  Each of
				these components operate like a project unto its own, with its own set of committers, bug categories 
				and mailing lists.  There are two additional components in PDE, Doc which handles the help documentation 
				and Incubator which develops non-SDK features.
			</p>
			<table width="100%" border="0">
			<tr> 
				<td width="20%" valign="top"><b>Name</b></td>
				<td width="82%"><b>Description</b></td>
			</tr>
			<tr> 
				<td width="20%" valign="top"><a href="http://www.eclipse.org/pde/pde-build">PDE Build</a></td>
				<td width="82%">Ant based tools and scripts to automate build processes</td>
			</tr>
			<tr> 
				<td width="20%" valign="top"><a href="http://www.eclipse.org/pde/pde-ui">PDE UI</a></td>
				<td width="82%">Models, builders, editors and more to faciliate plug-in development in the Eclipse IDE.</td>
			</tr>
			<tr> 
				<td width="20%" valign="top"><a href="http://www.eclipse.org/pde/pde-api-tools">PDE API Tools</a></td>
				<td width="82%">Eclipse IDE and build process integrated tooling to maintain API</td>
			</tr>
			<tr> 
				<td width="20%" valign="top"><a href="http://wiki.eclipse.org/PDE/Incubator">PDE Incubator</a></td>
				<td width="82%">Development of new tools that are not ready to be added to the Eclipse SDK</td>
			</tr>
			<tr> 
				<td width="20%" valign="top">PDE Doc</td>
				<td width="82%">Help documentation for PDE, shared by the other components.</td>
			</tr>
			
			</table>
		</div>
		<div class="homeitem3col">
		  <h3>Getting Involved</h3>
			<p>
				The development of PDE is driven by the community in an open and transparent manner.  By getting involved with PDE, you can help influence the future of the platform improve the quality of Eclipse.  There are many ways to assist, filing bug reports, contributing fixes, producing new features, participating in milestone testing, etc.  Each PDE component has its own bug triage rules, coding guidelines, and testing format, however a good place to start is the PDE UI <a href="pde-ui/get_involved.php">Getting Involved</a> page.
			</p>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
