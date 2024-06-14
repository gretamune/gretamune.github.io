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
		<a href="pages.php" class="inactive-item"><i class="fa fa-file-o"></i><em>Pages</em></a>
		<a href="gallery.php" class="active-item"><i class="fa fa-camera"></i><em>Gallery</em></a>
		<a href="home.php" class="inactive-item"><i class="fa fa-home"></i><em>Home</em></a>
		<a href="features.php" class="inactive-item"><i class="fa fa-bolt"></i><em>Features</em></a>
		<a href="contact.php" class="inactive-item"><i class="fa fa-envelope"></i><em>Contact</em></a>
	</div>
	
	<div class="page-title page-title-transparent">
		<div class="page-title-center">
			<h1>Gallery</h1>
			<p class="boxed-text center-text">
				Simple images and text, can easily be directed to another page for more details.
			</p>
		</div>
	</div>	

	<div class="boxed-content">
		<div class="gallery gallery-square gallery-border full-bottom">
			<amp-image-lightbox id="lightbox1"layout="nodisplay"></amp-image-lightbox>
			<amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-cards.png" width="800" height="600"></amp-img>
			<amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-stories.png" width="800" height="600"></amp-img>
			<amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-material.png" width="800" height="600"></amp-img>
			<amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-home.png" width="800" height="600"></amp-img>
			<amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-news.png" width="800" height="600"></amp-img>
			<amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-pro.png" width="800" height="600"></amp-img>
			<amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-yummy.png" width="800" height="600"></amp-img>
			<amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-insta.png" width="800" height="600"></amp-img>
			<div class="clear"></div>
		</div>
	</div>
	
	<div class="footer footer-transparent">
		<p>Copyright Enabled. All Rights Reserved</p>
		<div class="footer-socials">
			<a href="#"><i class="fa fa-facebook-square"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-twitter-square"></i></a>
		</div>
	</div>
</body>
</html>