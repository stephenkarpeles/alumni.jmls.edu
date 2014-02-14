<?php
	echo "<ul class='crumbs'>";
	/* get array containing each directory name in the path */
	$parts = explode("/", ($_SERVER['REQUEST_URI']));
	foreach ($parts as $key => $dir) {
	switch ($dir) {
	/* list any manual changes to breadcrumb text below */
	case "alumni.jmls.edu": $label = "Home"; break;	
	case "hall-of-distinction.php": $label = "Hall of Distinction"; break;	
	case "resources.php": $label = "JMLS Resources"; break;	
	case "establishing-a-named-endowment.php": $label = "Establishing a Named Endowment"; break;
	case "contribute-to-an-academic-program.php": $label = "Contribute to an Academic Program"; break;
	/* if not in the exception list above,
	use the directory name, capitalized */
	default: $label = ucwords(str_replace(array(".php","and","-"),array("","&amp;"," "),$dir)); break;
	}
	/* start fresh, then add each directory back to the URL */
	$url = "";
	for ($i = 1; $i <= $key; $i++)
	{ $url .= $parts[$i] . "/"; }
	if ($dir != "")
	echo "<li class='crumb-item'> <a href='/$url'>$label <span class='crumb-tail'>&nbsp;&raquo;&nbsp;</span></a></li>";
	}
	echo "</ul>";
?>