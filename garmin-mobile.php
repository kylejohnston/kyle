<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Portfolio: Garmin.com Mobile Site | Kyle W. Johnston</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Kyle Johnston Work Sample: Design & development of Garmin.com Shopping UX for smartphones">
	<meta name="keywords" content="portfolio, kyle johnston, logo design, business card design, website design">
	<meta name="author" content="Kyle Johnston">
	<?php include('includes/head.php'); ?>
	<style type="text/css">
		 header h1 span a:link, 
		 header h1 span a:hover, 
		 header h1 span a:active, 
		 header h1 span a:visited,
		 .featurette h2 
		 									{ color: #137ec2; }
		.intro { background-color: #137ec2; }
	</style>
</head>

<body>
	<div class="bold-border" id="border-top"></div><div class="bold-border" id="border-right"></div><div class="bold-border" id="border-left"></div><div class="bold-border" id="border-bottom"></div>
	<div class="intro dark">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="introduction">
					<h1>Garmin.com Mobile Website</h1>
					<p>In 2012, my team spotted a trend in Garmin's website traffic – mobile devices were driving more and more traffic and revenue, in spite of the fact that Garmin.com was difficult to use on tablets and smartphones. I championed the project with executives, then led the effort to design, develop, and launch the mobile-friendly version of Garmin.com</p>
					<p><strong>My role:</strong> Project Sponsor, Creative Director</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container marketing">
		<div class="featurette">
			<div class="container">
				<div class="row">
					<div class="span6">
						<div class="inner">
							<h2>Getting it done</h2>
							<p>After weighing the pros and cons of building the site in-house, we chose <a href="http://www.mobify.com">Mobify</a> as technical partner &#8211; giving us the greatest speed to market with minimal impact on our in-house resources, who were focused on a major upgrade and redesign of our e-commerce platform.</p>
							<p>Within months of launching the mobile-optimized site, sales from smartphones jumped 60%.</p>
							<p>Year-over-year, sales increased by 258% (2012&#8212;2013) and 115% (2013&#8212;2014), average order value increased by 141%, and conversion rates increased by 61%.</p>
						</div>
					</div>
					<div class="span6">
						<div class="inner">
							<div id="main-slider" class="flexslider">
							<ul class="slides">
								<li style="text-align:center;">
									<p class="flex-caption">Homepage &amp; Site Navigation</p>
									<img  src="img/samples/garmin-mobile/homepage-and-navigation.jpg" alt="Garmin.com Mobile Homepage and Navigation">
								</li>
								<li style="text-align:center;">
									<p class="flex-caption">Product Page &amp; Shopping Cart</p>
									<img src="img/samples/garmin-mobile/product-page-and-cart.jpg" alt="Garmin.com Mobile Product Page and Shopping Cart">
							</ul>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('includes/footer.php'); ?>
	</div><!-- /.container -->

	<?php include('includes/foot.php'); ?>
	<script type="text/javascript">
	$(window).load(function(){
		$('#main-slider').flexslider({
			animation: "slide",
			controlsContainer: '.flex-container',
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
	});
	</script>
</body>
</html>
