<?php include ($_SERVER['DOCUMENT_ROOT'] . '/includes/processform.php');?>
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
			<div class="col-1 shim"></div>
			<div class="col-11">
				<h1 class="spacer-6"><div class="inner">Say Hi</div></h1>
				<div class="block">
					<div class="col-6">
						<div class="inner">
							<a name="contact"></a>
							<h3>Email Me:</h3>
							<p>Get in touch via <a href="mailto:hello@flow14.com">hello@flow14.com</a> or use this form:</p>
							<div id="contactWrapper" class="contact-form-wrapper" role="form">
								<!-- if the msg variable is set, then it is going to print out the message
								from the process.php file to  the user -->
								<?php if (isset($msg)) {echo '<div id="formmessage"><p>', $msg , '</p></div>';} ?>
								<!-- $_SERVER["PHP_SELF"] sends the submitted form data to the page itself,
								instead of jumping to a different page. This way,
								the user will get error messages on the same page as the form.
								Also htmlspecialchars is used to prevents attackers from exploiting
								the code by injecting HTML or JavaScript code (Cross-site Scripting attacks) in forms    -->
								<form id="contactform" class="pure-form pure-form-stacked" name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
									<div class="spacer-5">
										<label for="name">Your Name: <em>*</em></label>
										<input class="text required" id="name" type="text" name="name" role="input" value="<?php if (isset($clientName)) {echo $clientName;} ?>"/>
										<?php if(isset($err_name)) {echo $err_name;}?>
									</div>
									<div class="spacer-5">
										<label for="email">Your Email: <em>*</em></label>
										<input class="text required" id="email" type="email" name="email" role="input" value="<?php if (isset($clientEmail)) {echo $clientEmail;} ?>"/>
										<?php if(isset($err_email)) {echo $err_email;}?>
									</div>
									<div class="spacer-5">
										<label for="subject">Subject: <em>*</em></label>
										<input class="text required" id="subject" type="text" name="subject" role="input" value="<?php if (isset($clientSubject)) {echo $clientSubject;} ?>"/>
										<?php if(isset($err_subject)) {echo $err_subject;}?>
									</div>
									<div>
										<label>Message: <em>*</em></label>
										<textarea name="message" rows="8" class="text required role="textbox"><?php if (isset($clientMessage)) {echo $clientMessage;} ?></textarea><?php if(isset($err_message)) {echo $err_message;}?>
									</div>
									<p class="requiredNote"><em>*</em> Denotes a required field.</p>
									<input class="btn" type="submit" name="action" class="send-mail-button" value="Send Message">
								</form>
							</div> <!-- end contact-form-wrapper -->
						</div>
					</div>
					<div class="col-3 spacer-6">
						<div class="inner">
							<h3>Call Me:</h3><h3>913-707-7442</h3>
						</div>
					</div>
					<div class="col-3 spacer-6">
						<div class="inner">
							<h3>Elsewhere</h3>
							<p>
							<a class="linkedin" href="http://www.linkedin.com/in/kylejohnston">LinkedIn</a><br>
							<a class="twitter" href="https://twitter.com/kylejohnston">Twitter</a><br>
							<a class="github" href="https://github.com/kylejohnston">GitHub</a><br>
							<a class="dribbble" href="https://dribbble.com/kylejohnston">dribbble</a><br>
							<a class="unsplash" href="https://unsplash.com/@kylejohnston">Unsplash</a><br>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</article>

	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/foot.php'); ?>
</body>
</html>
