<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>

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
			<h1>Project Title</h1>
			<p class="boxed-text center-text">
				Simple images and text, can easily be directed to another page for more details.
			</p>
		</div>
	</div>	
	<div class="page-title-clear"></div>

	<div class="page-content">
		<amp-img src="images/pictures/3w.jpg" layout="responsive" width="600" height="236"></amp-img>
			<div class="content half-bottom half-top">
				<amp-social-share type="twitter" width="38" height="38"> </amp-social-share>
				<amp-social-share type="facebook" width="38" height="38" data-param-app_id="254325784911610"></amp-social-share>
				<amp-social-share type="email" width="38" height="38"></amp-social-share>
				<amp-social-share type="pinterest" width="38" height="38"></amp-social-share>
			</div>

		<div class="decoration"></div>
		
		<div class="content full-top">
			<h4 class="uppercase ultrabold">Project Title</h4>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae bibendum orci. 
				Nam et urna fringilla lectus aliquet gravida. Mauris scelerisque nisl libero, in commodo
				massa accumsan in. Duis condimentum laoreet turpis a ultrices. Phasellus in sem augue. 
				Phasellus ac venenatis urna. 
			</p>
			<div class="decoration"></div>
		</div>

		<amp-img class="full-bottom" src="images/pictures/1w.jpg" width="600" height="250" layout="responsive"></amp-img>

		<div class="content">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae bibendum orci. 
				Nam et urna fringilla lectus aliquet gravida. Mauris scelerisque nisl libero, in commodo
			</p>
			<div class="blockquote-1 full-bottom">
				<p class="italic">This is a classic, standard, blockquote design, that everyone uses and it's fantastically easy to use. Add your text and the author</p>
				<a href="#">Enabled | ThemeForest</a>
			</div>
		</div>	

		<div class="decoration decoration-margins"></div>

		<div class="content">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae bibendum orci. 
				Nam et urna fringilla lectus aliquet gravida. Mauris scelerisque nisl libero, in commodo
			</p>
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