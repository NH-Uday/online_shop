<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Shopify | Home Edit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Fav Icon -->
	<link id="favicon" rel="icon" type="image/png" href="img/favicon.ico" />
	<!-- Google Font Raleway -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:200,300,500,400,600,700,800' rel='stylesheet' type='text/css'>
	<!-- Google Font Dancing Script -->
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}" />
	<!-- Animate CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}" />
	<!-- simpleLens CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.simpleLens.css') }}" />
	<!-- Price Slider CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-price-slider.css" />') }}
	<!-- MeanMenu CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/meanmenu.min.css') }}" />
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}" />
	<!-- Nivo Slider CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/nivo-slider.css') }}" />
	<!-- Stylesheet CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}" />
	<!-- Responsive Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
	
	<script src="{{asset('js/jquery-3.4.1.js')}}"></script>
	<script src="{{asset('js/myScript.js')}}"></script>
	<meta name="csrf-token" content="{{csrf_token()}}">
	
</head>
<body>
<div class="header-top"><!--Start Header Top Area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<div class="info">
					<div class="phn-num float-left">
						<i class="fa fa-phone float-left"></i>
						<input type="text" style="color:black;" value="" placeholder="{{$SiteData[0]->data}}" id="contact1"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('contact1')"></i></button>
					</div>
					<div class="mail-id float-left">
						<i class="fa fa-envelope-o float-left"></i>
						<input type="text" style="color:black;" value="" placeholder="{{$SiteData[1]->data}}" id="email1"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('email1')"></i></button>
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
					<div  class="float-right">
						<ul>
							@if(isset($userData))
								<ul>
									<li><input type="text" style="color:black;" value="" placeholder="Type Facebook Link" id="fblink"/>
									<button><i style="color:lime;" class="fa fa-check" onclick="SiteChanger('{{csrf_token()}}','fblink')"></i></button></li>
									<li><input type="text" style="color:black;" value="" placeholder="Type Twitter Link" id="twtlink"/>
									<button><i style="color:lime;" class="fa fa-check" onclick="SiteChanger('{{csrf_token()}}','twtlink')"></i></button></li>
									<li><input type="text" style="color:black;" value="" placeholder="Type LinkedIn Link" id="linkedin"/>
									<button><i style="color:lime;" class="fa fa-check" onclick="SiteChanger('{{csrf_token()}}','linkedin')"></i></button></li>
									<li><input type="text" style="color:black;" value="" placeholder="Type Google Link" id="gglink"/>
									<button><i style="color:lime;" class="fa fa-check" onclick="SiteChanger('{{csrf_token()}}','gglink')"></i></button></li>
								</ul>
							@else
								<a href="/login">Do you have an Account? or Sign Up</a>
							@endif
						</ul>
					</div>
				
			</div>
			<div class="col-sm-12 col-md-4">
				<div id="top-menu" class="float-right">
					<ul>
						@if(isset($userData))
							<li><a href="/profile"><h4><small>Welcome {{$userData->username}} ! </small><span id="tz"> </span> &nbsp <i class="fa fa-angle-down"></i></h4></a>
								<ul>
									<li><a href="/profile"><i class="fa fa-child"> Profile </i></a></li>
									<li><a href="/wishlist"><i class="	fa fa-bookmark"> Wishlist </i></a></li>
									<li><a href="/logout"><i class="fa fa-sign-out"> Sign out </i></a></li>
									@if($userData->type=='admin')
										<li><a href="/"><i class="fa fa-sign-out"> Site Home </i></a></li>
									@endif
								</ul>
							</li>
						@else
							Welcome<a href="/login"> Guest ! </a> <h3><span id="tz"></span></h3>
						@endif
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
					<a href="/">
						<img src="{{ asset('img/header/logo.png') }}" alt="" />
					</a>
						<form action="/logoChange" method="post" enctype="multipart/form-data"> {{csrf_field()}} <input type="file" name="logoFile"><input type="submit" value="Change Site Logo"></form>
						<input type="text" style="color:black;" value="" placeholder="{{$SiteData[6]->data}}" id="sublink"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('sublink')"></i></button>
				</div>
			</div>
			<div class="col-sm-4 col-lg-3">
				<div class="cart-info float-right">
					@if(isset($userData))
					<a href="/ProductCart">
						<h5>My cart ( <span>{{count($CartData)}}</span> items ) </h5>
						<i class="fa fa-shopping-cart"></i>
					</a>
					@endif
					<div class="cart-hover">
						<ul class="header-cart-pro">
						
							@php($tot=0)
							@foreach($CartData as $dt)
							<li>
								<div class="image"><a href="/product-details/{{$dt->prod_id}}"><img alt="cart item" src="img/cart-1.jpg"></a></div>
								<div class="content fix"><a href="/product-details/{{$dt->prod_id}}">{{$dt->prod_name}}</a><span class="price">Price: ${{$dt->prod_MRP_price * $dt->prod_quantity}}</span><span class="quantity">Quantity: {{$dt->prod_quantity}}</span></div> @php($tot=$tot+$dt->prod_MRP_price*$dt->prod_quantity)
							</li>
							@endforeach
							
						</ul>
						<div class="header-button-price">
							<a href="/ProductCart"><i class="fa fa-sign-out"></i><span>Check Out</span></a>
							<div class="total-price"><h3>Total Price : <span>${{$tot}}</span></h3></div>
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

