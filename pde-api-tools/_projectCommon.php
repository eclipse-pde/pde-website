<?php

	#*****************************************************************************
	#
	# Copyright (c) 2009 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		API Tools Team
	# Date:			January 22, 2009
	#
	# Description: This is a contributed item that provides a common left-hand-side 
	# project side bar for links etc.
	#
	#****************************************************************************
	
	$_theme = "Nova";
	$theme = "Nova";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}

	# Defined project nav bar links
	$Nav->addCustomNav("Mailing Lists", 	"http://www.eclipse.org/mail/", "_self", 1);
	$Nav->addNavSeparator("Projects", 	"index.php");
	$Nav->addCustomNav("Platform", "http://www.eclipse.org/platform/", "_self", 1);
	$Nav->addCustomNav("JDT", "http://www.eclipse.org/jdt/", "_self", 1);
	$Nav->addCustomNav("PDE", "http://www.eclipse.org/pde/", "_self", 1);
	$Nav->addCustomNav("e4", "http://www.eclipse.org/e4/", "_self", 1);
	$Nav->addCustomNav("Incubator", "http://www.eclipse.org/eclipse/incubator/", "_self", 1);
	$Nav->addNavSeparator("Development", "http://www.eclipse.org/eclipse/development/", "_self", 1);
	$Nav->addNavSeparator("PDE", "/pde/");
	$Nav->addCustomNav("PDE Build", "/pde/pde-build/", "", 1);
	$Nav->addCustomNav("PDE UI", "/pde/pde-ui/", "", 1);
	$Nav->addCustomNav("PDE API Tools", "/pde/pde-api-tools/", "", 1);
	$Nav->addCustomNav("PDE Incubator", "http://wiki.eclipse.org/PDE/Incubator", "", 1);
	$Nav->addNavSeparator("API Tools Home", "/pde/pde-api-tools/index.php");
	$Nav->addCustomNav("About API Tools", "/projects/project_summary.php?projectid=pde.apitools", "", 1);
	$Nav->addCustomNav("Milestone Plans", "http://wiki.eclipse.org/ApiTools_Milestones", "", 1);

?>
