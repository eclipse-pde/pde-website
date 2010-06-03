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
		  <h2>About the pde-build component</h2>
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
		  <h2>Resources</h2>
		  	<ul>
		  		<li>Find <a href="http://help.eclipse.org/galileo/index.jsp?nav=/4_2_0">online documentation</a> at help.eclipse.org.</li>
		  		<li>Check out the <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=14&">PDE community forum</a>.  (Also available over 
		  		<a href="http://eclipse.org/newsgroups/register.php">nntp</a>.) </li>
		  		<li><a href="http://wiki.eclipse.org/PDE/Build">PDE/Build</a> and <a href="http://wiki.eclipse.org/PDE/Build/FAQ">FAQ</a> on the Eclipse wiki.</li>
		  	</ul>
		</div>
		<div class="homeitem3col">
		  <h2>Get involved!</h2>
		    <p>If you are interested in participating in the development of the PDE
				Build component, check out the developer's mailing list: <a href="http://dev.eclipse.org/mailman/listinfo/pde-dev">pde-dev@eclipse.org</a>.
				Chat with people there about your problems and interests, and find out
				what you can do to help.
			</p>
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>PDE-Build links</h6>
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=14&">Community Forum</a></li>
				<li><a href="http://wiki.eclipse.org/PDE/Build">Wiki</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
