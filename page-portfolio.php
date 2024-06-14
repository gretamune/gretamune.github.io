<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>

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
		<a href="pages.php" class="active-item"><i class="fa fa-file-o"></i><em>Pages</em></a>
		<a href="gallery.php" class="inactive-item"><i class="fa fa-camera"></i><em>Gallery</em></a>
		<a href="home.php" class="inactive-item"><i class="fa fa-home"></i><em>Home</em></a>
		<a href="features.php" class="inactive-item"><i class="fa fa-bolt"></i><em>Features</em></a>
		<a href="contact.php" class="inactive-item"><i class="fa fa-envelope"></i><em>Contact</em></a>
	</div>
	
	<div class="page-title">
		<div class="page-title-center">
			<h1>Portfolio</h1>
			<p class="boxed-text center-text">
				Simple images and text, can easily be directed to another page for more details.
			</p>
		</div>
	</div>	
	<div class="page-title-clear"></div>

	<div class="page-content">
		<div class="portfolio-item">
			<amp-img src="images/pictures/3w.jpg" layout="responsive" width="600" height="236"></amp-img>
			<div class="content">
				<h4 class="half-top uppercase ultrabold">Project Title</h4>
				<p>
					Suspendisse interdum, est a maximus imperdiet, dolor ipsum consequat purus, 
					vitae posuere dui lectus id erat. Nulla sed suscipit lorem. Praesent ultricies eget.
				</p>
				<a href="page-portfolio-selected.php" class="button button-s bg-red-dark button-center uppercase ultrabold">Read More</a>
			</div>
		</div>
		<div class="portfolio-item">
			<amp-img src="images/pictures/1w.jpg" layout="responsive" width="600" height="236"></amp-img>
			<div class="content">
				<h4 class="half-top uppercase ultrabold">Project Title</h4>
				<p>
					Suspendisse interdum, est a maximus imperdiet, dolor ipsum consequat purus, 
					vitae posuere dui lectus id erat. Nulla sed suscipit lorem. Praesent ultricies eget.
				</p>
				<a href="page-portfolio-selected.php" class="button button-s bg-green-dark button-center uppercase ultrabold">Read More</a>
			</div>
		</div>
		<div class="portfolio-item">
			<amp-img src="images/pictures/2w.jpg" layout="responsive" width="600" height="236"></amp-img>
			<div class="content">
				<h4 class="half-top uppercase ultrabold">Project Title</h4>
				<p>
					Suspendisse interdum, est a maximus imperdiet, dolor ipsum consequat purus, 
					vitae posuere dui lectus id erat. Nulla sed suscipit lorem. Praesent ultricies eget.
				</p>
				<a href="page-portfolio-selected.php" class="button button-s bg-blue-dark button-center uppercase ultrabold">Read More</a>
			</div>
		</div>
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