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
		  	<p>
				The Plug-in Development Environment (PDE) provides tools to create, develop, test, debug, build and deploy Eclipse plug-ins, fragments, features, update sites and RCP products. </p>
		  	<p>PDE also provides comprehensive OSGi tooling, which makes it an ideal environment for component programming, not just Eclipse plug-in development.</p>
		  	<p><strong><em>In PDE we do tooling, but our business is people! </em></strong></p>
		</div>
		
		<table border="0" cellpadding="5">
					<tr height=9>	 
	          		<tr>
						<td width=20></td>
						<td><a href="http://download.eclipse.org/eclipse/downloads/"><img border=0 src="images/downloads.gif"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><font size=+1><a href="http://download.eclipse.org/eclipse/downloads/">Download</a></font></td>
								</tr>
								<tr>
					          		<td>PDE ships with the Eclipse SDK and can be downloaded from the Eclipse project downloads page. 
					          		</td>
					          	</tr>
							</table>
						</td>
	          		</tr>
	          		
	          		<tr>
						<td width=20></td>
						<td><a href="/pde/support"><img border=0 src="images/community.jpg"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><font size=+1><a href="/pde/support">Support</a></font></td>
								</tr>
								<tr>
					          		<td>Find support and interact with users and developers.</td>
					          	</tr>
							</table>
						</td>
	          		</tr>

	          		<tr>
						<td width=20></td>
						<td><a href="http://wiki.eclipse.org/PDE/Contributor_Guide"><img border=0 src="images/reference.png"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><font size=+1><a href="http://wiki.eclipse.org/PDE/Contributor_Guide">Contributing to PDE</a></font></td>
								</tr>
								<tr>
					          		<td>The development of PDE is driven by the community in a transparent manner. Read our contributor guide wiki page and get involved.</td>
					          	</tr>
							</table>
						</td>
	          		</tr>
            
            <tr>
						<td width=20></td>
						<td><a href="http://wiki.eclipse.org/PDE"><img border=0 src="images/downloads.jpg"></a></td>
						<td>
							<table border="0" cellpadding="0">
								<tr>
				          			<td><font size=+1><a href="http://wiki.eclipse.org/PDE">Wiki</a></font></td>
								</tr>
								<tr>
					          		<td>Visit the wiki page for release planning, test plans, user guides and more.</td>
					          	</tr>
							</table>
						</td>
	          		</tr>
	         	</table>
		</p>
		
		<div class="homeitem3col">
		  <h2>PDE Components</h2>
			<p>
				The PDE subproject consists out of UI, API Tools and Build. We also have an Incubator component where we can develop non-SDK features.
			</p>
			<table width="100%" border="0">
			<tr> 
				<td width="20%" valign="top"><b>Name</b></td>
				<td width="82%"><b>Description</b></td>
			</tr>
			<tr> 
				<td width="20%" valign="top"><a href="#pdeui">PDE UI</a></td>
				<td width="82%">Models, builders, editors and more to faciliate plug-in development in the Eclipse IDE.</td>
			</tr>
			<tr> 
				<td width="20%" valign="top"><a href="#pdeapitools">PDE API Tools</a></td>
				<td width="82%">Eclipse IDE and build process integrated tooling to maintain API.</td>
			</tr>
			<tr> 
				<td width="20%" valign="top"><a href="#pdebuild">PDE Build</a></td>
				<td width="82%">Ant based tools and scripts to automate build processes.</td>
			</tr>
			<tr> 
				<td width="20%" valign="top"><a href="http://wiki.eclipse.org/PDE/Incubator">PDE Incubator</a></td>
				<td width="82%">Development of new tools that are not ready to be added to the Eclipse SDK</td>
			</tr>
			
			</table>
		</div>
		
        <div class="homeitem3col" id="pdeui">
		  <h2>PDE UI</h2>
			<p>The PDE UI component provides a comprehensive set of tools to create, develop, test, debug and deploy Eclipse   plug-ins, fragments, features, update sites and RCP products. </p>
			<p> PDE UI also provides comprehensive OSGi tooling, which makes it an ideal environment   for component programming, not just Eclipse plug-in development.</p>
			<p>Here is a small list of what PDE UI provides to the Eclipse SDK:</p>
			<ul>
				<li>Form-Based Manifest Editors - multi-page editors that centrally manage all manifest files of a plug-in or feature. </li>
				<li>RCP Tools - wizards and a form-based editor that allow you to define, brand, test and export products to multiple platforms. </li>
				<li>New Project Creation Wizards - create a new plug-in, fragment, feature, feature patch and update sites.</li>
				<li>Import Wizards - import plug-ins and features from the file system.</li>
				<li>Export Wizards  - wizards that build, package and export plug-ins, fragments and products with a single click. </li>
				<li>Launchers - test and debug Eclipse applications and OSGi bundles. </li>
				<li>Views - PDE provides views that help plug-in developers inspect different aspects   of their development environment.</li>
			    <li>Miscellaneous Tools - wizards to externalize and clean up manifest files.</li>
			    <li>Conversion Tools - wizard to convert a plain Java project or plain JARs into a plug-in project. </li>
			    <li>Integration with JDT  - plug-in manifest files participate in Java search and refactoring. </li>
				<li>User Assistance Tools - Editors and tools for developing user help and other UA documents.</li>
				<li>Declarative Services Tools - Editors and validation for OSGi declarative services.</li>
		</div>
        <div class="homeitem3col" id="pdebuild">
		  <h2>PDE Build</h2>
			<p>The goal of PDE Build is to facilitate the automation of plug-in build processes. Essentially, PDE Build produces Ant scripts based on development-time information provided by, for example, the plugin.xml and build.properties files. The generated Ant scripts, can fetch the relevant projects from a CVS repository, build jars, Javadoc, source zips, put everything together in a format ready to ship and send it out to a remote location (e.g., a local network or a downloads server). </p>

                        <p>While PDE Build is still being maintained, it is not actively enhanced. For new builds, you can also consider other build systems like Maven Tycho or Gradle.</p>
                    
		</div>
        <div class="homeitem3col" id="pdeapitools">
		  <h2>PDE API Tools</h2>
			<p>API tooling will assist developers in API maintenance by reporting API defects such as binary incompatibilities, incorrect plug-in version numbers, missing or incorrect @since tags, and usage of non-API code between plug-ins. 
			  	The tooling will be integrated in the Eclipse SDK and will be used in the automated build process. 
			  	<br>
			  	Specifically, the tooling is designed to do the following:
				</p>
                <ul>
				    <li> Identify binary compatibility issues between two versions of a software component or product.</li>
				    <li> Update version numbers for plug-ins (bundles) based on the Eclipse versioning scheme.</li>
				    <li> Update @since tags for newly added classes, interfaces, methods, etc.</li>
				    <li> Provide new javadoc tags and code assist to annotate types with special restrictions.</li>
				   	<li> Leverage existing information (in MANIFEST.MF) to define the visibility of packages between bundles.</li>
				    <li> Identify usage of non-API code between plug-ins.</li>
				    <li> Identity leakage of non-API types into API.</li>
                </ul>         
            
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
