<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE Downloads";
	$pageKeywords	= "pde, download";
	
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
			<a name="eclipse"></a><h3>Eclipse Downloads</h3>
			<table border="0"> 
				<tr height="10" colspan="2"></tr>
        		<tr>
        		<td width="80" align="center" valign="top" >
        			&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://download.eclipse.org/eclipse/downloads/"><img border="0" src="/pde/images/downloads.jpg"></a>
        		</td>
        		 <td>    
					<p>
						PDE ships with the Eclipse SDK and can be downloaded from the Eclipse project <a href="http://download.eclipse.org/eclipse/downloads/">downloads page</a>.
					</p>
			    </td>
				</tr>
			</table>		    
		</div>
		
		
		<div class="homeitem3col">
			<a name="visualization"></a><h3>PDE Visualization</h3>
			<table border="0"> 
        		<tr height="10" colspan="2"></tr>
        		<tr>
        		<td width="80" align="center" valign="center">
        			<img border="0" src="/pde/images/community.jpg"></a>
        		</td>
		        <td>    
				        <p>
				        	The PDE Visualization component allows you to visualize dependencies.
				        </p>
				        <p>
				        <img border=0 src="/pde/images/repo.gif">&nbsp;&nbsp;<b>http://download.eclipse.org/eclipse/pde/visualization/updates</b>
				        </p>
			    </td>
				</tr>
			</table>
		</div>
		
	</div>


<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
