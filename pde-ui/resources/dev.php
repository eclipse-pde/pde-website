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
			<h3>FAQ</h3>
			<a name="faq"></a>
			<p>Coming soon ...</p>
		</div>
		<div class="homeitem3col">
			<h3>Plug-ins</h3>
			<a name="plugins"></a>
			<p>The PDE UI component is made up of the following plugins:</p>
			
			 <ul>        
          		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.pde">org.eclipse.pde</a></li>
          		<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.pde.core">org.eclipse.pde.core</a></li>
                <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.pde.doc.user">org.eclipse.pde.doc.user</a></li>
                <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.pde.junit.runtime">org.eclipse.pde.junit.runtime</a></li>
                <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.pde.runtime">org.eclipse.pde.runtime</a></li>
                <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.pde.ui">org.eclipse.pde.ui</a></li>
                <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.pde.ui.tests">org.eclipse.pde.ui.tests</a></li>
 			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Documents</h3>
			<a name="documents"></a>
			<p>Coming soon ...</p>
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
 href="http://dev.eclipse.org/mailman/listinfo/pde-ui-dev">platform-team-dev@eclipse.org</a> 
           (<a href="mailto:pde-ui-dev@eclipse.org">post</a>, <a
 href="http://dev.eclipse.org/mhonarc/lists/pde-ui-dev/maillist.html">archives</a>)</li>
      	</ul>
		</div>
		
	</div>

	<div id="rightcolumn">
		<div class="sideitem">

			<h6>Quick Links</h6>
			<ul>
			    <li><a href="http://www.eclipse.org/pde/pde-ui/">Home</a></li>
				<li><a href="#faq">FAQ</a></li>
				<li><a href="#plugins">Plug-ins</a></li>
				<li><a href="#documents">Documents</a></li>
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