<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Shopify | Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Fav Icon -->
	<link id="favicon" rel="icon" type="image/png" href="img/favicon.ico" />
	<!-- Google Font Raleway -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:200,300,500,400,600,700,800' rel='stylesheet' type='text/css'>
	<!-- Google Font Dancing Script -->
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
	<!-- Animate CSS -->
	<link rel="stylesheet" type="text/css" href="css/animate.min.css" />
	<!-- simpleLens CSS -->
	<link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css" />
	<!-- Price Slider CSS -->
	<link rel="stylesheet" type="text/css" href="css/jquery-price-slider.css" />
	<!-- MeanMenu CSS -->
	<link rel="stylesheet" type="text/css" href="css/meanmenu.min.css" />
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
	<!-- Nivo Slider CSS -->
	<link rel="stylesheet" type="text/css" href="css/nivo-slider.css" />
	<!-- Stylesheet CSS -->
	<link rel="stylesheet" type="text/css" href="style.css" />
	<!-- Responsive Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div class="header-top"><!--Start Header Top Area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<div class="info">
					<div class="phn-num float-left">
						<i class="fa fa-phone float-left"></i>
						<p>(000)  123  288  456 </p>
					</div>
					<div class="mail-id float-left">
						<i class="fa fa-envelope-o float-left"></i>
						<p><a href="#">info@olongker.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="socials text-center">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div id="top-menu" class="float-right">
					<ul>
						<li><a href="">My Account</a></li>
						<li><a href="">$USD <i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="">Pound</a></li>
								<li><a href="">BDT</a></li>
							</ul>
						</li>
						<li><a href="">English(UK) <i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="">English(USA)</a></li>
								<li><a href="">Bangla</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!--End Header Top Area-->
<div class="header-area"><!--Start Header Area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-lg-3">
				@if(!isset($userData))
				<div class="log-link">
					<p>Well come visitor you can</p>
					<h5><a href="/login">Login</a> or <a href="/login">Create an account</a></h5>
				</div>
				@endif
			</div>
			<div class="col-sm-4 col-lg-6">
				<div class="logo text-center">
					<a href="index.html">
						<img src="img/header/logo.png" alt="" />
						<h4>online jewelry store</h4>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-lg-3">
				<div class="cart-info float-right">
					<a href="cart.html">
						<h5>My cart <span>2</span> items - <span>$390</span></h5>
						<i class="fa fa-shopping-cart"></i>
					</a>
					<div class="cart-hover">
						<ul class="header-cart-pro">
							<li>
								<div class="image"><a href="#"><img alt="cart item" src="img/cart-1.jpg"></a></div>
								<div class="content fix"><a href="#">Product Name</a><span class="price">Price: $130</span><span class="quantity">Quantity: 1</span></div>
								<i class="fa fa-trash delete"></i>
							</li>
							<li>
								<div class="image"><a href="#"><img alt="cart item" src="img/cart-2.jpg"></a></div>
								<div class="content fix"><a href="#">Product Name</a><span class="price">Price: $130</span><span class="quantity">Quantity: 2</span></div>
								<i class="fa fa-trash delete"></i>
							</li>
						</ul>
						<div class="header-button-price">
							<a href="checkout.html"><i class="fa fa-sign-out"></i><span>Check Out</span></a>
							<div class="total-price"><h3>Total Price : <span>$390</span></h3></div>
						</div>
					</div>
				</div>
				<div class="search float-right">
					<input type="text" value="" placeholder="Search Here...." />
					<button class="submit"><i class="fa fa-search"></i></button>
				</div>
			</div>
		</div>
	</div>
</div><!--End Header Area-->

