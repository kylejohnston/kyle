<?php include('includes/email.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About Kyle W. Johnston, a Creative Director &amp; Designer in Kansas City</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="I am currently Director of Creative at Vista Outdoor, where I lead a talented team of creative professionals who collaborate with internal marketing and sales teams and partner with external agencies to deliver innovative marketing and advertising." />
	<meta name="keywords" content="kyle johnston, creative director, designer, resume, contact, web designer, kansas city, garmin, flow14, vista outdoor, deg digital" />
	<meta name="author" content="Kyle Johnston" />
	<link href="https://plus.google.com/103758963959064535451" rel="publisher" />
	<link href="http://www.kylewjohnston.com/about-kyle-johnston" rel="canonical" />
	<?php include('includes/head.php'); ?>
	<style type="text/css">
		 header h1 span a:link, 
		 header h1 span a:hover, 
		 header h1 span a:active, 
		 header h1 span a:visited, 
		 h1, h2 { color: #e14526; }
		.intro { background-color: #e14526; }
		section { margin: 1em 0; }
	</style>
</head>

<body>
	<div class="bold-border" id="border-top"></div><div class="bold-border" id="border-right"></div><div class="bold-border" id="border-left"></div><div class="bold-border" id="border-bottom"></div>
	<div class="intro dark">
		<?php include('includes/header-nav.php'); ?>
	</div>
	<div class="container items" style="margin-top:1.4em;">
		<div class="row">
			<h2 class="span12">Say Hi</h2>
			<div class="span6">
				<a name="contact"></a>
				<h3>Email Me:</h3>
				<div id="contactWrapper" role="form">
					<?php if(isset($hasError)) { //If errors are found ?>
					<p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
					<?php } ?>
					
					<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
					<div class="success">
						<h3>Thank You</h3>
						<p>Thank you for contacting me, <?php echo $name;?>. Your email was successfully sent and I'll be in touch with you soon.</p>
					</div>
					<?php } ?>
					
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
						<div class="stage clear">
							<label for="contactname">Your Name: <em>*</em></label>
							<input type="text" name="contactname" id="contactname" value="" class="text required" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="email" >Your Email: <em>*</em></label>
							<input type="email" name="email" id="email" value="" class="text required email" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="subject">Subject: <em>*</em></label>
							<input type="text" name="subject" id="subject" value="" class="text required" role="input" aria-required="true" />
						</div>
						
						<div class="stage clear">
							<label for="message">Message: <em>*</em></label>
							<textarea rows="8" name="message" id="message" class="text required" role="textbox" aria-required="true"></textarea>
						</div>
						
						<p class="requiredNote"><em>*</em> Denotes a required field.</p>
						
						<input class="btn" type="submit" value="Send Message" name="submit" id="submitButton" title="Click here to submit your message!" />
					</form>
			</div>
			</div>
			<div class="span3">
				<h3>Call Me:</h3><h3>913-707-7442</h3>
			</div>
			<div class="span3">
				<p>Here are a few of the other places you can find me on the web:<br>
				<a class="linkedin" href="http://www.linkedin.com/in/kylejohnston">LinkedIn</a><br>
				<a class="twitter" href="https://twitter.com/kylejohnston">Twitter</a><br>
				<a class="github" href="https://github.com/kylejohnston">GitHub</a><br>
				<a class="dribbble" href="https://dribbble.com/kylejohnston">dribbble</a><br>
				<a class="behance" href="https://www.behance.net/KyleJohnston">Behance</a><br>
				<a class="vsco" href="http://kylejohnston.vsco.co/">VSCO</a><br>
				</p>
			</div>
		</div>

	</div>
	<div class="container marketing">
		<?php include('includes/footer.php'); ?>
	</div>

	<?php include('includes/foot.php'); ?>
</body>
</html>