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
			<a name="community"></a><h3>Communication</h3>
			<table border="0"> 
				<tr height="10" colspan="2"></tr>
        		<tr>
                    <td width="80" align="center" valign="top" >
        			&nbsp;&nbsp;&nbsp;&nbsp;<img border="0" src="/pde/images/community.jpg"><
                        
                    <p>
                    The <a href="https://dev.eclipse.org/mailman/listinfo/pde-dev">pde-dev</a> mailing list can be used for development discussion and questions about contributing.
                    </p>

        	    </td>
				</tr>
			</table>
		</div>
		
		
		<div class="homeitem3col">
			<a name="github"></a><h3>Reporting Bugs</h3>
			<table border="0"> 
        		<tr height="10" colspan="2"></tr>
        		<tr>
        		<td width="80" align="center" valign="center">
        			<img border="0" src="/pde/images/bug-report.png"></a>
        		</td>
		        <td>    
				        <p>
				        	Submit bugs using <a href="https://github.com/eclipse-pde/eclipse.pde/issues">GitHub web interface.</a> 
				        </p>
				        <p>
				        Please search for duplicates first! For defects provide steps 
				        on how to reproduce. For enhancements outline a use case.  Due to an overwhelming number of requests, committers prioritize 
				        critical bug fixes and framework and API improvements and cannot respond all inquiries. 
				        </p> 
			    </td>
				</tr>
			</table>
			
			<ul>
				<li><a href="https://github.com/eclipse-pde/eclipse.pde/issues">
				<img border=0 src="/pde/images/query.gif">&nbsp;&nbsp;View open bugs</a> 
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
