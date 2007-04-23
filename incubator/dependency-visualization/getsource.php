<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE Incubator Dependency Visualization";
	$pageKeywords	= "pde, build, ui, plug-in, development, environment, bundle, incubator, visualization, zest";
	
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
		<h1><A HREF="http://www.eclipse.org/pde/incubator/dependency-visualization/index.php"><?= $pageTitle ?></A></h1>
		
	<p class=bar>Accessing The Source Code</p>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td width="98%">Select the CVS Perspective.<BR>
      <IMG SRC="images/selectCVS.jpg"></IMG>
    </td>
  </tr>
  <tr>
      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td width="98%">Add a repository location by right clicking on the CVS 
      Repository View and selecting Repository Location from the context menu.<BR>
      <IMG SRC="images/createRepository.jpg"></IMG>
    </td>
  </tr>
  <tr>
      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td width="98%">Create a connection profile using the following values:<BR>
      <ul>
      <li><B>Host:</B> dev.eclipse.org
      <li><b>Repository Path:</B> /cvsroot/eclipse
      <li><b>User:</b>anonymous
      <li><b>Connection type:</b>pserver
      </ul>
      <i>Leave all other values as their defaults.</I>.
      <IMG SRC="images/connectionProfile.jpg"></IMG>
    </td>
  </tr>
    <tr>
      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td width="98%">Select pde-incubator -> visualization -> plugins -> org.eclipse.pde.visualization.dependency.  
      Right click, and select "Check Out".<BR>
      <IMG SRC="images/checkout.jpg"></IMG>
    </td>
  </tr>
  </table>
		
		
		
<p>&nbsp;</p>
	</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/pde/incubator/component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>