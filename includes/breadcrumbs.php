<?php
	echo "<ul class='crumbs'>";
	/* get array containing each directory name in the path */
	$parts = explode("/", ($_SERVER['REQUEST_URI']));
	echo "<li><a href='http://localhost/alumni.jmls.edu/''>Home</a></li>";
	foreach ($parts as $key => $dir) {
	switch ($dir) {
	case "about": $label = "About Us"; break;	
	/* if not in the exception list above,
	use the directory name, capitalized */
	default: $label = ucwords(str_replace(array(".php","and","-"),array("","&amp;"," "),$dir)); break;
	}
	/* start fresh, then add each directory back to the URL */
	$url = "";
	for ($i = 1; $i <= $key; $i++)
	{ $url .= $parts[$i] . "/"; }
	if ($dir != "")
	echo "<li>> <a href='/$url'>$label</a></li>";
	}
	echo "</ul>";
?>