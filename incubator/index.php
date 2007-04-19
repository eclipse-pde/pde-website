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

			<div class="homeitem3col">
			<H3>Mission Statement</H3>
<p>
Mission
</p>
</div>
			<p class=bar>Work Areas</p>
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
	<tr>
      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
      <td width="98%"><a href="aspects/index.php" target="_top"><b>Dependency Visualization</b></a><br>
    Issues around Aspect-oriented programming, load-time weaving and modularity.</td>
  </tr>
  </table>

<p>For an understanding of how work is carried out in the incubators, check out
  the <a href="howto.php">How to Incubate</a> guide.</p>

			<p class=bar>Old Work Areas</p>
<p>See the <a href="archive">Equinox Incubator Archive</a> for details of previous
  work areas.</p>

			<p class=bar>What's New</p>
<p><b>Nov 10, 2006</b> - <IMG src="http://www.eclipse.org/images/new.gif"
	width="31" height="14"> Andrew Niefer has been added as a committer and has started working on a new launcher story for Eclipse.  
	See the <a href="http://wiki.eclipse.org/index.php/Equinox_Launcher">wiki</a> for more information.</p>
</p>

			<p class=bar>Committers</p>
      <p>The following people are committers on the Equinox Incubator:</p>
      <ul>
        <li>Jennifer Fogell, IBM PvC</li>
        <li>Olivier Gruber, IBM Research</li>
		<li>Ted Habeck, IBM Research</li>
        <li>BJ Hargrave, IBM PvC</li>
        <li>Simon Kaegi, IBM Rational</li>
        <li>Peter Kriens, aQute</li>
        <li>Martin Lippert, it-agile</li>
        <li>Jeff McAffer, IBM Rational (Project lead)</li>
        <li>Andrew Niefer, IBM Rational</li>
        <li>Pascal Rapicault, IBM Rational</li>
        <li>Tom Watson, IBM PvC</li>
        <li>Matthew Webster, IBM Hursley</li>
        <li>Ikuo Yamasaki, NTT Corporation</li>
      </ul>
      
<p>&nbsp;</p>
	</div>

<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/global-links.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/equinox/incubator/component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
