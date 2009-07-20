<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE Support";
	$pageKeywords	= "pde, support";
	
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
			<a name="community"></a><h3>Community Newsgroup</h3>
			<table border="0"> 
				<tr height="10" colspan="2"></tr>
        		<tr>
        		<td width="80" align="center" valign="top" >
        			&nbsp;&nbsp;&nbsp;&nbsp;<a href="/mylyn/bugs"><img border="0" src="/pde/images/community.jpg"></a>
        		</td>
        		 <td>    
					<p>
						The PDE newsgroup is intended for the user community discussions on PDE usage and troubleshooting.
					</p>
			    </td>
				</tr>
			</table>
			 <ul>
				 <li>
			 		<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.platform.pde">Browse newsgroup posts</a> using the web interface
				</li>
			 	<li>
					<a href="news://news.eclipse.org/eclipse.platform.pde">Subscribe</a> to the newsgroup with your news reader.
					<a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">See the FAQ</a> for instructions.
				</li>
			 </ul>				    
		</div>
		
		
		<div class="homeitem3col">
			<a name="community"></a><h3>Open Source Support</h3>
			<table border="0"> 
        		<tr height="10" colspan="2"></tr>
        		<tr>
        		<td width="80" align="center" valign="center">
        			<img border="0" src="/pde/images/bug-report.png"></a>
        		</td>
		        <td>    
				        <p>
				        	Submit bugs using <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=PDE">Bugzilla web interface.</a> 
				        </p>
				        <p>
				        Please <a href="https://bugs.eclipse.org/bugs/query.cgi?product=PDE">search for duplicates</a> first! For defects provide steps 
				        on how to reproduce. For enhancements outline a use case.  Due to an overwhelming number of requests, committers prioritize 
				        critical bug fixes and framework and API improvements and cannot respond all inquiries. 
				        </p> 
			    </td>
				</tr>
			</table>
			
			<ul>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=PDE&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
				<img border=0 src="/pde/images/query.gif">&nbsp;&nbsp;View bugs with severity of normal or higher</a> 
				</li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=PDE&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
					<img border=0 src="/pde/images/query.gif">&nbsp;&nbsp;View bugs marked enhancement, minor, or trivial</a> 
				</li>
			</ul>
		</div>
		
	</div>


<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