<div class="menu-area"><!--Start Main Menu Area-->
	<div class="container">
		<div class="row">
			<div class="clo-md-12">
				<div class="main-menu hidden-sm hidden-xs">
					<nav>
						<ul>
							<li><a href="/" class="active">Home</a></li>
							<li><a href="#">Pages</a>
								<div class="mega-menu mega-menu-page">
									<div class="column-1 column">
										<ul>
											<li><a href="aboutus">About US</a></li>
											<li><a href="contact">Contact</a></li>
										</ul>
									</div>
									<div class="column-2 column">
										<ul>
											<li><a href="/ProductCart">Cart</a></li>
											<li><a href="/checkout">Checkout</a></li>
										</ul>
									</div>
									<div class="column-3 column">
										<ul>
											<li><a href="/login">Login</a></li>
											<li><a href="/login">Register Account</a></li>
										</ul>
									</div>
									<div class="column-4 column">
										<ul>
											<li><a href="/Shop/searchBy/lanxi">Shop</a></li>
											<li><a href="/wishlist">Wishlist</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="/Shop/searchBy/lanxi">Shop</a>
							</li>
							<li><a href="/Shop/category/Category%201/l2%hi">New Arrivals</a>
								<div class="mega-menu mega-menu-1">
									<div class="column-1 column">
										<ul>
											<li><a href="/Shop/category/Category 1">Category 1</a></li>
										</ul>
									</div>
									<div class="column-2 column">
										<ul>
											<li><a href="/Shop/category/Category 2">Category 2</a></li>
										</ul>
									</div>
									<div class="column-3 column">
										<ul>
											<li><a href="/Shop/category/Category 3">Category 3</a></li>
										</ul>
									</div>
									<div class="column-4 column">
										<ul>
											<li><a href="/Shop/category/Category 1">Category 4</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="portfolio.html">Orders</a>
								<ul class="sub-menu">
									<li><a href="portfolio.html">Track Order</a></li>
									<li><a href="portfolio-2.html">Purchase History</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Discount</a>
								<ul class="sub-menu">
									<li><a href="blog-left-sidebar.html">Rewards</a></li>
									<li><a href="blog-right-sidebar.html">Discount Coupons</a></li>
								</ul>
							</li>
							<li><a href="aboutus">About Us</a></li>
							<li><a href="contact">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-menu hidden-md hidden-lg">
					<nav>
						<ul>
							<li><a href="/" class="active">Home</a>
							</li>
							<li><a href="#">Pages</a>
								<ul>
									<li><a href="/Shop/searchBy/lanxi">Shop</a>
									<li><a href="/ProductCart">Cart</a></li>
									<a href="/ProductCart"><span>Check Out</span></a>
									<li><a href="contact">Contact</a></li>
									<li><a href="aboutus">About US</a></li>
								</ul>
							</li>
							<li><a href="/Shop/searchBy/lanxi">Shop</a></li>
							<li><a href="/Shop/category/Category%201/l2%hi">New Arrivals</a>
							<li><a href="aboutus">About US</a></li>
							<li><a href="contact">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div><!--End Main Menu Area-->

<div class="page-title fix"><!--Start Title-->
	<div class="overlay section">
		<h2>Contact</h2>
	</div>
</div><!--End Title-->
<div class="contact-page page fix"><!--Start Contact Area-->
	<div class="container">
		<div class="row">
			<div class="contact-info col-sm-12">
				<div class="row">
					<div class="col-sm-6">
						<h4>Contact Us</h4>
						<p>perspiciatis unde omnis iste natus error sit voluptatem accm doloremque antium, totam rem aperiam, eaque ipsa perspiciatis unde omnis iste  aque ipsa perspiciatis unde omnis iste </p>
						<div class="info-single">
							<i class="fa fa-map-marker"></i>
							<p>Main town,  Anystreen</p>
							<p>C/A 1254 New Yourk</p>
						</div>
						<div class="info-single">
							<i class="fa fa-phone"></i>
							<p>+012  456  456  456</p>
							<p>+012  356  897  222</p>
						</div>
						<div class="info-single">
							<i class="fa fa-globe"></i>
							<a href="#">info@olongker.com</a>
							<a href="#">www.olongker.com</a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="contact-reduction">
							<img src="img/contact-less.jpg" alt="" />
							<div class="contact-less">
								<h3>UP TO</h3>
								<h3>25%</h3>
								<h3>off</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="map-container col-sm-12">
				<div id="googleMap"></div>
			</div>
			<div class="contact-form col-sm-12">
				<h2>LEAVE A MESSAGE</h2>
				<form action="#">
					<div class="row">
						<div class="col-sm-6">
							<label for="name">Name*</label>
							<input type="text" id="name" />
							<label for="email">E-mail*</label>
							<input type="text" id="email" />
							<label for="phone">Phone*</label>
							<input type="text" id="phone" />
							<label for="subject">Subject*</label>
							<input type="text" id="subject" />
						</div>
						<div class="col-sm-6">
							<label for="message">Message*</label>
							<textarea id="message" rows="7"></textarea>
							<input type="submit" class="submit" value="send"/>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div><!--End Contact Area-->

<div class="brand-area section fix"><!--Start Brand Area-->
	<div class="container">
		<div class="row">
			<div class="section-title">
				<h2>{{$SiteData[30]->data}}</h2>
				<div class="underline"></div>
			</div>
			<div class="brand-slider owl-carousel">
				<div class="brand-item"><img src="{{asset('img/brand/brand-1.png')}}" alt="" /></div>
				<div class="brand-item"><img src="{{asset('img/brand/brand-2.png')}}" alt="" /></div>
				<div class="brand-item"><img src="{{asset('img/brand/brand-3.png')}}" alt="" /></div>
				<div class="brand-item"><img src="{{asset('img/brand/brand-4.png')}}" alt="" /></div>
				<div class="brand-item"><img src="{{asset('img/brand/brand-5.png')}}" alt="" /></div>
				<div class="brand-item"><img src="{{asset('img/brand/brand-1.png')}}" alt="" /></div>
				<div class="brand-item"><img src="{{asset('img/brand/brand-2.png')}}" alt="" /></div>
				<div class="brand-item"><img src="{{asset('img/brand/brand-3.png')}}" alt="" /></div>
				<div class="brand-item"><img src="{{asset('img/brand/brand-4.png')}}" alt="" /></div>
				<div class="brand-item"><img src="{{asset('img/brand/brand-5.png')}}" alt="" /></div>
			</div>
		</div>
	</div>
