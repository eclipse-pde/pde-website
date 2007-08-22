<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE UI";
	$pageKeywords	= "PDE/UI, PDE, plug-in, feature, fragment, extension point, development, tools, rcp, product, Eclipse";
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
			<a name="about"></a>
			<h3>About the PDE UI Component</h3>
			<p>The PDE UI component provides a comprehensive set of tools to create, develop, test, debug and deploy Eclipse   plug-ins, fragments, features, update sites and RCP products. </p>
			<p> PDE UI also provides comprehensive OSGi tooling, which makes it an ideal environment   for component programming, not just Eclipse plug-in development.</p>
			<p>Some of the PDE UI tools include:</p>
			<ul>
				<li>Form-Based Manifest Editors - multi-page editors that centrally manage all manifest files of a plug-in or feature. </li>
				<li>RCP Tools - wizards and a form-based editor that allow you to define, brand, test and export products to multiple platforms. </li>
				<li>New Project Creation Wizards - create a new plug-in, fragment, feature, feature patch and update sites.</li>
				<li>Import Wizards - import plug-ins and features from the file system.</li>
				<li>Export Wizards  - wizards that build, package and export plug-ins, fragments and products with a single click. </li>
				<li>Launchers - test and debug Eclipse applications and OSGi bundles. </li>
				<li>Views - PDE provides views that help plug-in developers inspect different aspects   of their development environment.</li>
			    <li>Miscelllaneous Tools   - wizards to externalize and clean up manifest files.</li>
			    <li>Conversion Tools - wizard to convert a plain Java project or plain JARs into a plug-in project. </li>
			    <li>Integration with JDT  - plug-in manifest files participate in Java search and refactoring. </li>
			 </ul>
	  </div>
		<div class="homeitem3col">
			<a name="user"></a>
			<h3>User Resources</h3>
			<p>
				New to PDE? Check out the <a href="resources/user.php">User Resources</a>.
			</p>
		</div>	  
		<div class="homeitem3col">
			<a name="dev"></a>
			<h3>Development Resources</h3>
			<p>
				If you are already a PDE UI developer, check out the <a href="resources/dev.php">Development Resources</a>.
			</p>
		</div>			
		<div class="homeitem3col">
			<a name="happening"></a>
			<h3>What&#8217;s Happening?</h3>
			<p><b>R3.4 Development</b></p>
			<p>Areas of focus during the Eclipse 3.4 development cycle:</p>
			<ul>
			  <li>API Tools</li>
		      <li>Bundle/Module Development Tools</li>
		      <li>Editor Enhancements</li>
		      <li>Bundle Management</li>
		      <li>Provisioning Tooling</li>
		      <li>User Assistance Tooling</li>
	      </ul>
		</div>
	  <div class="homeitem3col">
			<a name="team"></a>
			<h3>Meet the Team </h3>
	      <p>Visit the <a href="committers/committers.php">Committers</a> page for a list of committers and active contributors on the PDE UI component.</p>
	  </div>		
   </div>	
   
   	<div id="rightcolumn">
		<div class="sideitem">

			<h6>Quick Links</h6>
			<ul>
			    <li><a href="http://www.eclipse.org/pde/pde-ui/">Home</a></li>
				<li><a href="#about">About the PDE UI Component</a></li>
				<li><a href="#user">User Resources</a></li>
				<li><a href="#dev">Development Resources</a></li>				
				<li><a href="#happening">What&lsquo;s Happening?</a></li>
				<li><a href="#team">Meet the Team</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
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

