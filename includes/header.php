<!doctype html>
<html class="no-js">
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">

	  <!-- Meta content populates below. See individual pages for meta info. -->
		<title><?php if(isset($tpTitle)) { echo $tpTitle; }
    else { echo 'The John Marshall Law School | Office of Alumni Relations &amp; Development '; } ?></title>
		<meta name="description" content="<?php if(isset($pgDesc)) { echo $pgDesc; }
    else { echo ''; } ?>"></meta>
		<meta name="keywords" content="<?php if(isset($pgKeywords)) { echo $pgKeywords; }
    else { echo ''; } ?>"></meta>

	  <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="http://localhost/alumni.jmls.edu/css/main.css" media="screen" type="text/css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic,700italic" type="text/css">

		<!-- HTML5 Shiv -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->

		<!-- Scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://localhost/alumni.jmls.edu/js/modernizr.custom.min.js"></script>			
		<script src="http://localhost/alumni.jmls.edu/js/responsiveslides.min.js"></script>
		<script src="http://localhost/alumni.jmls.edu/js/responsive-nav.min.js"></script>
		<script src="http://localhost/alumni.jmls.edu/js/respond.min.js"></script>						

	</head>
	<body>

		<div class="container">

			<header>

				<a class="logo" href="http://localhost/alumni.jmls.edu"></a>

				<div class="utilities">
					<ul class="horizontal login">
						<li><a href="">Login <span class="arrow">&#9654;</span></a></li>
						<li><a href="">First Time Login <span class="arrow">&#9654;</a></li>
					</ul>

					<div class="search-wrap">
						<form action="search.php" method="get">
            	<input type="text" class="search-bar" name="q" value="Search" onfocus="this.value==this.defaultValue?this.value='':null" /> 
            	<input class="search-submit" type="submit" value="Search" />
            </form>
					</div>
				</div>

			</header><!-- .header -->
		</div><!-- .container -->

		<div class="nav-container">
			<div class="container">
				<div class="top-nav">
					<div class="search-toggle">
						<form>
							<input type="search" placeholder="Search">
						</form>
					</div>
					<nav class="nav-collapse">					
						<ul>
							<a href="http://localhost/alumni.jmls.edu/get-involved/"><li>Get Involved</li></a>
							<a href="http://localhost/alumni.jmls.edu/stay-connected/"><li>Stay Connected</li></a>
							<a href="http://localhost/alumni.jmls.edu/tips-and-tools/"><li>Tips &amp; Tools</li></a>
							<a href=""><li>Support John Marshall</li></a>
							<a href=""><li>Contact Us</li></a>
							<a href=""><li>Give Online</li></a>
							<a href=""><li>JMLS Home</li></a>
						</ul>				
					</nav><!-- .nav -->					
				</div><!-- .top-nav -->

			</div><!-- .container -->
		</div><!-- .nav-container -->

		<div class="container">