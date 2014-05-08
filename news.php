<!-- Meta content goes below. Write content between quote marks. -->
<?php
$tpTitle="News | The Office of Alumni Relations &amp; Development";
// $pgDesc="";
// $pgKeywords="";
?>

<!-- Header -->
<?php include('includes/header.php'); ?>

	<!-- Begin Content -->
	<section>
		<div class="grid-wrap">								
			<div class="grid-col bp3-col-3-4 pull-right-above-bp1">	

				<!-- Main -->			
				<article class="main">	

				  <!-- Breadcrumbs -->		
				  <?php include('includes/breadcrumbs.php'); ?>

					<h1 class="page-header">John Marshall in the News</h1>
					<p class="featured-text">Some content will go here introducing the contact section, and perhaps some of the people below, or what the best way is for people to get in touch.</p>

					<div class="grid-wrap">
						<div class="grid-col bp3-col-1-2">
						  <?php
								$XMLFILE = "http://news.jmls.edu/feed/";
								$TEMPLATE = "http://test.jmls.edu/testalumni/includes/news-feed-all.php";
								$MAXITEMS = "10";
								include("rss2html.php");
							?>
						</div>

					</div>					

				</article><!-- .main -->

			</div><!-- .grid-col -->			
						
			<div class="grid-col bp3-col-1-4">
				<!-- Sidebar Wrap Top -->
				<?php include('includes/sidebar/sidebar-wrap-top.php'); ?>
				<!-- Sidebar Wrap Bottom -->
				<?php include('includes/sidebar/sidebar-wrap-bottom-alt.php'); ?>					
			</div><!-- .grid-col -->						

		</div><!-- .grid-wrap -->	
	</section>

<!-- Footer -->
<?php include('includes/footer.php'); ?>	