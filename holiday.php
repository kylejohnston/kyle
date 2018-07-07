<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Portfolio: Garmin Holiday Campaigns | Kyle W. Johnston</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Give-a-Garmin Holiday ad campaigns through the years; spanning in-store merchandising, an online gift guide, email marketing, and broadcast and online advertising." />
	<meta name="keywords" content="garmin, holiday, give a garmin, kyle johnston, portfolio, creative director, portfolio" />
	<meta name="author" content="Kyle Johnston" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.kylewjohnston.com/holiday" rel="canonical" />
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
				<h1>Holiday Campaigns</h1>
				<p>Each Holiday season, we developed a retail-focused campaign spanning in-store merchandising, an online gift guide, email marketing, and broadcast and online advertising, all centered around the catchy &ldquo;Give-a-Garmin&rdquo; theme.</p>
				<p>Customers have told us they know the holidays have arrived when they hear the &ldquo;Give-a-Garmin&rdquo; jingle.</p>
				<p><strong>My role:</strong> Creative Director</p>
			</div>
		</section>

		<section class="block">
			<div class="col-4 align__center">
				<h2>Holiday Theme Design</h2>
				<p>2011, 2012, 2014</p>
			</div>
			<div class="col-8">
				<img src="../img/samples/holiday/holiday-themes.png" alt="Garmin Holiday Campaign Themes">
			</div>
		</section>

		<section class="block text__center">
			<div class="pattern__3-6-3"><h2>Broadcast Advertising</h2></div>
			<div class="col-6">
				<p>2011 - &ldquo;Give-a-Give-a-Give-a-Garmin&rdquo;</p>
				<div class="video-container">
					<iframe src="http://player.vimeo.com/video/41527930?byline=0&amp;portrait=0&amp;color=a4c7fd" width="600" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-6">
				<p>2012 – &ldquo;The Joy of Giving&rdquo;</p>
				<div class="video-container">
					<iframe src="http://player.vimeo.com/video/41527673?byline=0&amp;portrait=0&amp;color=a4c7fd" width="600" height="450" frameborder="0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
		</section>

		<section class="block">
			<div class="col-1 shim"></div>
			<div class="col-4 order-2">
				<div id="main-slider" class="flexslider">
					<ul class="slides">
						<li><img src="../img/samples/holiday/catalog-page-2011.jpg" alt="Garmin.com 2011 Holiday Merchandising Catalog"></li>
						<li style="text-align:center;"><img src="../img/samples/holiday/catalog-page-2012.jpg" alt="Garmin.com 2012 Holiday Merchandising Catalog"></li>
						<li><img src="../img/samples/holiday/catalog-page-2014.jpg" alt="Garmin.com 2014 Holiday Merchandising Catalog"></li>
					</ul>
				</div>
			</div>
			<div class="col-7 order-1 align__center">
				<h2>Merchandising Catalog Pages</h2>
				<p>2011, 2012, 2014</p>
			</div>
		</section>

		<section class="block">
			<div class="col-3 align__center">
				<h2>Digital Advertising</h2>
				<p>2011, 2014</p>
			</div>
			<div class="col-9">
				<img src="../img/samples/holiday/digital-ads.jpg" alt="Garmin.com Holiday Web Banners">
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