<!-- HOME SLIDER -->
<div class="slider-wrap home-1-slider">
	<div id="mainSlider" class="nivoSlider slider-image">
		<img src="{{ asset('img/slider/1.jpg') }}" alt="main slider" title="#htmlcaption1"/>
		<img src="{{ asset('img/slider/2.jpg') }}" alt="main slider" title="#htmlcaption2"/>
	</div>
	<div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
		<div class="slider-progress"></div>							
		<div class="slide1-text slide-text">
			<div class="middle-text">
				<div class="cap-title wow slideInRight" data-wow-duration=".9s" data-wow-delay="0s">
					<p><form action="/slider1Change" method="post" enctype="multipart/form-data"> {{csrf_field()}} <input type="file" name="slider1File"><input type="submit" value="Change Slider Image"></form></p>
					<h1><input type="text" style="color:black;" value="" placeholder="{{$SiteData[7]->data}}" id="slider1head"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('slider1head')"></i></button></h1>
				</div>
				<div class="cap-dec wow slideInRight" data-wow-duration="1.3s" data-wow-delay="0s">
					<h2><input type="text" style="color:black;" value="" placeholder="{{$SiteData[8]->data}}" id="slider1body"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('slider1body')"></i></button></h2>
				</div>	
				<div class="cap-readmore wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0s">
					<a href="#">Shop Now</a>
					<select id="btnlink1" style="color:black;">
						<option value="" readonly> Select Link for this button </option>
						@foreach($CatGroup as $dt)
							<option value="/Shop/category/{{$dt->prod_cat}}"> {{$dt->prod_cat}} </option>
						@endforeach
					</select>
				</div>	
			</div>	
		</div>						
	</div>
	<div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
		<div class="slider-progress"></div>					
		<div class="slide2-text slide-text">
			<div class="middle-text">
				<div class="cap-title wow bounceInDown" data-wow-duration=".9s" data-wow-delay="0s">
					<p><form action="/slider2Change" method="post" enctype="multipart/form-data"> {{csrf_field()}} <input type="file" name="slider2File"><input type="submit" value="Change Slider Image"></form></p>
					<h1><input type="text" style="color:black;" value="" placeholder="{{$SiteData[10]->data}}" id="slider2head"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('slider2head')"></i></button></h1>
				</div>
				<div class="cap-dec wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0s">
					<h2><input type="text" style="color:black;" value="" placeholder="{{$SiteData[11]->data}}" id="slider2body"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('slider2body')"></i></button></h2>
				</div>	
				<div class="cap-readmore wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
					<a href="#">Shop Now</a>
				</div>										
			</div>										
		</div>
	</div>
</div>

                        <!-- WEEKLY or RECENT -->
