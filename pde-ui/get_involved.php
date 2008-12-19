<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Get Involved";
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
		<h1>$pageTitle</h1>
		
		<a name="communicate"></a>
		<div class="homeitem3col">
			<h3>Overview</h3>
			<p>There are many ways that you as a member of the community can get involved and contribute to the PDE Project.</p>
			<p>The first step is to let us know you are out there, check out the different ways we <a href="#communicate">communicate</a> and chat with us about your problems and interests.  You should also sign up for a <a href="https://bugs.eclipse.org/bugs/">Bugzilla</a> account and add pde-ui-inbox@eclipse.org and pde-doc-inbox@eclipse.org (or the inbox of the component you are interested in) to your watch list.</p>
			<p>Here are some ways you can contribute:
			<ol>
			<li>Participate in <a href="http://wiki.eclipse.org/BugDay">Bug Day</a> - Some bugs in our inbox are marked with the 'bugday' key word.  These are a good place to start contributing as they should require less in-depth knowledge of PDE.
			<li><a href="#contributing_fixes">Write code</a>, developing source artifacts and patches for the PDE components.</li>
			<li><a href="#filing_bugs">File bug reports</a> in <a href="https://bugs.eclipse.org/bugs/">Bugzilla</a> for defects you find.
			<li>Participate in a milestone <a href="http://wiki.eclipse.org/PDE/UI/TestPlan_3.4">test pass</a>.
			<li>Assist in bug triage by checking if reports are duplicates, out of date, missing fields, etc.  Read up on <a href="#filing_bugs">filing bugs</a> and then take a peek at our <a href="https://bugs.eclipse.org/bugs/buglist.cgi?cmdtype=runnamed&namedcmd=Inbox PDE">Inbox</a>.</li>
			</ol>
		</div>
			
			
		<a name="communicate"></a>
		<div class="homeitem3col">
			<h3>Communication</h3>
			
			<p>
			There are two developer mailing lists that are used for developer discussions.
			<ul>
			<li><a href="https://dev.eclipse.org/mailman/listinfo/pde-ui-dev">https://dev.eclipse.org/mailman/listinfo/pde-ui-dev</a></li>
			<li><a href="https://dev.eclipse.org/mailman/listinfo/pde-dev">https://dev.eclipse.org/mailman/listinfo/pde-dev</a></li> 
			</ul>
			</p>
			
			<p>
			We are active on <a href="http://wiki.eclipse.org/index.php/IRC">IRC</a> channels #eclipse and #eclipse-dev
			</p>
			
			<p>
			PDE has a <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.platform.pde">newsgroup</a> where users can ask for help.
			</p>
		</div>
			
		<a name="filing_bugs"></a>
		<div class="homeitem3col">
			<h3>Creating bug reports</h3>

			<p>
			If you encounter a bug while working with Eclipse (whether it be with PDE or elsewhere), file a report in bugzilla.  However, keep some things in mind:		
			<ul>
			<li>Search bugzilla for existing bugs like yours BEFORE you file it. Resolving duplicates is time consuming.</li>
			<li>Try to have reproducible steps.  An entry in the log file may not be enough. Some log entries are NOT bugs, and can be caused by incorrect workspace configuration, etc.</li>
			<li>Bugzilla is not a forum. Do not ask questions on bugzilla.</li>
			<li>New feature requests should be marked with a severity of ‘enhancement’.  Try to give a realistic severity to bugs, a bug with a straightforward workaround is not ‘critical’ or ‘blocker’.</li>
			</ul>
			</p>
			
			<h4>Bug Lifecycle:</h4>
			
			<ul>
			<li>NEW - All newly filed bugs start out in the NEW state.</li>
			<li>DUPLICATE/INVALID/WORKSFORME/WONTFIX - If a bug is a duplicate of another bug or if a committer decides that no code changes will be made for  the bug, the bug is resolved immediately with an explanation. Unless the bug is REOPENED for some reason, this is the end of the road.</li>
			<li>ASSIGNED - If an individual wants to take ownership of a bug (committer or contributor willing to work on it), the bug is reassigned to them, removing it from the inbox.  If there is an expected timeframe for the bug to be fixed in, set the target milestone.</li>
			<li>RESOLVED-FIXED - Bugs are marked as RESOLVED-FIXED once code that solves the issue has been checked into CVS.  If a patch was provided by a non-committer it must be marked with the IP Log flag by the committer that committed the code to CVs.  Proving a brief explanation of the fix/a list of affected files is recommended.</li>
			<li>VERIFIED - PDE UI does not explicitly verify bugs.  However, if the original reporter or a second committer confirms that a fix does in fact fix the original problem, the bug may be marked as verified.</li>
			</ul>
		</div>
			
		<a name="eclipse_setup"></a>
		<div class="homeitem3col">
			<h3>Setting Up Eclipse</h3>
					
			<p>
			We eat our own dogfood, i.e. we try to use a recent Eclipse build so that we are testing as we work.  Updating to the most recent I Build each week is preferred.  You can use <a href="http://wiki.eclipse.org/Eclipse_Project_Update_Sites">Update sites</a> to update your current build or download a <a href="http://download.eclipse.org/eclipse/downloads/">recent build</a>.
			</p>
			
			<p>
			Consider installing and using <a href="http://www.eclipse.org/mylyn/">Mylyn</a>. It can make it easier to switch between tasks.  It connects well with Eclipse, PDE and bugzilla.
			</p>
						
			<p>
			Eclipse code is written, edited and tested within Eclipse.  This is called self-hosting.  Here are the basic steps to self host:
			</p>
			
			<ol>
			<li>Setup the CVS repository:  Go to the CVS Repository Exploring Perspective.  In the CVS Repositories view you can add the repo by pasting the following (or creating a new connection and filling in the fields in the wizard).
			<pre>:pserver:<a href="mailto:anonymous@dev.eclipse.org">anonymous@dev.eclipse.org</a>:/cvsroot/eclipse</pre>
			</li>
			
			<li>Look in HEAD for the 'pde' folder.  Inside that folder is a project called 'org.eclipse.pde.releng'.  Right click and go to Check Out to copy the project to your workspace.</li>
			
			<li>Switch back to the Java perspective, inside the releng project there are a number of .psf files.  These project set files can be used to quickly check out the projects you are interested in working on.  The pde-ui-basic.psf is where most contributors should start.  Simply right click on the file and go to import team project set.  A dialog may pop up requiring you to choose a repository to use, as committers must use different settings then contributors.</li>
					
			<li>You can now edit the code in your workspace.  To test your code you must create an Eclipse Launch Configuration.  The easiest way to do so is to right click on your project, go to Debug As (or Run As) > Run-time Workbench.  Your initial Eclipse instance that you edited your code in is called the ‘host’.  The Eclipse you just launched is called the ‘target’.  Any changes you make in your host will be reflected in the target.</li>
			
		</div>		
		<a name="contributing_fixes"></a>
		<div class="homeitem3col">
			<h3>Contributing Fixes</h3>		
			<p>
			In general we follow the standard <a href="http://wiki.eclipse.org/index.php/Development_Conventions_and_Guidelines">Eclipse coding style</a>, some things such as indentation, brackets, imports, etc. are enforced by pde project preferences, so your file will be updated when you save.
			</p>
			
			<p>
			Try to make your code easily readable adding comments where necessary.  Add javadoc (alt-shift-j shortcut) to public methods and classes, even if they are not API.
			</p>
			
			<p>
			Once you have created a fix and tested it, you will need it committed to CVS.  To do so you must create a patch and attach it to the bug report.  A committer will review and commit the fix.
			</p>
			
			<p>
			To create a patch, select all of the changed projects in the Package Explorer view. Right click and go to Team > Synchronize, this should open up the Synchronize View. In the Synchronize View, make sure there are no conflicting changes and that all of your changes follow the coding guidelines. Then select your outgoing changes, right click and go to Create Patch... In the dialog, select a destination for the patch (it is best to include the bug number in the file name and use the extension .patch), double check all your changes are included, then hit OK. Attach the created patch to the bug report.
			</p>
			
			<p>
			We must follow the <a href="http://www.eclipse.org/projects/dev_process/ip-process-in-cartoons.php">Eclipse IP Process</a>.  Small contributions will be reviewed and marked with the IP Log flag.  Larger contributions will require additional steps.
			</p>
			
			<p>
			Some useful links:
			</p>
		</div>	
		<a name="links"></a>
		<div class="homeitem3col">
			<h3>Additional Information</h3>		
			
			<p> If you are interested in helping out, feel free to <a href="#communicate">contact us</a> and ask questions.  You can also check out the following resources:
			<ul>
			<li><a href="http://wiki.eclipse.org/The_Official_Eclipse_FAQs#Getting_Started">General Eclipse FAQs</a>
			<li><a href="http://wiki.eclipse.org/Development_Resources">Eclipse developer resources</a>
			<li><a href="http://wiki.eclipse.org/Category">Wiki pages on contributing</a>
			</ul>
			</p>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
		<h6>Contents</h6>
			<ul>
				<li><a href="#overview">Overview</a></li>
				<li><a href="#communicate">Communication</a></li>
				<li><a href="#filing_bugs">Creating Bug Reports</a></li>
				<li><a href="#eclipse_setup">Setting Up Eclipse</a></li>
				<li><a href="#contributing_fixes">Contributing Fixes</a></li>
				<li><a href="#links">Additional Information</a></li>	
			</ul>
		</div>
		
		<div class="sideitem">
		<h6>Quick Links</h6>
			<ul>
			    <li><a href="http://www.eclipse.org/pde/pde-ui">Home</a></li>
				<li><a href="resources/user.php">Articles and Examples</a></li>
				<li><a href="resources/dev.php">Development Resources</a></li>				
				<li><a href="dev_plans/r3_5/plan.php">3.5 Dev Plan</a></li>
				<li><a href="committers/committers.php">Meet the Team</a></li>
				<li><a href="get_involved.php">Get Involved!</a></li>
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