</div><!--End Brand Area-->

<div class="support-area section fix"><!--Start Support Area-->
	<div class="container">
		<div class="row">
			<div class="support col-sm-3">
				<i class="fa fa-thumbs-up"></i>
				<h3>High quality</h3>
			</div>
			<div class="support col-sm-3">
				<i class="fa fa-bus"></i>
				<h3>Fast Delivery</h3>
			</div>
			<div class="support col-sm-3">
				<i class="fa fa-phone"></i>
				<h3>24/7 support</h3>
			</div>
			<div class="support col-sm-3">
				<i class="fa fa-random"></i>
				<h3>Exchange</h3>
			</div>
		</div>
	</div>
</div><!--Start Support Area-->

<div class="footer-top-area fix"><!--Start Footer top area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="footer-about">
					<a href="/">
					<div class="image">
						<img src="img/header/logo.png" alt="" />
						<h3>{{$SiteData[6]->data}}</h3>
					</div>
					</a>
					<p>Site Informational Data Area</p>
				</div>
				<div class="footer-contact">
					<div class="single-contact">
						<div class="icon">
							<i class="fa fa-map-marker"></i>
						</div>
						<div class="details">
							<p>Main town, Anystreen</p>
							<p>C/A 1254 New Yourk</p>
						</div>
					</div>
					<div class="single-contact">
						<div class="icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="details">
							<p>{{$SiteData[0]->data}}</p>
							<p>{{$SiteData[0]->data}}</p>
						</div>
					</div>
					<div class="single-contact">
						<div class="icon">
							<i class="fa fa-dribbble"></i>
						</div>
						<div class="details">
							<a href="#">{{$SiteData[1]->data}}</a>
							<a href="#">www.example.com</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="footer-quick-link footer-links">
					<h2>QUICK LINK</h2>
					<ul>
						<li><a href="/Shop/searchBy/lanxi">Shop</a>
						<li><a href="/wishlist">Wishlist</a></li>
						<li><a href="/ProductCart">Cart</a></li>
						<li><a href="/Shop/category/Category%201/l2%hi">New Arrivals</a>
						<li><a href="aboutus">About US</a></li>
						<li><a href="contact">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="row">
					<div class="col-sm-8 footer-support footer-links">
                        <a href="{{$SiteData[2]->data}}"><i class="fa fa-facebook"></i></a></br>
						<a href="{{$SiteData[3]->data}}"><i class="fa fa-twitter"></i></a></br>
						<a href="{{$SiteData[4]->data}}"><i class="fa fa-linkedin"></i></a></br>
						<a href="{{$SiteData[5]->data}}"><i class="fa fa-google-plus"></i></a>
					</div>
					<div class="col-sm-4 footer-account footer-links">
						<h2>My Account</h2>
						@if(isset($userData))
								<ul>
									<li><a href="/profile"><i class="fa fa-child"> My Account </i></a></li>
									<li><a href="/wishlist"><i class="	fa fa-bookmark"> Wishlist </i></a></li>
									<li><a href="/logout"><i class="fa fa-sign-out"> Sign out </i></a></li>
									@if($userData->type=='admin')
										<li><a href="/Admin/Home/Edit"><i class="fa fa-bank"> Admin Home </i></a></li>
									@endif
								</ul>
						@else
							<a href="/login"><strong>Create an Account</strong></a><h3><span id="tz"></span></h3>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<!-- jQuery 2.1.4 -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Owl Carousel JS -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!--countTo JS -->
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<!-- mixitup JS -->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<!-- magnific popup JS -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<!-- Appear JS -->
<script type="text/javascript" src="js/jquery.appear.js"></script>
<!-- MeanMenu JS -->
<script type="text/javascript" src="js/jquery.meanmenu.min.js"></script>
<!-- Nivo Slider JS -->
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<!-- Scrollup JS -->
<script type="text/javascript" src="js/jquery.scrollup.min.js"></script>
<!-- simpleLens JS -->
<script type="text/javascript" src="js/jquery.simpleLens.min.js"></script>
<!-- Price Slider JS -->
<script type="text/javascript" src="js/jquery-price-slider.js"></script>
<!-- WOW JS -->
<script type="text/javascript" src="js/wow.min.js"></script>
<!--Google Map APi-->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
	function initialize() {
	  var mapOptions = {
		zoom: 14,
		scrollwheel: false,
		center: new google.maps.LatLng(40.7127840, -74.0059410)
	  };
	  var map = new google.maps.Map(document.getElementById('googleMap'),
		  mapOptions);
	  var marker = new google.maps.Marker({
		position: map.getCenter(),
		icon: 'img/map-marker.png',
		map: map
	  });
	}
	google.maps.event.addDomListener(window, 'load', initialize);				
</script>
<script>
	new WOW().init();
</script>	
<!-- Main JS -->
<script type="text/javascript" src="js/main.js"></script>

</body>

</html>