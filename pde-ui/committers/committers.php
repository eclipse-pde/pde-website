<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE/UI Committers and Contributors";
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
?><title>PDE/UI Committers and Contributor</title>
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
			<a name="committers"></a>
			<h2>PDE/UI Active Committers</h2>
			<table width="100%" border="0">
              <tr>
              <td width="33%"><p align="center"><img src="curtis_windatt.png" alt="Curtis Windatt" width="200" height="280"></p>
                  <p align="center"><strong><a href="http://eclipse-debug.blogspot.com/">Curtis Windatt</a></strong></p>
				   <p align="center">PDE Lead, IBM Winnipeg</p>
                  <p align="center">&nbsp;</p></td>
			    </td>
			    <td width="33%"><p align="center"></p>
                  <p align="center"><strong><a href="http://eclipse-debug.blogspot.com/">Michael Rennie</a></strong></p>
				   <p align="center">IBM Winnipeg</p>
                  <p align="center">&nbsp;</p></td>
			    </td>
			    <td width="33%"><p align="center"></p>
                  <p align="center"><strong>Daniel Megert</strong></p>
				   <p align="center">IBM Zurich</p>
                  <p align="center">&nbsp;</p></td>
			    </td>
			    
			  </tr>
		    </table>

			<a name="inactive_committers"></a>
			<h2>PDE/UI Inactive Committers</h2>
			<table width="100%" border="0">
			 <tr>
			    <td width="33%"><p align="center"><img src="jacek_pospychala.jpg" alt="Jacek Pospychala" width="200" height="280"></p>
			      <p align="center"><strong>Jacek Pospychala</strong></p>
			       <p align="center">IBM Poland</p>
			      <p align="center">&nbsp;</p></td>
				</td>
				<td width="33%"><p align="center"><img src="benjamin_cabe.jpg" alt="Benjamin Cabe" width="200" height="280"></p>
                  <p align="center"><strong><a href="http://blog.benjamin-cabe.com/">Benjamin Cabe</a></strong></p>
				   <p align="center">Anyware Technologies</p>
                  <p align="center">&nbsp;</p></td>
			    </td>
			  </tr>
			     <td width="33%"><p align="center"><img src="ankur_sharma.jpg" alt="Ankur Sharma" width="200" height="280"></p>
			      <p align="center"><strong><a href="http://blog.ankursharma.org/">Ankur Sharma</a></strong></p>
			      <p align="center">IBM Bangalore</p>
			      <p align="center">&nbsp;</p></td>
                <td width="33%"><p align="center"><img src="chris_aniszczyk.png" alt="Chris Aniszczyk" width="200" height="280"></p>
                  <p align="center"><strong><a href="http://eclipsesource.com/blogs/author/zx/">Chris Aniszczyk</a></strong></p>
                  <p align="center">Red Hat</p>               
                  <p align="center">&nbsp;</p>
                </td>
			  </tr>
			<tr>
                <td width="33%"><p align="center"><img src="brian_bauman.png" alt="Brian Bauman" width="200" height="280"></p>
                  <p align="center"><strong>Brian Bauman</strong></p>
                  <p align="center">IBM Austin Labs</p>
                  <p align="center">&nbsp;</p>
                </td>
               <td width="33%"><p align="center"><img src="dejan_glozic.gif" alt="Dejan Glozic" width="200" height="280"></p>
                  <p align="center"><strong><a href="http://dejan-glozic.blogspot.com">Dejan Glozic</a></strong></p>
                  <p align="center">Father of PDE, IBM Toronto Lab</p>
                  <p align="center">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td width="33%"><p align="center"><img src="janek_lasocki_biczysko.gif" alt="Janek Lasocki-Biczysko" width="200" height="280"></p>
                  <p align="center"><strong>Janek Lasocki-Biczysko</strong></p>
                  <p align="center">&nbsp;</p>
				  <p align="center">&nbsp;</p>
 				</td>
                <td width="33%"><p align="center"><img src="wassim_melhem.png" alt="Wassim Melhem" width="200" height="280"></p>
                  <p align="center"><strong><a href="http://wassim-melhem.blogspot.com">Wassim Melhem</a></strong></p>
                  <p align="center">Embarcadero Technologies Inc.</p>
                  <p align="center">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td width="33%"><p align="center"><img src="mike_pawlowski.gif" alt="Mike Pawlowski" width="200" height="280"></p>
                  <p align="center"><strong>Mike Pawlowski</strong></p>
                  <p align="center">IBM Toronto Lab</p>               
			    </td>
			     <td width="33%"><p align="center"><img src="darin_wright.jpg" alt="Darin Wright" width="240" height="280"></p>
                  <p align="center"><strong><a href="http://eclipse-debug.blogspot.com/">Darin Wright</a></strong></p>
				   <p align="center">New Relic</p>
                  <p align="center"><em>and his dog Java, PDE Mascot</em></p>
			    </td>
                </tr>
          </table>
			<a name="contributors"></a>
			<h2>PDE/UI Contributors</h2>
			<table width="100%" border="0">
              <tr>
                <td width="33%"><p align="center"><img src="adam_archer.PNG" alt="Adam Archer" width="200" height="280"></p>
                  <p align="center"><strong>Adam Archer</strong></p>
                  <p align="center">&nbsp;</p></td>
                <td width="33%"><p align="center"><img src="noam_chitayat.png" alt="Noam Chitayat" width="200" height="280"></p>
                  <p align="center"><strong>Noam Chitayat</strong></p>
                  <p align="center">&nbsp;</p></td>
            </tr>
            <tr>                  
			    <td width="33%"><p align="center"><img src="patrick_dempsey.jpg" alt="Patrick Dempsey" width="200" height="280"></p>
                  <p align="center"><strong>Patrick Dempsey</strong></p>
                  <p align="center">&nbsp;</p></td>				
			    <td width="33%"><p align="center"><img src="joern_dinkla.png" alt="Joern Dinkla" width="200" height="280"></p>
                  <p align="center"><strong>Joern Dinkla</strong></p>
                  <p align="center">&nbsp;</p></td>
            </tr>
            <tr>                  	
                <td width="33%"><p align="center"><img src="peter_friese.JPG" alt="Peter Friese" width="200" height="280"></p>
                  <p align="center"><strong><a href="http://www.peterfriese.de/">Peter Friese</a></strong></p>
                  <p align="center">&nbsp;</p></td>
                <td width="33%"><p align="center"><img src="stephan_herrmann.jpg" alt="Stephan Herrmann" width="200" height="280"></p>
                  <p align="center"><strong>Stephan Herrmann</strong></p>
                  <p align="center">&nbsp;</p></td>
			  </tr>
			  <tr>
			    <td width="33%"><p align="center"><img src="les_jones.jpg" alt="Les Jones" width="200" height="280"></p>
                  <p align="center"><strong><a href="http://www.persiflage-n-piffle.com/blog/">Les Jones</a></strong></p>
                  <p align="center">&nbsp;</p></td>
			  	<td width="33%"><p align="center"><img src="mystery.png" alt="Brock Janiczak" width="200" height="280"></p>
                  <p align="center"><strong>Brock Janiczak</strong></p>
                  <p align="center">&nbsp;</p></td>
            </tr>
            <tr>                  
                <td width="33%"><p align="center"><img src="jakub_jurkiewicz.jpg" alt="Jakub Jurkiewicz" width="200" height="280"></p>
                  <p align="center"><strong>Jakub Jurkiewicz</strong></p>
                  <p align="center">&nbsp;</p></td>
			  <td width="33%"><p align="center"><img src="blazej_kroll.jpg" alt="Blazej Kroll" width="200" height="280"></p>
                  <p align="center"><strong>Blazej Kroll</strong></p>
                  <p align="center">&nbsp;</p></td>
            </tr>
            <tr>                  
				<td width="33%"><p align="center"><img src="bartosz_michalik.PNG" alt="Bartosz Michalik" width="200" height="280"></p>
                  <p align="center"><strong><a href="http://eclipser-blog.blogspot.com/">Bartosz Michalik</a></strong></p>
                  <p align="center">&nbsp;</p></td>
                <td width="33%"><p align="center"><img src="rafael_oliveira.jpg" alt="Rafael Oliveira" width="200" height="280"></p>
                  <p align="center"><strong>Rafael Oliveira</strong></p>
                  <p align="center">&nbsp;</p></td>
			  </tr>
          </table>
			<a name="past_committers"></a>
			<h2>PDE/UI Past Committers</h2>
			<table width="100%" border="0">
              <tr>
                <td width="33%"><p align="center"><img src="konrad_kolosowski.gif" alt="Konrad Kolosowski" width="200" height="280"></p>
                  <p align="center"><strong>Konrad Kolosowski</strong></p>
                </td>
                <td width="33%"><p align="center"><img src="cherie_wong.jpg" alt="Cherie Wong" width="200" height="280"></p>
                  <p align="center"><strong>Cherie Wong</strong></p>
                </td>
            </tr>
            <tr>                
				 <td width="33%"><p align="center"><img src="ian_bull.PNG" alt="Ian Bull" width="200" height="280"></p>
                  <p align="center"><strong><a href="http://www.ianbull.com/">Ian Bull</a></strong></p>
                </td>
              </tr>
          </table>
          </div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

