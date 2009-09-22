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
			<a name="gettingstarted"></a><h3>Getting Started</h3>
			<table border="0"> 
				<tr height="10" colspan="2"></tr>
        		<tr>
        		<td width="80" align="center" valign="top" >
        			&nbsp;&nbsp;&nbsp;&nbsp;<a href="/mylyn/bugs"><img border="0" src="/pde/images/community.jpg"></a>
        		</td>
        		 <td>    
					<p>
						The PDE forums is intended for the user community discussions on PDE usage and troubleshooting.
					</p>
			    </td>
				</tr>
			</table>
			 <ul>
			 	<li>
			 		<a href="http://wiki.eclipse.org/PDE/Contributor_Guide">PDE Contributor Guide</a>.
				</li>
				 <li>
			 		<a href="http://wiki.eclipse.org/RCP_FAQ">Browse RCP FAQ</a>.
				</li>
			 </ul>				    
		</div>
		
		<div class="homeitem3col">
			<a name="books"></a><h3>Books</h3>
			<ul>
				 <li>
			 		<a href="http://www.eclipsercp.org">Eclipse Rich Client Platform</a> by Chris Aniszczyk, Jeff McAffer and Jean-Michel Lemieux (December 2009)
				</li>
				<li>
			 		<a href="http://www.qualityeclipse.com/">Eclipse Plug-ins</a> by Eric Clayberg and Dan Rubel (December 2008)
				</li>
			 </ul>		
		</div>
		
		
		<div class="homeitem3col">
			<a name="publications"></a><h3>Selected Publications</h3>
			<ul>
				 <li>
			 		<a href="https://www.ibm.com/developerworks/opensource/library/os-eclipse-api-tools/">Browse newsgroup posts</a> by Chris Aniszczyk (September 2008)
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
