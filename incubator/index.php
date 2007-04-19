<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE Incubator";
	$pageKeywords	= "pde, build, ui, plug-in, development, environment, bundle, incubator";
	
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

			<p class=bar>Mission Statement</p>
			<p>
The goal of the PDE Incubator is to do experimental, forward-looking work outside of the constraints of the 
regular release cycles. While not necessarily targetting the next Eclipse release, our work in the 
incubator is always focused on delivering new capabilities into the development stream.  
In particular, the PDE Incubator will focus on tools and technologies to assist with 
plug-in development providing plug-in developers more cognitive 
support for the tasks they perform every day.<BR>

In PDE we do tooling, but our business is people!

</p>

			<p class=bar>Work Areas</p>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td width="98%"><a href="index.php" target="_top"><b>Dependency Visualization</b></a><br>
    Views designed to assist with plug-in dependency analysis tasks.</td>
  </tr>
  </table>

<p>For an understanding of how work is carried out in the incubators, check out
  the <a href="howto.php">How to Incubate</a> guide.</p>

		
		
			<p class=bar>Committers</p>
      <p>The following people are committers on the PDE Incubator:</p>
      <ul>

      </ul>
      
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
