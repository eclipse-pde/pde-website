<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE UI User Resources";
	$pageKeywords	= "PDE/UI, PDE, plug-in, development, tools, Eclipse, committer, contributor";
	$pageAuthor		= "PDE/UI Team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
ob_start();
?>
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<a name="articles"></a>
			<h3>Articles</h3>
			<p>The following PDE UI related articles are available:</p>
			<ul>
				<li><a href="http://www.eclipse.org/articles/Article-PDE-does-plugins/PDE-intro.html">PDE Does Plug-ins</a> - 
				Chronicles the creation, development, testing, building, and deployment of a simple &quot;Hello World&quot; plug-in using PDE tools.</li>
				<li><a href="http://www.eclipse.org/pde/pde-ui/articles/cheat_sheet_dev_workflow/index.html">Recommended Work Flow for Cheat Sheet Development</a> - 
				Demonstrates the recommended work flow for doing cheat sheet development using User Assistance and PDE tools.</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<a name="examples"></a>
			<h3>Examples</h3>
			<p>The following PDE UI related examples are available:</p>
			<ul>
				<li><a href="http://www.eclipse.org/pde/pde-ui/examples/eclipsecon_2007/org.eclipse.pde.examples_1.1.0.jar">Eclipse Links View Plug-in 1.1.0</a> - EclipseCon 2007 PDE tutorial example.  
				A plug-in that contributes a fully functional view providing Eclipse related links that can be opened up in an internal or external browser.
The view contains three sections:
(1) Project Links - Contains a tree viewer that models the Eclipse project, sub-projects and components; 
(2) Useful Links - Contains useful Eclipse hyperlinks;
(3) Search - Contains a Google search box to enter search queries.</li>
			<li>
			The following are the plug-in needed for the Eclipse Forum India tutorial:
			<p><a href="eclipse_forum_india/org.eclipse.browser_1.0.0.jar">Starter Plug-in</a></p>
			<p><a href="eclipse_forum_india/org.eclipse.browser.cheatsheets_2.0.0.jar">Cheat Sheets</a></p>
			</li> 
			</ul>
		</div>		
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
		<h6>Contents</h6>
			<ul>
				<li><a href="#articles">Articles</a></li>
				<li><a href="#examples">Examples</a></li>		
			</ul>
		</div>
		<div class="sideitem">
		<h6>Quick Links</h6>
			<ul>
			    <li><a href="http://www.eclipse.org/pde/pde-ui">Home</a></li>
				<li><a href="resources/user.php">Articles and Examples</a></li>
				<li><a href="resources/dev.php">Development Resources</a></li>				
				<li><a href="dev_plans/r3_5/plan.php">3.5 Dev Plan</a></li>
				<li><a href="committers/committers.php">Meet the Team</a></li>
				<li><a href="get_involved.php">Get Involved!</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/PDE_UI">PDE UI Wiki</a></li>
			</ul>
		</div>
	</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>	