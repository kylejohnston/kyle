<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Portfolio: Waddell &amp; Reed Website Redesign | Kyle W. Johnston</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Kyle Johnston Work Sample: Responsive redesign of a complex web experience" />
	<meta name="keywords" content="portfolio, kyle johnston, logo design, business card design, website design" />
	<meta name="author" content="Kyle Johnston" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.kylewjohnston.com/waddell-reed" rel="canonical" />
	<?php include('includes/head.php'); ?>
	<style type="text/css">
		 header h1 span a:link, 
		 header h1 span a:hover, 
		 header h1 span a:active, 
		 header h1 span a:visited,
		 .featurette h2 { color: #007e4b; }
		.intro { background-color: #007e4b; }
	</style>
</head>

<body>
	<div class="bold-border" id="border-top"></div><div class="bold-border" id="border-right"></div><div class="bold-border" id="border-left"></div><div class="bold-border" id="border-bottom"></div>
	<div class="intro dark">
		<?php include('includes/header-nav.php'); ?>
		<div class="container">
			<div class="row">
				<div class="introduction">
					<h1>Waddell &amp; Reed Website Redesign</h1>
					<p>In 2016, I led the design team at DEG, to work with <a href="https://www.waddell.com">Waddell &amp; Reed</a> &#8212; an asset management and financial planning company &#8212; to overhaul their outdated, disorganized and difficult to manage web experience and replatform to Sitecore to allow for a personalized experience.</p>
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
							<p>Throughout the project, my design team collaborated closely with our colleagues in content strategy, UX, and front end development. We started by providing style tiles to the development team, who then used a development tool called Pattern Lab to quickly validate design decisions and provide internal and external stakeholders with prototypes that could be tested on different devices.</p>
							<p>This highly collaborative process ensured all stakeholders had a clear understanding of how the desktop experience translated to mobile and helped avoid late-stage changes that could have derailed the aggressive timeline.</p>
						</div>
					</div>
					<div class="span7">
						<div class="inner">
							<div class="caption">
								<img src="../img/samples/waddell/waddell-home-mockup.jpg" alt="Waddell & Reed Homepage">
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
					<div class="span7">
						<div class="inner">
							<div class="caption">
								<p>Find an Advisor page</p>
								<img class="shadow" src="../img/samples/waddell/waddell-find-advisor.jpg" alt="Waddell & Reed - Find an Advisor page">
							</div>
						</div>
					</div>
					<div class="span5">
						<div class="inner">
							<div class="caption">
								<p>Find an Advisor page, mobile view</p>
								<img class="shadow" src="../img/samples/waddell/waddell-find-advisor-mobile.jpg" alt="Waddell & Reed - Find an Advisor page">
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
