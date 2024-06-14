<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>

<!--AMP HTML files require a canonical link pointing to the regular HTML. If no HTML version exists, it should point to itself.-->
<link rel="canonical" href="index.html">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
<title>AMP Photo</title>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1,user-scalable=no"><meta name="apple-mobile-web-app-capable" content="yes"/><meta name="apple-mobile-web-app-status-bar-style" content="black">
<style amp-custom><?php readfile( getcwd()."/styles/style.css"); ?></style>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
</head>

<body>		
	<div class="page-overlay"></div>
	<div class="landing-bg"></div>
	
	<div class="menu-fixed">
		<a href="pages.php" class="inactive-item"><i class="fa fa-file-o"></i><em>Pages</em></a>
		<a href="gallery.php" class="inactive-item"><i class="fa fa-camera"></i><em>Gallery</em></a>
		<a href="home.php" class="inactive-item"><i class="fa fa-home"></i><em>Home</em></a>
		<a href="features.php" class="active-item"><i class="fa fa-bolt"></i><em>Features</em></a>
		<a href="contact.php" class="inactive-item"><i class="fa fa-envelope"></i><em>Contact</em></a>
	</div>
	
	<div class="page-title">
		<div class="page-title-center">
			<h1>Get in Touch</h1>
			<p class="boxed-text center-text">
				Fully functional Google AMP Contact Form. Just send your message bellow.
			</p>
		</div>
	</div>	
	<div class="page-title-clear"></div>

	<div class="page-content">
		<div class="content full-top">
			<form action-xhr="//www.enableds.com/products/amphoto/php/contact.php" method="POST" class="contactForm" target="_top" custom-validation-reporting="show-all-on-submit">
				<fieldset>
					<div class="formFieldWrap">
						<label class="field-title contactNameField" for="contactNameField">Full Name:<span>(required)</span>
						</label>
						<input type="text" name="contactNameField" value="" class="contactField" id="contactNameField" required  /><span visible-when-invalid="valueMissing" validation-for="name5"></span>
						<span visible-when-invalid="patternMismatch" validation-for="name5">
							Please enter your first and last name separated by a space (e.g. Jane Miller)
						</span>
					</div>
					<div class="formFieldWrap">
						<label class="field-title contactEmailField" for="contactEmailField">Email: <span>(required)</span>
						</label>
						<input type="text" name="contactEmailField" value="" class="contactField" id="contactEmailField" required /><span visible-when-invalid="valueMissing" validation-for="email5"></span>
						<span visible-when-invalid="typeMismatch" validation-for="email5"></span>
					</div>
					<div class="formTextareaWrap">
						<label class="field-title contactMessageTextarea" for="contactMessageTextarea">Message: <span>(required)</span>
						</label>
						<textarea name="contactMessageTextarea" class="contactTextarea" id="contactMessageTextarea"></textarea>
					</div>
					<div class="formSubmitButtonErrorsWrap contactFormButton">
						<input type="submit" class="buttonWrap bg-blue-dark contactSubmitButton" value="Send Message" />
					</div>
				</fieldset>
				<div submit-success>
					<template type="amp-mustache">
						<p class="contact-sent">Success! Thanks {{name}} , we'll get back to you shortly. </p>
					</template>
				</div>
				<div submit-error>
					<template type="amp-mustache">
						<p class="contact-sent">Error! {{message}}</p>
					</template>
				</div>
			</form>
		</div>

		<div class="decoration decoration-margins"></div>

		<div class="content">
			<h5>Contact Information</h5>
			<a href="#" class="contact-icon"><i class="fa fa-phone"></i>+123 456 7890</a>
			<a href="#" class="contact-icon"><i class="fa fa-comments"></i>+123 456 7890</a>
			<a href="#" class="contact-icon"><i class="fa fa-fax"></i>+123 456 7890</a>
			<a href="#" class="contact-icon"><i class="fa fa-envelope"></i>mail@domain.com</a>
			<a href="#" class="contact-icon"><i class="fa fa-facebook"></i>enabled.labs</a>
			<a href="#" class="contact-icon full-bottom"><i class="fa fa-twitter"></i>@iEnabled</a>
		</div>	

		<div class="decoration decoration-margins"></div>

		<div class="content">
			<h5>Postal Information</h5>
			<p>
				PO Box 22161 Street Collins East<br>
				PO Box 16122 Collins Street West<br>
				Victoria 8007 Australia<br>
			</p>
		</div>	
		<div class="decoration decoration-margins"></div>

		<div class="content">
			<h5>Envato Headquarters</h5>
			<p>
				121 King Street, Melbourne<br>
				Victoria 3000 Australia
			</p>
		</div>

		<div class="decoration decoration-margins"></div>			
		<amp-iframe class="no-bottom" width="600" height="400" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" src="https://maps.google.com/?ie=UTF8&ll=47.595131,-122.330414&spn=0.006186,0.016512&t=h&z=17&output=embed"></amp-iframe>
	</div>
	
	<div class="footer-clear"></div>
	<div class="footer">
		<p>Copyright Enabled. All Rights Reserved</p>
		<div class="footer-socials">
			<a href="#"><i class="fa fa-facebook-square"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-twitter-square"></i></a>
		</div>
	</div>
</body>
</html>