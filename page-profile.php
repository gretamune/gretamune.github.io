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
	
	<div class="page-content">
		<div class="page-profile profile-overlay">
			<amp-img src="images/profile.jpg" width="480" height="640" layout="responsive"></amp-img>
			<div class="profile-gradient"></div>
			<div class="profile-header">
				<h1 class="center-text thin">Karla Black</h1>
				<h6 class="center-text thiner uppercase">PHOTOGRAPHY MODEL</h6>
				<h5 class="center-text half-bottom"><i class="fa fa-map-marker"></i>USA, California</h5>
				<p class="center-text boxed-text thin">
					Dedicated and energetic Photographer with years of experience in custom and specialized photography.
				</p>
			</div>
			<a href="#" class="button button-center button-m bg-pink-dark full-bottom">Follow Karla</a>

			<div class="decoration decoration-margins"></div>

			<div class="profile-followers full-bottom">
				<a href="#" class="center-text">10k<em class="center-text">Posts</em></a>
				<a href="#" class="center-text">101k<em class="center-text">Followers</em></a>
				<a href="#" class="center-text">235k<em class="center-text">Following</em></a>
				<div class="clear"></div>
			</div>
		</div>

		<div class="decoration decoration-margins"></div>

		<div class="content full-bottom">
			<h4 class="center-text">Follow on Social Networks</h4>
			<p class="center-text boxed-text">Get in touch with Karla or follow her social feed for the latest news and information.</p>
			<div class="social-icons">
				<a href="#" class="color-white facebook-bg center-text"><i class="fa fa-facebook"></i></a>
				<a href="#" class="color-white linkedin-bg center-text"><i class="fa fa-linkedin"></i></a>
				<a href="#" class="color-white twitter-bg center-text"><i class="fa fa-twitter"></i></a>
				<div class="clear"></div>
			</div>
		</div>

		<div class="decoration decoration-margins"></div>

		<div class="content">
			<div class="gallery gallery-square half-bottom">
				<amp-image-lightbox id="lightbox1"layout="nodisplay"></amp-image-lightbox>
				 <amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-cards.png" width="800" height="600"></amp-img>
				 <amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-stories.png" width="800" height="600"></amp-img>
				 <amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-material.png" width="800" height="600"></amp-img>
				 <amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-home.png" width="800" height="600"></amp-img>
				<div class="clear"></div>
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