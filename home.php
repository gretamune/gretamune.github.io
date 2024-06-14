<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
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
	<div class="landing-overlay"></div>
	<div class="landing-bg"></div>
	
	<div class="menu-fixed">
		<a href="pages.php" class="inactive-item"><i class="fa fa-file-o"></i><em>Pages</em></a>
		<a href="gallery.php" class="inactive-item"><i class="fa fa-camera"></i><em>Gallery</em></a>
		<a href="home.php" class="active-item"><i class="fa fa-home"></i><em>Home</em></a>
		<a href="features.php" class="inactive-item"><i class="fa fa-bolt"></i><em>Features</em></a>
		<a href="contact.php" class="inactive-item"><i class="fa fa-envelope"></i><em>Contact</em></a>
	</div>
	
	<div class="page-title">
		<div class="page-title-center">
			<h1>Welcome</h1>
			<p class="boxed-text center-text">
				Meet AMP Photo.An absolutely gorgeous Mobile Template powered by the awesome Google AMP. 
			</p>
		</div>
	</div>	
	<div class="page-title-clear"></div>
	<div class="page-content">
		<div class="home-slider">
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
		
		<div class="boxed-content">
			<div class="container">
				<h1 class="main-heading">Meet AMP Photo</h1>
				<em class="main-sub-heading">Quality above Everything</em>
				<div class="thin-deco"></div>
				<p class="center-text boxed-text">
					Over 25,000 customers can vouch for our quality items, and fast support. We made it here because of you, and we'll always respect you.	
				</p>
				<a href="#" class="button button-s bg-red-dark button-center uppercase ultrabold">Read More</a>
			</div>
			
			<div class="decoration"></div>
			
			<div class="icon-column">
				<h1><i class="fa fa-cog color-blue-dark"></i>Visionary Code</h1>
				<p>Using only one external stylesheet, our product is still be AMP Valid and much easier to edit even by novice users. </p>

				<h1><i class="fa fa-heart color-red-dark"></i>24/7 Support</h1>
				<p>We're always available tp help our customers. Our customer's happiness translates to our success. </p>

				<h1><i class="fa fa-star color-yellow-dark"></i>Elite Quality</h1>
				<p>The undisputed best seller of the mobile category. We've ranked over 10 years of experience catering for mobiles. </p>
			</div>
			
			
			<div class="decoration"></div>
			<h1 class="main-heading">The Category Leader</h1>
			<em class="main-sub-heading">Over 100 Products to Choose From</em>
			<div class="thin-deco"></div>				
			<p class="center-text boxed-text">
				We've built every style you can think of, just take a look in our portfolio. You're sure to find your style.
			</p>
			
			<div class="gallery gallery-square half-bottom">
				<amp-image-lightbox id="lightbox1"layout="nodisplay"></amp-image-lightbox>
				 <amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-cards.png" width="800" height="600"></amp-img>
				 <amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-stories.png" width="800" height="600"></amp-img>
				 <amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-material.png" width="800" height="600"></amp-img>
				 <amp-img class="gallery-thumb" on="tap:lightbox1" role="button" tabindex="0" layout="responsive" src="images/products/amp-home.png" width="800" height="600"></amp-img>
				 <div class="clear"></div>
			</div>

			<div class="decoration decoration-margin"></div>
			<h1 class="main-heading">Happy Customers</h1>
			<em class="main-sub-heading">25.000 and Growing Strong</em>
			<div class="thin-deco"></div>	
			

			<div class="testimonial full-bottom">
				<amp-carousel class="slider" width="600" height="275" layout="responsive" type="slides" controls autoplay loop delay="3000">
					<div>
						<p>You can't go wrong with this template. Author has outstanding code quality and amazing support to boot. Will never leave you hanging. Get this now!</p>
						<em><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></em>
					</div>
					<div>
						<p>My first AMP template, it looks very nice, it's well documented, beautifully written code and the support was lightning fast to answer my questions.</p>
						<em><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></em>
					</div>
					<div>
						<p>The code is always great with any Enabled template, but its the customer support that wins me over all the time. So responsive and helpful!</p>
						<em><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></em>
					</div>
				</amp-carousel>
			</div>
		</div>
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





























