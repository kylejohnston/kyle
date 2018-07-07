<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Portfolio: Ferrellgas Brand Workshop and Website Redesign | Kyle W. Johnston</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Kyle Johnston Work Sample: Brand workshop and responsive website design" />
	<meta name="keywords" content="portfolio, kyle johnston, logo design, business card design, website design" />
	<meta name="author" content="Kyle Johnston" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.kylewjohnston.com/ferrellgas-brand-website" rel="canonical" />
	<?php include('includes/head.php'); ?>
	<style type="text/css">
		 header h1 span a:link, 
		 header h1 span a:hover, 
		 header h1 span a:active, 
		 header h1 span a:visited,
		 .featurette h1,.featurette h2, .featurette h3 { color: #005a9b; }
		.intro { background-color: #005a9b; }
		.flexslider { border: none; }
	</style>
</head>

<body>
	<div class="bold-border" id="border-top"></div><div class="bold-border" id="border-right"></div><div class="bold-border" id="border-left"></div><div class="bold-border" id="border-bottom"></div>
	<div class="intro dark">
		<?php include('includes/header-nav.php'); ?>
	</div>
	<div class="container marketing">
		<div class="featurette">
			<div class="container">
				<div class="row clear">
					<div class="span2"></div>
					<div class="span8">
						<div class="inner">
							<h1>Fueling a Brand Evolution</h1>
							<p>While leading the creative team at DEG, my team and I worked with <a href="https://www.ferrellgas.com">Ferrellgas</a> &#8212; one of the nation&rsquo;s largest propane providers &#8212; to rethink their brand and voice, redesign their website, and more.</p>
							<p><strong>My role:</strong> Creative Director &#64; DEG, 2016</p>
						</div>
					</div>
					<div class="span2"></div>
				</div>
			</div>
		</div>
		<div class="featurette">
			<div class="container nudge-bottom--lg">
				<div class="row clear">
					<div class="span5" data-aos="fade-right">
						<div class="inner">
							<h2>Website Redesign</h2>
							<p>Equipped with insights from our design thinking workshop along with brand guidelines we developed with assets provided by the Ferrellgas team, we set out to redesign the website.</p>
							<p>Using a simple color palette along with custom photography and iconography, we brought the brand to life online, creating a consistent customer experience across all of Ferrellgas&rsquo; channels.</p>
							<p>From the beginning of the project, my design team worked closely with the front end developers to develop a thoughtful experience for Ferrellgas customers:
							<ul>
								<li>With a significant number of Ferrellgas&rsquo; customers in rural areas, we wanted to ensure the website was fast, in addition to being easy to use. We agreed on performance budgets, which informed early design explorations and decisions.</li>
								<li>Using a mobile-first design approach, we made features like location search more prominent on mobile devices.</li>
								<li>During development, we used Pattern Lab and Atomic Design principles. This allowed everyone to experience the website on a range of devices and make better informed design decisions.</li>
							</ul>
							</p>
						</div>
					</div>
					<div class="span7" data-aos="fade-left" data-aos-delay="200">
						<div class="inner">
							<div id="slider-one" class="flexslider">
								<ul class="slides">
									<li style="text-align:center;">
										<p class="flex-caption">Old Homepage</p>
										<img  src="/img/samples/ferrellgas/old-homepage.570.jpg" alt="The old Ferrellgas homepage">
									</li>
									<li style="text-align:center;">
										<p class="flex-caption">New Homepage</p>
										<img src="/img/samples/ferrellgas/ferrellgas-home.jpg" alt="The new Ferrellgas homepage">
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row clear">
					<div class="span7">
						<div class="inner">
							<div id="slider-two" class="flexslider">
								<ul class="slides">
									<li style="text-align:center;">
										<p class="flex-caption">Old Residential page</p>
										<img  src="/img/samples/ferrellgas/old-residential.570.jpg" alt="The old Ferrellgas homepage">
									</li>
									<li style="text-align:center;">
										<p class="flex-caption">New Residential page</p>
										<img src="/img/samples/ferrellgas/ferrellgas-residential.jpg" alt="The new Ferrellgas homepage">
									</li>
								</ul>
							</div>
							<div class="caption">
								<img class="shadow" src="/img/samples/ferrellgas/ferrellgas-locations.jpg" alt="Ferrellgas homepage">
								<p>Page: Locations</p>
							</div>
						</div>
					</div>
					<div class="span5">
						<div class="inner">
							<div class="caption">
								<img class="shadow" src="/img/samples/ferrellgas/ferrellgas-home-mobile.jpg" alt="Ferrellgas homepage, mobile">
								<p>Homepage, mobile view</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="featurette">
			<div class="container">
				<div class="row clear">
					<div class="span2"></div>
					<div class="span8">
						<div class="inner">
							<h2>The Results</h2>
							<p>Based on the strength of the teams efforts with these and other foundational projects, Ferrellgas&rsquo; named DEG its agency of record in 2017, expanding the agency&rsquo;s responsibilities to include local and direct mail marketing, traditional media, and local listings along with expanded digital efforts in the form of paid social strategy and video production.</p>
						</div>
					</div>
					<div class="span2"></div>
				</div>
			</div>
		</div>
		<?php include('includes/footer.php'); ?>
	</div><!-- /.container -->

	<?php include('includes/foot.php'); ?>
	<script type="text/javascript">
	$(window).load(function(){
		$('#slider-one').flexslider({
			animation: "slide",
			controlsContainer: '.flex-container',
			animationLoop: false,
			smoothHeight: true,
			touch: true,
			start: function(slider){
				$('body').removeClass('loading');
			}
		});		$('#slider-two').flexslider({
			animation: "slide",
			controlsContainer: '.flex-container',
			animationLoop: false,
			smoothHeight: true,
			touch: true,
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
	});
	</script>
</body>
</html>
