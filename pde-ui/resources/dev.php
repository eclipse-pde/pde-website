<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE UI Development Resources";
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
			<h3>Plug-ins</h3>
			<a name="plugins"></a>
			<p>The PDE UI component is comprised of the following plugins:</p>
			
			<p>We have <a href="http://wiki.eclipse.org/PSF">PSF</a> files for the <a href="pde-ui.basic.psf">basic plug-ins</a> and <a href="pde-ui-all.psf">all plug-ins</a> in PDE UI.  Note that in November of 2008 the PDE plug-ins were moved from the CVS root to the <pre>/pde</pre> folder.</p>
			
			<provider id="org.eclipse.team.cvs.core.cvsnature">
			<p>The basic PDE UI plug-ins:</p>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ui/org.eclipse.pde.ui">org.eclipse.pde.ui</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ui/org.eclipse.pde.core">org.eclipse.pde.core</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/doc/org.eclipse.pde.doc.user">org.eclipse.pde.doc.user</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ui/org.eclipse.pde.ui.tests">org.eclipse.pde.ui.tests</a></li>
			</ul>
			<p>User Assistance editors and tools:</p>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ua/org.eclipse.pde.ua.core">org.eclipse.pde.ua.core</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ua/org.eclipse.pde.ua.tests">org.eclipse.pde.ua.tests</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ua/org.eclipse.pde.ua.ui">org.eclipse.pde.ua.ui</a></li>
			</ul>
			<p>Declarative Services editors and tools:</p>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ds/org.eclipse.pde.ds.core">org.eclipse.pde.ds.core</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ds/org.eclipse.pde.ds.tests">org.eclipse.pde.ds.tests</a></li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ds/org.eclipse.pde.ds.ui">org.eclipse.pde.ds.ui</a></li>
			</ul>
			<p>Additional PDE UI plug-ins:</p>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ui/org.eclipse.pde.junit.runtime">org.eclipse.pde.junit.runtime</a> - For testing Eclipse plug-ins</li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ui/org.eclipse.pde.runtime">org.eclipse.pde.runtime</a> - Provides information about the OSGi State</li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ui/org.eclipse.pde.ui.templates">org.eclipse.pde.ui.templates</a> - Template support for new projects and extensions</li>
				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/pde/ui/org.eclipse.ui.views.log">org.eclipse.ui.views.log</a> - The standard Eclipse error log</li>
			</ul>
			
			<p>The <em>org.eclipse.pde.ui.tests</em> plug-in requires the following plugins:</p>

			<ul>        
          		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.test.performance">org.eclipse.test.performance</a></li>
                <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.test.performance.win32">org.eclipse.test.performance.win32</a> (Windows only)</li>
 			</ul>

		</div>
		<div class="homeitem3col">
			<h3>Test Plans</h3>
			<a name="testing"></a>
			<ul>
			  <li><a href="http://wiki.eclipse.org/PDE/UI/TestAreas">PDE Functional Testing Areas</a></li>
			  <li><a href="http://wiki.eclipse.org/PDE/UI/TestPlan_3.4">3.4/3.5 Test Plan</a></li>
			  <li><a href="testing/PDEScenarios3_3.html">3.3 Test Plan</a></li>
		      <li><a href="testing/PDEScenarios3_2.html">3.2 Test Plan</a></li>
		      <li><a href="testing/PDEScenarios3_1.html">3.1 Test Plan</a></li>
		      <li><a href="testing/PDEScenarios3_0.html">3.0 Test Plan</a></li>
		      <li><a href="testing/PDEScenarios.html">2.1 Test Plan</a></li>
		  </ul>
	  </div>
		<div class="homeitem3col">
			<h3>Bugs</h3>
			<a name="bugs"></a>
			<ul> 
                <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=PDE&component=UI&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					All Open Bugs</a></li>
                <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Eclipse&product=PDE&component=UI&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=7d&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					Bugs Resolved Last Week</a></li>					
 			</ul>

		</div>
		
		<div class="homeitem3col">
			<h3>Mailing List</h3>
			<a name="mail"></a>
		<ul>
        	<li><a
 href="http://dev.eclipse.org/mailman/listinfo/pde-ui-dev">pde-ui-dev@eclipse.org</a> 
           (<a href="mailto:pde-ui-dev@eclipse.org">post</a>, <a
 href="http://dev.eclipse.org/mhonarc/lists/pde-ui-dev/maillist.html">archives</a>)</li>
      	</ul>
		</div>
	<div class="homeitem3col">
			<a name="involved"></a>
			<h3>Get Involved!</h3>
		  <p>If you are interested in participating in the development of the
			PDE UI component, check out the developer's mailing list: <a
				href="http://dev.eclipse.org/mailman/listinfo/pde-ui-dev">pde-ui-dev@eclipse.org</a>.
			Chat with people there about your problems and interests, and find
		  out what you can do to help.</p>
	</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">

			<h6>Quick Links</h6>
			<ul>
			    <li><a href="http://www.eclipse.org/pde/pde-ui/">Home</a></li>
				<li><a href="#plugins">Plug-ins</a></li>
				<li><a href="#testing">Test Plans</a></li>
				<li><a href="#bugs">Bugs</a></li>
				<li><a href="#mail">Mailing Lists</a></li>		
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