<?php
	function php_split_js_make_email($phpemail)
	{
		$pieces = explode("@", $phpemail);

		echo '
			<script type="text/javascript">
				var a = "<a href=\'mailto:";
				var b = "' . $pieces[0] . '";
				var c = "' . $pieces[1] .'";
				var d = "\' class=\'email\'>";
				var e = "</a>";
				document.write(a+b+"@"+c+d+b+"@"+c+e);
			</script>
			<noscript>Please enable JavaScript to view emails</noscript>
		';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact Kyle W. Johnston, a Creative Director &amp; Designer in Kansas City</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="I am a Creative Leader and Designer based in Kansas City." />
	<meta name="keywords" content="kyle johnston, creative director, designer, resume, contact, web designer, kansas city, garmin, flow14, vista outdoor, deg digital" />
	<meta name="author" content="Kyle Johnston" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.kylewjohnston.com/contact" rel="canonical" />
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>
</head>

<body>
	<header>
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/header-nav.php'); ?>
	</header>
	<article class="content">
		<section class="block spacer-9--top">

			<div class="pattern__2-8-2">
				<div class="inner">
					<h1 class="spacer-6">Say &lsquo;Hi&rsquo; 👋</h1>
					<div class="block">
					<div class="col-6">
						<h3>Email</h3>
						<h3><?php php_split_js_make_email("hello@flow14.com"); ?></h3>
					</div>
					<div class="col-6">
						<h3>Phone</h3>
						<h3>913-707-7442</h3>
					</div>
					</div>
					<h3 class="spacer-6--top">Elsewhere</h3>
					<p>
						<a class="linkedin" href="https://www.linkedin.com/in/kylejohnston">LinkedIn</a><br>
						<a href="https://kyleio.com">Creative journal</a><br>
						<a href="https://books.kyleio.com">My Bookshelf</a><br>
						<a class="github" href="https://github.com/kylejohnston">GitHub</a><br>
						<a class="unsplash" href="https://unsplash.com/@kylejohnston">Unsplash</a><br>
					</p>
				</div>
			</div>
		</section>
	</article>

	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/foot.php'); ?>
</body>
</html>
