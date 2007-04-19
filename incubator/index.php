<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE Incubator";
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
		  <h3>About the PDE Incubator</h3>
		  	<p>
			</p>
		</div>
		</p>
		<div class="homeitem3col">
		  <h3>PDE Components</h3>
			<p>
				The PDE subproject is broken down into two components. Each component operates 
				like a project unto its own, with its own set of committers, bug categories 
				and mailing lists.
			</p>
			<table width="100%" border="0">
			<tr> 
				<td width="20%" valign="top"><b>Name</b></td>
				<td width="82%"><b>Description</b></td>
			</tr>
			<tr> 
				<td width="20%" valign="top"><a href="http://www.eclipse.org/pde/pde-build">Build</a></td>
				<td width="82%">PDE Build</td>
			</tr>
			<tr> 
				<td width="20%" valign="top"><a href="http://www.eclipse.org/pde/pde-ui">UI</a></td>
				<td width="82%">PDE User Interface</td>
			</tr>
			</table>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
