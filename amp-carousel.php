<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
<script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
<script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>

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
			<h1>AMP Carousel</h1>
			<p class="boxed-text center-text">
				Google AMP included plugin, styled by us to match your needs.
			</p>
			<a href="features.php">Back to Features</a>
		</div>
	</div>	
	<div class="page-title-clear"></div>
	
	<div class="page-content">
		<div class="content full-top">
			<h4>Classic Image Slider</h4>
			<p>
				Simple image slider, a must have for any website.
			</p>
		</div>
		<div class="home-slider full-bottom">
			<amp-carousel  width="600" height="375" layout="responsive" type="slides" controls autoplay loop delay="3000">
				<div>
					<amp-img class="responsive-img" src="images/pictures/8.jpg" layout="fill"></amp-img>
				</div>
				<div>
					<amp-img class="responsive-img" src="images/pictures/7.jpg" layout="fill"></amp-img>
				</div>
				<div>
					<amp-img class="responsive-img" src="images/pictures/10.jpg" layout="fill"></amp-img>
				</div>
			</amp-carousel>
		</div>

		<div class="content">
			<h4>Thumbnail Carousel</h4>
			<p>Useful for showing off multiple products in one line</p>
		</div>

		<amp-carousel class="full-bottom" height="150" layout="fixed-height" type="carousel">
			<amp-img src="images/pictures/1t.jpg" width="150" height="150"></amp-img>
			<amp-img src="images/pictures/1t.jpg" width="150" height="150"></amp-img>
			<amp-img src="images/pictures/2t.jpg" width="150" height="150"></amp-img>
			<amp-img src="images/pictures/3t.jpg" width="150" height="150"></amp-img>
			<amp-img src="images/pictures/4t.jpg" width="150" height="150"></amp-img>
		</amp-carousel>
		
		<a href="#" class="back-to-top">Back to Top</a>
	</div>
	
	<div class="footer">
		<p>Copyright Enabled. All Rights Reserved</p>
		<div class="footer-socials">
			<a href="#"><i class="fa fa-facebook-square"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-twitter-square"></i></a>
		</div>
	</div>
	<div class="footer-clear"></div>

					
</body>
</html>





