<!-- HOME SLIDER -->
<div class="featured-product section fix"><!--start Featured Product Area-->
	<div class="container">
		<div class="row">
			<div class="section-title">
				<h2><input type="text" style="color:black;" value="" placeholder="{{$SiteData[25]->data}}" id="ProdShowTitle1"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('ProdShowTitle1')"></i></button></h2>
				<div class="underline"></div>
			</div>
			<div class="col-sm-12">
			
			
				<!-- Featured slider Area Start -->
				<div class="feature-pro-slider owl-carousel">
					
					@foreach($prodData as $dt)
					<!-- Single Product Start -->
					<div class="product-item fix">
						<div class="product-img-hover">
							<!-- Product image -->
							<a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{ asset('img/featured/1.jpg') }}" alt="featured" /></a>
							<!-- Product action Btn -->
							<div class="product-action-btn">
								<a class="favorite" ><i class="fa fa-heart-o" onclick="AddWish('{{csrf_token()}}','{{$dt->prod_id}}')"></i></a>
								<a class="add-cart" ><i class="fa fa-shopping-cart" onclick="AddCart('{{csrf_token()}}','{{$dt->prod_id}}')"></i></a>
							</div>
							<span id="sp-{{$dt->prod_id}}"></span>
						</div>
						<div class="pro-name-price-ratting">
							<!-- Product Name -->
							<div class="pro-name">
								<a href="/product-details/{{$dt->prod_id}}">{{$dt->prod_name}}</a>
							</div>
							<!-- Product Ratting -->
							<div class="pro-ratting">
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star-half-o"></i>
							</div>
							<!-- Product Price -->
							<div class="pro-price fix">
								<p><span class="old">$200</span><span class="new">{{$dt->prod_MRP_price}}</span></p>
							</div>
						</div>
					</div><!-- Single Product End -->
					
					@endforeach
					
				</div><!-- Featured slider Area End -->
			</div>
		</div>
	</div>
</div><!--End Featured Product Area-->

                              <!-- Categorized -->

<div class="banner-area fix"><!-- Product Offer Area Start -->
	<div class="col-sm-6 sin-banner">
		<a>
			<img src="{{ asset('img/offer/offer-1.jpg') }}" alt="" />
			<div class="wrap">
				<p><form action="/cat1Change" method="post" enctype="multipart/form-data"> {{csrf_field()}} <input type="file" name="cat1File"><input type="submit" value="Save Image"></form></p>
				<h2>Category 1</h2>
				<p><input type="text" style="color:black;" value="" placeholder="{{$SiteData[14]->data}}" id="cat1sub"/>
				<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('cat1sub')"></i></button></p>
				<p>{{$SiteData[14]->data}}</p>
			</div>
		</a>
	</div>
	<div class="col-sm-4 sin-banner">
		<a >
			<img src="{{ asset('img/offer/offer-2.jpg') }}" alt="" />
			<div class="wrap">
				<p><form action="/cat2Change" method="post" enctype="multipart/form-data"> {{csrf_field()}} <input type="file" name="cat2File"><input type="submit" value="Save Image"></form></p>
				<h2>Category 2</h2>
				<p><input type="text" style="color:black;" value="" placeholder="{{$SiteData[16]->data}}" id="cat2sub"/>
				<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('cat2sub')"></i></button></p>
				<p>{{$SiteData[16]->data}}</p>
			</div>
		</a>
	</div>
	<div class="col-sm-2 hidden-xs sin-banner text-1">
		<img src="{{ asset('img/offer/banner-bg.jpg') }}" alt="" />
		<div class="banner-text">
			<h1><span>New</span></h1>
			<h2>Arrivals</h2>
			<p>perspiciatis unde omnis iste natus error sit voluptatem accm doloremque antium</p>
			<a href="#">Shop Now</a>
		</div>
	</div>
	<div class="col-sm-2 hidden-xs sin-banner clear text-2">
		<img src="{{ asset('img/offer/banner-bg-2.jpg') }}" alt="" />
		<div class="banner-text">
			<h1>Sales <span>Up to</span></h1>
			<h2><span>30%</span>off</h2>
			<a href="#">Shop Now</a>
		</div>
	</div>
	<div class="col-sm-6 sin-banner">
		<a>
			<img src="{{ asset('img/offer/offer-3.jpg') }}" alt="" />
			<div class="wrap">
				<p><form action="/cat3Change" method="post" enctype="multipart/form-data"> {{csrf_field()}} <input type="file" name="cat3File"><input type="submit" value="Save Image"></form></p>
				<h2>Category 3</h2>
				<p><input type="text" style="color:black;" value="" placeholder="{{$SiteData[18]->data}}" id="cat3sub"/>
				<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('cat3sub')"></i></button></p>
				<p>{{$SiteData[18]->data}}</p>
			</div>
		</a>
	</div>
	<div class="col-sm-4 sin-banner">
		<a>
			<img src="{{ asset('img/offer/offer-4.jpg') }}"" alt="" />
			<div class="wrap">
				<p><form action="/cat4Change" method="post" enctype="multipart/form-data"> {{csrf_field()}} <input type="file" name="cat4File"><input type="submit" value="Save Image"></form></p>
				<h2>Category 4</h2>
				<p><input type="text" style="color:black;" value="" placeholder="{{$SiteData[20]->data}}" id="cat4sub"/>
				<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('cat4sub')"></i></button></p>
				<p>{{$SiteData[20]->data}}</p>
			</div>
		</a>
	</div>
