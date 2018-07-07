<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Portfolio: Garmin.com Mobile Site | Kyle W. Johnston</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Kyle Johnston Work Sample: Design & development of Garmin.com Shopping UX for smartphones" />
	<meta name="keywords" content="portfolio, kyle johnston, logo design, business card design, website design" />
	<meta name="author" content="Kyle Johnston" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.kylewjohnston.com/garmin-mobile" rel="canonical" />
	<?php include('includes/head.php'); ?>
	<style type="text/css">
		html {
			background: hsl(203, 82%, 42%);
			background: linear-gradient(180deg, hsl(203, 82%, 42%) 0%, hsl(203, 82%, 38%) 35%);
		}

		 header h1 span a:link, 
		 header h1 span a:hover, 
		 header h1 span a:active, 
		 header h1 span a:visited,
		 h1, h2, h3 { color: #137ec2; }
	</style>
</head>

<body>
	<header>
		<?php include('includes/header-nav.php'); ?>
	</header>
	<article class="content">
		<section class="block">
			<div class="pattern__2-8-2">
				<h1>Garmin.com Mobile Website</h1>
				<p>In 2012, my team spotted a trend in Garmin's website traffic – mobile devices were driving more and more traffic and revenue, in spite of the fact that Garmin.com was difficult to use on tablets and smartphones. I championed the project with executives, then led the effort to design, develop, and launch the mobile-friendly version of Garmin.com</p>
				<p><strong>My role:</strong> Project Sponsor, Creative Director</p>
			</div>
		</section>
		<section class="block">
			<div class="col-6">
				<h2>Speed to Market</h2>
				<p>After weighing the pros and cons of building the site in-house, we chose <a href="http://www.mobify.com">Mobify</a> as technical partner &#8211; giving us the greatest speed to market with minimal impact on our in-house resources, who were focused on a major upgrade and redesign of our e-commerce platform.</p>
				<p>The project was completed in approximately 14 weeks and within months of launching the mobile-optimized site, sales from smartphones jumped 60%.</p>
				<p>Year-over-year, sales increased by 258% (2012&#8211;2013) and 115% (2013&#8211;2014), average order value increased by 141%, and conversion rates increased by 61%.</p>
			</div>
			<div class="col-6">
				<div id="main-slider" class="flexslider">
					<ul class="slides">
						<li style="text-align:center;">
							<p class="flex-caption">Wireframes: Product Page and Cart</p>
							<img  src="/img/samples/garmin-mobile/wireframes-product-checkout.jpg" alt="Garmin.com Mobile Wireframes">
						</li>
						<li style="text-align:center;">
							<p class="flex-caption">Wireframes: Checkout Flow</p>
							<img  src="/img/samples/garmin-mobile/wireframes-checkout-01.jpg" alt="Garmin.com Mobile Wireframes">
						</li>
						<li style="text-align:center;">
							<p class="flex-caption">Wireframes &amp; Checkout Flow</p>
							<img  src="/img/samples/garmin-mobile/wireframes-checkout-02.jpg" alt="Garmin.com Mobile Wireframes">
						</li>
						<li style="text-align:center;">
							<p class="flex-caption">Homepage &amp; Site Navigation</p>
							<img  src="/img/samples/garmin-mobile/homepage-and-navigation.jpg" alt="Garmin.com Mobile Homepage and Navigation">
						</li>
						<li style="text-align:center;">
							<p class="flex-caption">Product Page &amp; Shopping Cart</p>
							<img src="/img/samples/garmin-mobile/product-page-and-cart.jpg" alt="Garmin.com Mobile Product Page and Shopping Cart">
						</li>
					</ul>
				</div>
			</div>
		</section>
	</article>

	<?php include('includes/footer.php'); ?>
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
