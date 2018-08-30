<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kyle W. Johnston, a Creative Director &amp; Designer based in Kansas City</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="The portfolio of Kyle W Johnston, a Creative Director & Designer based in Kansas City." />
	<meta name="keywords" content="creative director, designer, advertising, web design, logo design, kansas city, garmin, flow14" />
	<meta name="author" content="Kyle Johnston" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.kylewjohnston.com/" rel="canonical" />

	<?php include('includes/head.php'); ?>

	<style type="text/css">
		header h1 span a:link, 
		header h1 span a:hover, 
		header h1 span a:active, 
		header h1 span a:visited { color: #94bd00; }
		.intro { background-color: #94bd00; }
		.welcome h1, .welcome h3 { line-height: 1.5; }
		.welcome h3 { color: #4E4E4E; }
		span#hello,
		h1 span.oomph { border-bottom: 4px solid #94bd00; color: #282828; }
	</style>
</head>
<body>
	<header>
		<?php include('includes/header-nav.php'); ?>
	</header>

<!-- Thumbnail computed size: 370x185, 2x: 740x370 -->
	<a name="portfolio"></a>
	<article class="content">
	<section class="block">
		<div class="col-9 welcome spacer-4--bottom">
			<div class="inner">
				<h1><span class="oomph"><span id="hello">Hello</span>!</span></h1>
				<h3>I’m a designer and creative director. I focus on brand and interactive design. I’m also a cat person, hobbyist photographer and coder. And these are a few of my favorite things…</h3>
			</div>
		</div>
	</section>
	<div class="block">
		<div class="col-6">
			<div class="card">
				<a href="hnc-living-foundation/"><img src="img/samples/hnc-living/thumb-alt.jpg" alt="HNC Living Website Redesign"></a>
				<div class="inner">
					<h2><a href="hnc-living-foundation/">HNC Living Website Redesign</a></h2>
					<p>Rehabilitating a website for a life-changing nonprofit</p>
					<p><a href="hnc-living-foundation/">See the transformation &#187;</a></p>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="card">
				<a href="ferrellgas-brand-website/"><img src="img/samples/ferrellgas/thumbnail.2x.jpg" alt="Ferrellgas Website Redesign"></a>
				<div class="inner">
					<h2><a href="ferrellgas-brand-website/">Ferrellgas Brand Evolution &amp; Website Redesign</a></h2>
					<p>Design thinking fueled a brand evolution and website design</p>
					<p><a href="ferrellgas-brand-website/">Get cozy with the work &#187;</a></p>
				</div>
			</div>
		</div>

		<div class="col-6">
			<div class="card">
				<a href="amc/"><img src="/img/samples/amc/thumbnail01.2x.jpg" alt="New business pitch for AMC Theatres"></a>
				<div class="inner">
					<h2><a href="amc/">AMC New Business Pitch</a></h2>
					<p>Teamwork made the dream work</p>
					<p><a href="amc/">Peek behind the curtain &#187;</a></p>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="card">
				<a href="garmin-mobile/"><img src="img/samples/garmin-mobile/thumbnail.2x.jpg" alt="Garmin.com Mobile Website"></a>
				<div class="inner">
					<h2><a href="garmin-mobile/">Garmin.com Mobile Shop</a></h2>
					<p>Fast-moving wireframing, design, and development</p>
					<p><a href="garmin-mobile/">You won&rsquo;t believe the results &#187;</a></p>
				</div>
			</div>
		</div>

		<div class="col-4">
			<div class="card">
				<a href="rounding-up-undies/"><img src="img/samples/rounding-up-undies/thumbnail.jpg" alt="Rounding Up Undies Logo"></a>
				<div class="inner">
					<h2><a href="rounding-up-undies/">Rounding Up Undies Logo</a></h2>
					<p>A distinctive logo design for a unique nonprofit.</p>
					<p><a href="rounding-up-undies/">Read the round up &#187;</a></p>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="card">
				<a href="iphone-365-project/"><img src="img/samples/iphone-365/thumb-2017.2x.jpg" alt="iPhone 365 Project"></a>
				<div class="inner">
					<h2><a href="iphone-365-project/">Personal Work: 365 Project</a></h2>
					<p>A photo a day. Every day. Since 2009.
					<p><a href="iphone-365-project/">Watch the Videos &#187;</a></p>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="card">
				<a href="http://www.flow14.com/"><img src="img/samples/flow14/thumbnail.png" alt="flow14 - Freelance Projects"></a>
				<div class="inner">
					<h2><a href="http://www.flow14.com/">flow14 - Independent Projects</a></h2>
					<p>Logo design, website design, and more</p>
					<p><a href="http://www.flow14.com/">See the design works &#187;</a></p>
				</div>
			</div>
		</div>
		<p class="col-12"><a href="all-projects/"><strong>&horbar;View all projects</strong></a></p>
	</div><!-- /block -->
	</article>

	<?php include('includes/footer.php'); ?>

	<?php include('includes/foot.php'); ?>
	<script type="text/javascript">
	(function() {
		var quotes = [
			{ text: "Hello" },
			{ text: "Howdy" },
			{ text: "Aloha" },
			{ text: "Hiya" },
			{ text: "Namaste" },
			{ text: "Konnichi Wa" },
			{ text: "Bonjour" }
		];
		var quote = quotes[Math.floor(Math.random() * quotes.length)];
		document.getElementById("hello").innerHTML = quote.text;
	})();
	</script>
</body>
</html>
