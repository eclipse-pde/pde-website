<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE/API Tools";
	$pageKeywords	= "pde, api, tools";
	
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
		  <h3>About the pde-api-tools component</h3>
		  	<p>The goal of PDE API Tools is to help the user in maintaining good APIs.
		  	</p>
	    </div>
		<div class="homeitem3col">
		  <h3>Get involved!</h3>
		    <p>If you are interested in participating in the development of the PDE
				API Tools component, check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/pde-ui-build-dev">pde-dev@eclipse.org</a>.
				Chat with people there about your problems and interests, and find out
				what you can do to help.
			</p>
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>PDE-API Tools links</h6>
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
