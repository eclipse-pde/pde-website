<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE/Build - Development Resources";
	$pageKeywords	= "pde, build, development, resources";
	
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
		  <h3>Bugs</h3>
		  <p>
		      <ul>
   			    <li><a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&priority=P1&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=PDE&version=&component=Build&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time" target="_top">Priority 1</a></li>
        		<li><a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=PDE&component=Build&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&newqueryname=&order=Reuse%2Bsame%2Bsort%2Bas%2Blast%2Btime" target="_top" >New, Assigned and Reopened</a> </li>
		        <li><a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=7&votes=&chfield=resolution&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=PDE&version=&component=Build&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time" target="_top">Resolved in the last week</a></li>
	      </ul>
		  </p>
	    </div>
		</p>
		<div class="homeitem3col">
		  <h3>Documents</h3>
		  <p>
 		     <ul>
 		       <li><a href="doc/usage.html">Using pde build properties and features, as up to date for 3.0 M2</a></li>
 		       <li><a href="http://dev.eclipse.org/conventions.html">coding conventions</a></li>
 		     </ul>
		  </p>
		</div>
		<div class="homeitem3col">
		  <h3>Plug-ins</h3>
		  <p>The PDE Build component consists of the following plug-ins: 
 		     <ul>
    		    <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.pde.build" target="_top">org.eclipse.pde.build</a></li>
    		  </ul>
		  </p>
		</div>
		<div class="homeitem3col">
		  <h3>Mailing Lists</h3>
		  <p><a href="http://dev.eclipse.org/mailman/listinfo/pde-build-dev">pde-build-dev@eclipse.org</a> 
          (<a href="mailto:pde-build-dev@eclipse.org">post</a>, <a href="http://dev.eclipse.org/mhonarc/lists/pde-build-dev/maillist.html">archives</a>)
          </p>
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>PDE-Build links</h6>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="dev.html">Development Resources</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
