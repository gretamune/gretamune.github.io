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
	
	<div class="boxed-content">
		<div class="timeline">
			<div class="timeline-icon bg-red-dark"><i class="fa fa-pencil"></i></div>		
			<div class="container">
				<h2 class="center-text uppercase ultrabold">Timeline</h2>
				<p class="center-text half-bottom">
					Timelines are awesome, easy to use, and simple to integrate. Just copy and paste.
				</p>
				<a href="#" class="button button-m button-center bg-red-dark">Button</a>
			</div>	
			
			<div class="timeline-spacer"></div>
			
			<div class="timeline-icon bg-blue-dark"><i class="fa fa-bolt"></i></div>		
			<div class="container">
				<h2 class="center-text uppercase ultrabold no-bottom">AMP Powered</h2>
				<p class="center-text full-bottom">
					Timelines are awesome, easy to use, and simple to integrate. Just copy and paste.
				</p>

				<amp-img class="half-bottom" src="images/pictures/8.jpg" width="700" height="466" layout="responsive"></amp-img>
				<p class="center-text half-bottom">
					Amp is easy to use, and we made bullet proof and filled with custom features.
				</p>
			</div>
			
			<div class="timeline-spacer"></div>

			<div class="timeline-icon bg-yellow-dark"><i class="fa fa-quote-right"></i></div>		
			<div class="container">
				<div class="blockquote-3 full-bottom">
					<h5 class="center-text">Alexander Stranger</h5>
					<div class="ratings full-top full-bottom">
						<i class="color-yellow-dark fa fa-star"></i>
						<i class="color-yellow-dark fa fa-star"></i>
						<i class="color-yellow-dark fa fa-star"></i>
						<i class="color-yellow-dark fa fa-star"></i>
						<i class="color-yellow-dark fa fa-star"></i>
					</div>
					<p class="center-text half-bottom">
						Template is beautify, easy to use, and very well documented, but he best has been the customer support. Prompt, helpful replies.
					</p>
				</div>
			</div>		
			
			<div class="timeline-spacer"></div>

			<div class="timeline-icon bg-green-dark"><i class="fa fa-camera"></i></div>		
			<div class="container">
				<h2 class="center-text uppercase ultrabold">Gallery</h2>
				<p class="center-text full-bottom">
					You can even include the awesome AMP lightbox inside. It's easy.
				</p>

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
		
		<div class="small-deco"></div>
		
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