</div><!-- Product Offer Area End -->

								<!-- MASS FEATURED PRODUCTS -->

<div class="tab-product-area section fix"><!--Start Product Area-->
	<div class="container">
		<div class="row">
			<!-- Nav tabs -->
			<ul class="tabs-list" role="tablist">
				<li class="active">
				<a href="#trending" data-toggle="tab">		<input type="text" style="color:black;" value="" placeholder="{{$SiteData[26]->data}}" id="ProdShowTitle2"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('ProdShowTitle2')"></i></button></a></li>
				<!--<li><a href="#feature" data-toggle="tab">	FEATURED</a></li>
				<li><a href="#b-sales" data-toggle="tab">	BEST SELLERS</a></li>-->>
				<li><a href="#new" data-toggle="tab">		<input type="text" style="color:black;" value="" placeholder="{{$SiteData[27]->data}}" id="ProdShowTitle3"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('ProdShowTitle3')"></i></button></a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
			
				<div class="tab-pane fade in active" id="trending">
					<div class="tab-pro-slider trending-product owl-carousel">
						
						@foreach($trendProd as $dt)
						
						<div class="single-product-item">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{ asset('img/product/2.jpg') }}" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="/product-details/{{$dt->prod_id}}">{{$dt->prod_name}}</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">${{$dt->prod_MRP_price}}</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
							
						@endforeach
							
					</div>
				</div>
			
				<div class="tab-pane fade" id="new">
					<div class="tab-pro-slider new-product owl-carousel">
					
						@foreach($prodData as $dt)
						
						<div class="single-product-item fix">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{ asset('img/product/1.jpg') }}" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="/product-details/{{$dt->prod_id}}">{{$dt->prod_name}}</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">{{$dt->prod_MRP_price}}</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							
						</div>
						
						@endforeach
						
					</div>
				</div>
				
				
				<div class="tab-pane fade" id="feature">
					<div class="tab-pro-slider feature-product owl-carousel">
						<div class="single-product-item fix">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item fix">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item fix">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/4.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/1.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item fix">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/6.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/7.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item fix">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item fix">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item fix">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/4.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/1.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item fix">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/6.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/7.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="b-sales">
					<div class="tab-pro-slider best-product owl-carousel">
						<div class="single-product-item">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/10.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/1.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/4.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/6.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/10.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/1.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/4.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/6.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
						<div class="single-product-item">
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="img/product/2.jpg" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="product-item fix">
								<div class="product-img-hover">
									<!-- Product image -->
									<a href="product-details.html" class="pro-image fix"><img src="{{ asset('img/product/2.jpg') }}" alt="product" /></a>
									<!-- Product action Btn -->
									<div class="product-action-btn">
										<a class="quick-view" href="#"><i class="fa fa-search"></i></a>
										<a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
										<a class="add-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
								<div class="pro-name-price-ratting">
									<!-- Product Name -->
									<div class="pro-name">
										<a href="product-details.html">Product Name Demo</a>
									</div>
									<!-- Product Ratting -->
									<div class="pro-ratting">
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star"></i>
										<i class="on fa fa-star-half-o"></i>
									</div>
									<!-- Product Price -->
									<div class="pro-price fix">
										<p><span class="old">$165</span><span class="new">$150</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--End Product Area-->

<!--............................ Postcad -->

<div class="magic-area fix"><!--Start Magic Area-->
	<div class="col-sm-12 col-md-6 image">
		<a href="#"><img src="{{ asset('img/magic.jpg') }}" alt="magic" /></a>
		<p><form action="/postcadChange" method="post" enctype="multipart/form-data"> {{csrf_field()}} <input type="file" name="postcadFile"><input type="submit" value=" Save postcad! "></form></p>
	</div>
	<div class="col-sm-12 col-md-6 content">
		<h2><input type="text" style="color:black;" value="" placeholder="{{$SiteData[21]->data}}" id="postcad"/>
			<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('postcad')"></i></button></h2>
		<h3><input type="text" style="color:black;" value="" placeholder="{{$SiteData[22]->data}}" id="postcadsub"/>
			<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('postcadsub')"></i></button></h3>
		<p><textarea rows="4" cols="60" style="color:black;" value="" placeholder="{{$SiteData[23]->data}}" id="postcaddata"></textarea>
			<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('postcaddata')"></i></button></p>
		<a href="#">Shop Now</a>
	</div>
</div><!--End Magic Area-->

<!-- ................. history ................................... -->

