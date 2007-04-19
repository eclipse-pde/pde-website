<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "";
	$pageAuthor="Equinox Committers";
	$App->ExtraHtmlHeaders = '<link rel="stylesheet" type="text/css" href="/pde/incubator/pde-incubator.css">';
	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addCustomNav("Mailing Lists", "http://www.eclipse.org/mail/", "_self", 1);
	$Nav->addNavSeparator("Components", "index.php");
	$Nav->addCustomNav("Platform", "http://www.eclipse.org/platform/", "_self", 1);
	$Nav->addCustomNav("Equinox", "http://www.eclipse.org/equinox/", "_self", 1);
	$Nav->addCustomNav("JDT", "http://www.eclipse.org/jdt/", "_self", 1);
	$Nav->addCustomNav("PDE", "http://www.eclipse.org/pde/", "_self", 1);
	$Nav->addCustomNav("Incubator", "http://www.eclipse.org/eclipse/incubator", "_self", 1);
	$Nav->addNavSeparator("Development", "http://www.eclipse.org/eclipse/development/", "_self", 1);

?>