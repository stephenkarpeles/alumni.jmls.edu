<?php
  // set a siteroot for php includes, etc
	$siteroot = "http://localhost/alumni.jmls.edu";

	// root for pulling files from www.jmls.edu domain 
	$server_name = 'www.jmls.edu';
  $jmlsroot = "/home/jmlsed5/public_html/" . $server_name;
?>

<!DOCTYPE html>
<html class="no-js">
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">

	  <!-- Meta content populates below. See individual pages for meta info. -->
		<title><?php if(isset($tpTitle)) { echo $tpTitle; }
    else { echo 'The John Marshall Law School | Office of Alumni Relations &amp; Development '; } ?></title>
		<meta name="description" content="<?php if(isset($pgDesc)) { echo $pgDesc; }
    else { echo ''; } ?>"></meta>

	  <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php echo $siteroot ?>/css/main.css" media="screen" type="text/css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic,700italic" type="text/css">

		<!-- HTML5 Shiv -->
		<!--[if lt IE 9]>
			<script src="<?php echo $siteroot ?>/js/html5shiv.js"></script>
		<![endif]-->

		<!-- Scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo $siteroot ?>/js/modernizr.custom.min.js"></script>				
		<script src="<?php echo $siteroot ?>/js/responsiveslides.min.js"></script>
		<script src="<?php echo $siteroot ?>/js/responsive-nav.min.js"></script>
		<script src="<?php echo $siteroot ?>/js/respond.min.js"></script>	

		<!-- Form Scripts -->
		<script src="http://max.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
		<script src="http://max.jotfor.ms/static/jotform.forms.js?3.2.2243" type="text/javascript"></script>
		<script src="http://max.jotfor.ms/js/vendor/math-processor.js?v=3.2.2243" type="text/javascript"></script>
		<script type="text/javascript">
		   JotForm.setCalculations([{"resultField":28,"operands":"26,13,14","readOnly":true,"showBeforeInput":false,"equation":"[{26}/({13}*{14})]","decimalPlaces":"2","newCalculationType":true,"insertAsText":false,"showEmptyDecimals":false,"ignoreHiddenFields":false}]);</script>
		<script type="text/javascript">
		   JotForm.init(function(){
		      JotForm.setCalculationValues("Click to edit", 6);
		      JotForm.setCalculationValues("0|1|2|4", 13);
		      JotForm.setCalculationValues("0|3|2|1", 14);
		   });
		</script>

	</head>
	<body>

		<div class="container">

			<header>

				<a class="logo" href="<?php echo $siteroot ?>"></a>

				<div class="utilities">
					<ul class="horizontal login">

						<li><a href="https://securelb.imodules.com/s/395/hybrid/hybrid-interior.aspx?sid=395&gid=1&pgid=3&cid=40&returnurl=http%3a%2f%2fjmls.imodules.com%2fs%2f395%2fhybrid%2fhybrid-interior.aspx%3fsid%3d395%26gid%3d1%26pgid%3d6%26cid%3d41%26expandNav%3d0">Login <span class="arrow">&#9654;</span></a></li>
						<li><a href="https://securelb.imodules.com/s/395/hybrid/hybrid-interior.aspx?sid=395&gid=1&pgid=8&cid=46&logout=1">First Time Login <span class="arrow">&#9654;</a></li>
						
						END OF COMMENTED OUT IMODULES ISSUE -->
					</ul>

					<div class="search-wrap">
						<form action="<?php echo $siteroot ?>/search.php" method="get">
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
						<form action="<?php echo $siteroot ?>/search.php" method="get">
							<input type="search" name="q" value="">
						</form>
					</div>
					<nav class="nav-collapse">					
						<ul>
							<a class="hide-above-bp3" href="<?php echo $siteroot ?>"><li>Home</li></a>
							<a href="<?php echo $siteroot ?>/get-involved/"><li>Get Involved</li></a>
							<a href="<?php echo $siteroot ?>/stay-connected/"><li>Stay Connected</li></a>
							<a href="<?php echo $siteroot ?>/tips-and-tools/"><li>Tips &amp; Tools</li></a>
							<a href="<?php echo $siteroot ?>/support-john-marshall/"><li>Support John Marshall</li></a>
							<a href="<?php echo $siteroot ?>/contact.php"><li>Contact Us</li></a>
							<a href="http://www.jmls.edu/give" target="_blank"><li>Give Online</li></a>
							<a href="http://www.jmls.edu/"><li>JMLS Home</li></a>
							<li class="hide-above-bp3">
								<a href="">Login <span class="arrow">&#9654;</span></a> 
								<a class="first-time-login" href="">First Time Login <span class="arrow">&#9654;</span></a>
							</li>							
						</ul>				
					</nav><!-- .nav -->					
				</div><!-- .top-nav -->

			</div><!-- .container -->
		</div><!-- .nav-container -->

		<div class="container">