<br/>
@if(isset($historyData))
<div class="featured-product section fix"><!--start Featured Product Area-->
	<div class="container">
		<div class="row">
			<div class="section-title">
				<h2><input type="text" style="color:black;" value="" placeholder="{{$SiteData[28]->data}}" id="ProdShowTitle4"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('ProdShowTitle4')"></i></button></h2>
				<div class="underline"></div>
			</div>
			<div class="col-sm-12">
			
			
				<!-- Featured slider Area Start -->
				<div class="feature-pro-slider owl-carousel">
					
					@foreach($historyData as $dt)
					<!-- Single Product Start -->
					<div class="product-item fix">
						<div class="product-img-hover">
							<!-- Product image -->
							<a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{ asset('img/featured/1.jpg') }}" alt="featured" /></a>
							<!-- Product action Btn -->
							<div class="product-action-btn">
								<a class="favorite" ><i class="fa fa-heart-o" onclick="AddWish('{{csrf_token()}}','{{$dt->prod_id}}')"></i></a>
								<a class="add-cart" ><i class="fa fa-shopping-cart" onclick="AddCart('{{csrf_token()}}','{{$dt->prod_id}}')"></i></a>
							</div>
							<span id="sp-{{$dt->prod_id}}"></span>
						</div>
						<div class="pro-name-price-ratting">
							<!-- Product Name -->
							<div class="pro-name">
								<a href="/product-details/{{$dt->prod_id}}">{{$dt->prod_name}}</a>
							</div>
							<!-- Product Ratting -->
							<div class="pro-ratting">
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star"></i>
								<i class="on fa fa-star-half-o"></i>
							</div>
							<!-- Product Price -->
							<div class="pro-price fix">
								<p><span class="old">$200</span><span class="new">{{$dt->prod_MRP_price}}</span></p>
							</div>
						</div>
					</div><!-- Single Product End -->
					
					@endforeach
					
				</div><!-- Featured slider Area End -->
			</div>
		</div>
	</div>
</div><!--End Featured Product Area-->


@endif

<!-- ................. Short Statistics ................................... -->

<div class="funfact section fix"><!--Start Fun Factor Area-->
	<div class="container">
		<div class="row">
			<div class="section-title">
				<h2><input type="text" style="color:black;" value="" placeholder="{{$SiteData[29]->data}}" id="ProdShowTitle5"/>
						<button><i style="color:lime;" class="fa fa-check" onclick="SiteChange('ProdShowTitle5')"></i></button></h2>
				<div class="underline"></div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="fun-factor">
					<div class="fun-factor-in">
						<i class="fa fa-user"></i>
						<div class="fun-factor-out"></div>
					</div>
					<p class="timer" data-from="0" data-to="3"></p>
					<h4>Happy Customers</h4>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="fun-factor">
					<div class="fun-factor-in">
						<i class="fa fa-database"></i>
						<div class="fun-factor-out"></div>
					</div>
					<p class="timer" data-from="0" data-to="31"></p>
					<h4>Items</h4>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="fun-factor">
					<div class="fun-factor-in">
						<i class="fa fa-eye"></i>
						<div class="fun-factor-out"></div>
					</div>
					<p class="timer" data-from="0" data-to="20"></p>
					<h4>Views</h4>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="fun-factor">
					<div class="fun-factor-in">
						<i class="fa fa-money"></i>
						<div class="fun-factor-out"></div>
					</div>
					<p class="timer" data-from="0" data-to="12"></p>
					<h4>Sales</h4>
				</div>
			</div>
		</div>
	</div>
</div><!--Start Fun Factor Area-->

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
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!--countTo JS -->
<script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
<!-- mixitup JS -->
<script type="text/javascript" src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
<!-- magnific popup JS -->
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!-- Appear JS -->
<script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
<!-- MeanMenu JS -->
<script type="text/javascript" src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
<!-- Nivo Slider JS -->
<script type="text/javascript" src="{{ asset('js/jquery.nivo.slider.pack.js') }}"></script>
<!-- Scrollup JS -->
<script type="text/javascript" src="{{ asset('js/jquery.scrollup.min.js') }}"></script>
<!-- simpleLens JS -->
<script type="text/javascript" src="{{ asset('js/jquery.simpleLens.min.js') }}"></script>
<!-- Price Slider JS -->
<script type="text/javascript" src="{{ asset('js/jquery-price-slider.js') }}"></script>
<!-- WOW JS -->
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script>
	new WOW().init();
</script>	
<!-- Main JS -->
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>

</html>