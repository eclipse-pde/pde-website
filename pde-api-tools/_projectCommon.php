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
	$Nav->addCustomNav("About API Tools", "/projects/project_summary.php?projectid=pde.apitools", "", 1);
	$Nav->addNavSeparator("API Tools Home", "/pde/pde-api-tools/index.php");
	$Nav->addCustomNav("Milestone Plans", "http://wiki.eclipse.org/ApiTools_Milestones", "", 1);
	$Nav->addNavSeparator("PDE Home", "/pde/");
	$Nav->addCustomNav("PDE Build", "/pde/pde-build/", "", 1);
	$Nav->addCustomNav("PDE Incubator", "http://wiki.eclipse.org/PDE/Incubator", "", 1);
	$Nav->addCustomNav("PDE UI", "/pde/pde-ui/", "", 1);
?>