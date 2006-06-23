<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE/Build";
	$pageKeywords	= "pde, build";
	
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
		  <h3>About the pde-build component</h3>
		  	<p>The goal of PDE Build is to facilitate the automation of plug-in build
				processes. Essentially, PDE Build produces Ant scripts based on development-time
				information provided by, for example, the plugin.xml and build.properties
				files. The generated Ant scripts, can fetch the relevant projects from
				a CVS repository, build jars, Javadoc, source zips, put everything together
				in a format ready to ship and send it out to a remote location (e.g., a
				local network or a downloads server).
		  	</p>
	    </div>
		</p>
		<div class="homeitem3col">
		  <h3>Development Resources</h3>
			<p>
				For more detailed information, check out the <a href="dev.php">Development Resources</a>.
			</p>
		</div>
		<div class="homeitem3col">
		  <h3>Get involved!</h3>
		    <p>If you are interested in participating in the development of the PDE
				Build component, check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/pde-build-dev">pde-build-dev@eclipse.org</a>.
				Chat with people there about your problems and interests, and find out
				what you can do to help.
			</p>
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>PDE-Build links</h6>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="dev.php">Development Resources</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
