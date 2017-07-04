<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Portfolio: Ferrellgas Website Redesign | Kyle W. Johnston</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Kyle Johnston Work Sample: Responsive redesign and rebrand" />
	<meta name="keywords" content="portfolio, kyle johnston, logo design, business card design, website design" />
	<meta name="author" content="Kyle Johnston" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.kylewjohnston.com/ferrellgas" rel="canonical" />
	<?php include('includes/head.php'); ?>
	<style type="text/css">
		 header h1 span a:link, 
		 header h1 span a:hover, 
		 header h1 span a:active, 
		 header h1 span a:visited,
		 .featurette h2 { color: #005a9b; }
		.intro { background-color: #005a9b; }
	</style>
</head>

<body>
	<div class="bold-border" id="border-top"></div><div class="bold-border" id="border-right"></div><div class="bold-border" id="border-left"></div><div class="bold-border" id="border-bottom"></div>
	<div class="intro dark">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="introduction">
					<h1>Ferrellgas Website Redesign</h1>
					<p>In 2016, I led the design team at DEG, to work with <a href="https://www.ferrellgas.com">Ferrellgas</a> &#8212; one of the nation’s largest propane providers &#8212; to design and develop a modern, responsive website.</p>
					<p><strong>My role:</strong> Creative Director</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container marketing">
		<div class="featurette">
			<div class="container">
				<div class="row">
					<div class="span5">
						<div class="inner">
							<p>Having recently completed a major rebrand, Ferrellgas provided us with a range of high-quality assets. We started by organizing the assets and developing brand guidelines to ensure a consistent, engaging experience across all their customer touchpoints. Online, the brand came to life through a simple color palette, quality photography, and stylish iconography.</p>
							<p>The design team worked closely with the front end developers to develop a thoughtful experience for Ferrellgas customers. For example, the homepage content on mobile devices highlights prioritizes location search for homeowners.</p>
						</div>
					</div>
					<div class="span7">
						<div class="inner">
							<div class="caption">
								<img src="../img/samples/ferrellgas/ferrellgas-home-mockup.jpg" alt="Ferrellgas homepage">
								<p>Homepage</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="featurette">
			<div class="container">
				<div class="row clear">
					<div class="span5">
						<div class="inner">
							<div class="caption">
								<p>Homepage, mobile view</p>
								<img class="shadow" src="../img/samples/ferrellgas/ferrellgas-home-mobile.jpg" alt="Ferrellgas homepage, mobile">
							</div>
						</div>
					</div>
					<div class="span7">
						<div class="inner">
							<div class="caption">
								<p>Residential Customers</p>
								<img class="shadow" src="../img/samples/ferrellgas/ferrellgas-residential.jpg" alt="Ferrellgas Locations">
							</div>
							<div class="caption">
								<p>Locations</p>
								<img class="shadow" src="../img/samples/ferrellgas/ferrellgas-locations.jpg" alt="Ferrellgas homepage">
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
