<!-- Header -->
<?php include('includes/header.php'); ?>

	<!-- Begin Content -->
	<section>
		<div class="grid-wrap">								
			<div class="grid-col bp3-col-3-4 pull-right-above-bp1">	

				<!-- Main -->			
				<article class="main">				
					<h1 class="page-header">Search</h1>

					<!-- Google Custom Search -->
					<div id='cse' style='width: 100%;'>Loading</div>
					<script src='//www.google.com/jsapi' type='text/javascript'></script>
					<script type='text/javascript'>
						function parseQueryFromUrl () {
						var queryParamName = "q";
						var search = window.location.search.substr(1);
						var parts = search.split('&');
						for (var i = 0; i < parts.length; i++) {
						  var keyvaluepair = parts[i].split('=');
						  if (decodeURIComponent(keyvaluepair[0]) == queryParamName) {
							return decodeURIComponent(keyvaluepair[1].replace(/\+/g, ' '));
						  }
						}
						return '';
					  }
					  google.load('search', '1', {language: 'en', style: google.loader.themes.DEFAULT});
					  var _gaq = _gaq || [];
					  _gaq.push(["_setAccount", "UA-400422-1"]);
					  function _trackQuery(control, searcher, query) {
						var gaQueryParamName = "q";
						var loc = document.location;
						var url = [
						  loc.pathname,
						  loc.search,
						  loc.search ? '&' : '?',
						  gaQueryParamName == '' ? 'q' : encodeURIComponent(gaQueryParamName),
						  '=',
						  encodeURIComponent(query)
						].join('');
						_gaq.push(["_trackPageview", url]);
					  }
					  google.setOnLoadCallback(function() {
					  var customSearchOptions = {};
					  var orderByOptions = {};
					  orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
					  customSearchOptions['enableOrderBy'] = true;
					  customSearchOptions['orderByOptions'] = orderByOptions;
						var customSearchControl =   new google.search.CustomSearchControl('008902623546163794413:uohfxsmad_e', customSearchOptions);
						customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
						customSearchControl.setSearchStartingCallback(null, _trackQuery);
						var options = new google.search.DrawOptions();
						options.setAutoComplete(true);    
						customSearchControl.draw('cse', options);
						var queryFromUrl = parseQueryFromUrl();
						if (queryFromUrl) {
						  customSearchControl.execute(queryFromUrl);
						}
					  }, true);
					</script>

					<!-- Search Styles -->
					<style type='text/css'>
				  .gsc-control-cse {
				    font-family: 'Source Sans Pro', 'Helvetica Neue', 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, sans-serif;
				    font-size: 15px;
				    border-color: #FFFFFF;
				    background-color: #FFFFFF; 
				  }
				  .gsc-control-cse .gsc-table-result {
				  	margin: 5px 0;
				    font-family: 'Source Sans Pro', 'Helvetica Neue', 'HelveticaNeue-Light', 'Helvetica Neue Light', Helvetica, Arial, sans-serif;	
				    font-size: 15px;
				  }
				  input.gsc-input {
				  	padding: 6px 8px;
				  	font-size: 17px;				  	
				    border-color: #CACACA;				  
				  }
				  input.gsc-search-button {
				  	padding: 7px 16px;
				  	font-size: 17px;
				    border: none;
				    background-color: #AA0000;
				    color: white;
				  }
				  .gsc-branding-text, .gsc-branding-img {
				  	display: none;
				  }
				  .gcsc-branding-text {
						color: #666666;
						margin-bottom: 10px;
				  }
				  .gsc-tabHeader.gsc-tabhInactive {
				    border-color: #AA0000;
				    background-color: #FFFFFF;
				  }
				  .gsc-tabHeader.gsc-tabhActive {
				    background-color: #E9E9E9;
				    border-top-color:  #AA0000;
				    border-bottom-color: #E9E9E9;
				    border-right-color: #E9E9E9;
				  }
				  .gsc-tabsArea {
				    border-color: #E9E9E9;
				  }
				  .gsc-selected-option {
				  	color: #333333;
				  }
				  .gsc-result-info {
				  	padding-left: 0;
				  }
				  .gsc-webResult.gsc-result, .gsc-results .gsc-imageResult {
				    border-color: #FFFFFF;
				    background-color: #FFFFFF;
				  }
				  .gsc-webResult.gsc-result:hover, .gsc-imageResult:hover {
				    border-color: #FFFFFF;
				    background-color: #FFFFFF;
				  }
				  .gsc-webResult.gsc-result.gsc-promotion:hover {
				    border-color: #FFFFFF;
				    background-color: #FFFFFF;
				  }
				  .gs-webResult.gs-result a.gs-title:link, .gs-webResult.gs-result a.gs-title:link b, .gs-imageResult a.gs-title:link, .gs-imageResult a.gs-title:link b  {
				  	font-weight: 700;
				    color: #AA0000;
				  }
				  .gs-webResult.gs-result a.gs-title:visited, .gs-webResult.gs-result a.gs-title:visited b, .gs-imageResult a.gs-title:visited, .gs-imageResult a.gs-title:visited b {
				    color: #333333;
				  }
				  .gs-webResult.gs-result a.gs-title:hover, .gs-webResult.gs-result a.gs-title:hover b, .gs-imageResult a.gs-title:hover, .gs-imageResult a.gs-title:hover b {
				    color: #333333;
				  }
				  .gs-webResult.gs-result a.gs-title:active, .gs-webResult.gs-result a.gs-title:active b, .gs-imageResult a.gs-title:active, .gs-imageResult a.gs-title:active b {
				    color: #333333;
				  }
				  .gsc-cursor-page {
				    color: #AA0000;
				  }
				  a.gsc-trailing-more-results:link {
				    color: #AA0000;
				  }
				  .gs-webResult .gs-snippet, .gs-imageResult .gs-snippet, .gs-fileFormatType {
				    color: #333333;
				  }
				  .gs-webResult div.gs-visibleUrl, .gs-imageResult div.gs-visibleUrl {
				    color: #666666;
				  }
				  .gs-webResult div.gs-visibleUrl-short {
				    color: #666666;
				  }
				  .gs-webResult div.gs-visibleUrl-short  {
				    display: none;
				  }
				  .gs-webResult div.gs-visibleUrl-long {
				    display: block;
				  }
				  .gs-promotion div.gs-visibleUrl-short {
				    display: none;
				  }
				  .gs-promotion div.gs-visibleUrl-long  {
				    display: block;
				  }
				  .gsc-cursor-box {
				  	margin-top: 1.25em;
				  	font-size: 15px;
				  	font-weight: 700;
				    border-color: #FFFFFF;
				  }
				  .gsc-results .gsc-cursor-box .gsc-cursor-page {
				  	padding: 4px 9px;		
				  	margin-right: 10px;	
				  	cursor: pointer;				  	 	
				  	text-decoration: none;
				    border-color: #E9E9E9;
				    background-color: #E7E7E7;
				    color: #AA0000; 
				  }
				  .gsc-results .gsc-cursor-box .gsc-cursor-page:hover {
				  	background-color: #cacaca;
				  }
				  .gsc-results .gsc-cursor-box .gsc-cursor-current-page, .gsc-results .gsc-cursor-box .gsc-cursor-current-page:hover {
				    cursor: pointer;	
				    border-color: #AA0000;
				    background-color: #666666;
				    color: white;
				  }
				  .gsc-webResult.gsc-result.gsc-promotion {
				    border-color: #336699;
				    background-color: #FFFFFF;
				  }
				  .gsc-completion-title {
				    color: #AA0000;
				  }
				  .gsc-completion-snippet {
				    color: #333333;
				  }
				  .gs-promotion a.gs-title:link,.gs-promotion a.gs-title:link *,.gs-promotion .gs-snippet a:link  {
				    color: #0000CC;
				  }
				  .gs-promotion a.gs-title:visited,.gs-promotion a.gs-title:visited *,.gs-promotion .gs-snippet a:visited {
				    color: #0000CC;
				  }
				  .gs-promotion a.gs-title:hover,.gs-promotion a.gs-title:hover *,.gs-promotion .gs-snippet a:hover  {
				    color: #0000CC;
				  }
				  .gs-promotion a.gs-title:active,.gs-promotion a.gs-title:active *,.gs-promotion .gs-snippet a:active {
				    color: #0000CC;
				  }
				  .gs-promotion .gs-snippet, .gs-promotion .gs-title .gs-promotion-title-right, .gs-promotion .gs-title .gs-promotion-title-right * {
				    color: #000000;
				  }
				  .gs-promotion .gs-visibleUrl,.gs-promotion .gs-visibleUrl-short  {
				    color: #008000;
				  }
				</style>

				</article><!-- .main -->

			</div><!-- .grid-col -->			
						
			<div class="grid-col bp3-col-1-4">
				
				<!-- Start Sidebar -->
				<aside class="sidebar">	

					<div class="grid-wrap">

						<div class="grid-col col-1-1 bp2-col-1-2 bp3-col-1-1">
							<div class="module">
								<div class="header-bar header-bar-red">Get Involved Menu</div>
								<div class="sub-nav">
									<ul class="no-list-style">
										<li><a href="">Young Alumni Council</a></li>
										<li><a href="">Alumni Association</a></li>
										<li><a href="">Mentoring Program</a></li>
										<li><a href="">Alumni Meetings &amp; Events</a></li>
										<li><a href="">Volunteer Opportunities</a></li>
									</ul>
								</div>
							</div>							
						</div>

						<div class="grid-col col-1-1 bp2-col-1-2 bp3-col-1-1">
							<div class="module">
								<div class="header-bar header-bar-gray">Connect Online</div>
								<div class="feature-box-no-color">
									Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
								</div>
							</div>
						</div>

					</div><!-- .grid-wrap -->	

					<div class="grid-wrap">

						<div class="grid-col col-1-1 bp2-col-1-2 bp3-col-1-1">
							<div class="module">
								<div class="header-bar header-bar-gold">Briefcase</div>
								<div class="feature-box-color feature-box-gold text-small">
									
									<div class="feature-box-col feature-box-col-1-2 text-small">		
										A blurb about the current issue and a short call to action perhaps.
									</div>

									<div class="feature-box-col feature-box-col-1-2 feature-box-col-raised text-center">	
										<img class="mar-bot-smallest box-shadow-1" src="http://placehold.it/105x130" alt="Annual Report of the Dean 2013">														
										<a class="btn btn-small btn-red bold">Read Issue</a>
									</div>		
									
								</div>
							</div>
						</div>

						<div class="grid-col col-1-1 bp2-col-1-2 bp3-col-1-1">
							<div class="module">
								<div class="header-bar header-bar-gold">Upcoming Events</div>
								
								<!-- Event -->
								<div class="media-box media-box-tall">
									<div class="feature-box">
										<div class="media">
											<div href="" class="graphic">
												<div class="datebox">
												  <div class="datebox-header">Sep</div>
												  <div class="datebox-content">15</div>
												</div>
											</div>
											<div class="media-content">
												<a class="bold" href="">Mini Reunion Party</a>
												<div class="subtext">6 &ndash; 7:30pm</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Event -->
								<div class="media-box media-box-tall">
									<div class="feature-box">
										<div class="media">
											<div href="" class="graphic">
												<div class="datebox">
												  <div class="datebox-header">Oct</div>
												  <div class="datebox-content">22</div>
												</div>
											</div>
											<div class="media-content">
												<a class="bold" href="">Vistor&rsquo;s Reception &amp; Dinner</a>
												<div class="subtext">5 &ndash; 8pm</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Event -->
								<div class="media-box media-box-tall">
									<div class="feature-box">
										<div class="media">
											<div href="" class="graphic">
												<div class="datebox">
												  <div class="datebox-header">Nov</div>
												  <div class="datebox-content">09</div>
												</div>
											</div>
											<div class="media-content">
												<a class="bold" href="">Continued Learning Program</a>
												<div class="subtext">5 &ndash; 7:30pm</div>
											</div>
										</div>
									</div>
								</div>

								<div class="feature-box">
									<p class="subtext bold italic"><a href="">View all events &raquo;</a></p>
								</div>
											
							</div><!-- .module -->
						</div><!-- .grid-col -->

					</div><!-- .grid-wrap -->	

				</aside><!-- End Sidebar -->

			</div><!-- .grid-col -->			

		</div><!-- .grid-wrap -->	
	</section>

<!-- Footer -->
<?php include('includes/footer.php'); ?>	