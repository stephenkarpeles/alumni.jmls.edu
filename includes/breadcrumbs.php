<?php
	echo "<ul class='crumbs'>";
	/* get array containing each directory name in the path */
	$parts = explode("/", ($_SERVER['REQUEST_URI']));
	echo "<li><a href='/'>Home</a></li>&nbsp;&nbsp;&raquo;&nbsp;";
	foreach ($parts as $key => $dir) {
	switch ($dir) {
	/* list any manual changes to breadcrumb text below */
	case "hall-of-distinction.php": $label = "Hall of Distinction"; break;	
	case "board-of-directors.php": $label = "Board of Directors"; break;	
	case "resources.php": $label = "JMLS Resources"; break;	
	case "establishing-a-named-endowment.php": $label = "Establishing a Named Endowment"; break;
	case "contribute-to-an-academic-program.php": $label = "Contribute to an Academic Program"; break;
	case "memorials-gifts-in-tribute.php": $label = "Memorials and Gifts in Tribute"; break;
	case "gifts-of-appreciated-securities.php": $label = "Gifts of Appreciated Securities"; break;
	case "hotels.php": $label = "Hotel Discounts"; break;
	case "contact.php": $label = "Contact Us"; break;
	case "faq.php": $label = "FAQs"; break;
	case "404.php": $label = "Page Not Found"; break;
	/* if not in the exception list above,
	use the directory name, capitalized */
	default: $label = ucwords(str_replace(array(".php","and","-"),array("","&amp;"," "),$dir)); break;
	}
	/* start fresh, then add each directory back to the URL */
	$url = "";
	for ($i = 1; $i <= $key; $i++)
	{ $url .= $parts[$i] . "/"; }
	if ($dir != "")
	echo "<li class='crumb-item'>&nbsp;<a href='/$url'>$label <span class='crumb-tail'>&nbsp;&raquo;&nbsp;</span></a></li>";
	}
	echo "</ul>";
?>