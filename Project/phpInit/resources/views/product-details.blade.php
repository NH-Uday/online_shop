<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Shopify | {{$product->prod_name}}</title>
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
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="{{asset('js/jquery-3.4.1.js')}}"></script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="{{asset('js/myScript.js')}}"></script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
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
						<p>{{$SiteData[0]->data}}</p>
					</div>
					<div class="mail-id float-left">
						<i class="fa fa-envelope-o float-left"></i>
						<p><a>{{$SiteData[1]->data}}</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="socials text-center">
					<a href="{{$SiteData[2]->data}}"><i class="fa fa-facebook"></i></a>
					<a href="{{$SiteData[3]->data}}"><i class="fa fa-twitter"></i></a>
					<a href="{{$SiteData[4]->data}}"><i class="fa fa-linkedin"></i></a>
					<a href="{{$SiteData[5]->data}}"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div id="top-menu" class="float-right">
					<ul>
						@if(isset($userData))
							<li><a href="/profile"><h4><small>Welcome {{$userData->username}} ! </small><span id="tz"> </span>  &nbsp  <i class="fa fa-angle-down"></i></h4></a>
								<ul>
									<li><a href="/profile"><i class="fa fa-child"> Profile </i></a></li>
									<li><a href="/wishlist"><i class="	fa fa-bookmark"> Wishlist </i></a></li>
									<li><a href="/logout"><i class="fa fa-sign-out"> Sign out </i></a></li>
									@if($userData->type=='admin')
										<li><a href="/Admin/Home/Edit"><i class="fa fa-bank"> Admin Home </i></a></li>
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
						<img src="{{ asset('img/header/logo.png')}}" alt="" />
						<h4>{{$SiteData[6]->data}}</h4>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-lg-3">
				<div class="cart-info float-right">
					@if(isset($userData) && isset($CartData))
					<a href="/ProductCart">
						<h5>My cart ( <span>{{count($CartData)}}</span> items ) </h5>
						<i class="fa fa-shopping-cart"></i>
					</a>
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
							
						</div>
					</div>
					@endif
				</div>
				<div class="search float-right">
					<input type="text" value="" id="srcTxt" placeholder="Search Here...." onchange="searchBy()" />
					<button class="submit"><i class="fa fa-search" onclick="searchBy()"></i></button>
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
								<div class="mega-menu mega-menu-1">
									<div class="column-1 column">
										<ul>
											<li><a href="/Shop/category/Category 1">Category 1</a></li>
											<li><a href="/Shop/category/Category 1">Sub 1</a></li>
											<li><a href="/Shop/category/Category 2">Sub 2</a></li>
											<li><a href="/Shop/category/Category 3">Sub 3</a></li>
											<li><a href="/Shop/category/Category 4">Sub 4</a></li>
										</ul>
									</div>
									<div class="column-2 column">
										<ul>
											<li><a href="/Shop/category/Category 2">Category 2</a></li>
											<li><a href="/Shop/category/Category 1">Sub 1</a></li>
											<li><a href="/Shop/category/Category 2">Sub 2</a></li>
											<li><a href="/Shop/category/Category 3">Sub 3</a></li>
											<li><a href="/Shop/category/Category 4">Sub 4</a></li>
										</ul>
									</div>
									<div class="column-3 column">
										<ul>
											<li><a href="/Shop/category/Category 3">Category 3</a></li>
											<li><a href="/Shop/category/Category 1">Sub 1</a></li>
											<li><a href="/Shop/category/Category 2">Sub 2</a></li>
											<li><a href="/Shop/category/Category 3">Sub 3</a></li>
											<li><a href="/Shop/category/Category 4">Sub 4</a></li>
										</ul>
									</div>
									<div class="column-4 column">
										<a href=""><img src="{{ asset('img/product/10.jpg') }}" alt="" /></a>
									</div>
								</div>
							</li>
							<li><a href="/Shop/category/Category%201/l2%hi">New Arrivals</a>
								<div class="mega-menu mega-menu-1">
									<div class="column-1 column">
										<ul>
											<li><a href="/Shop/category/Category 1">Category 1</a></li>
											<li><a href="/Shop/category/Category 1">Sub 1</a></li>
											<li><a href="/Shop/category/Category 2">Sub 2</a></li>
											<li><a href="/Shop/category/Category 3">Sub 3</a></li>
											<li><a href="/Shop/category/Category 4">Sub 4</a></li>
										</ul>
									</div>
									<div class="column-2 column">
										<ul>
											<li><a href="/Shop/category/Category 2">Category 2</a></li>
											<li><a href="/Shop/category/Category 1">Sub 1</a></li>
											<li><a href="/Shop/category/Category 2">Sub 2</a></li>
											<li><a href="/Shop/category/Category 3">Sub 3</a></li>
											<li><a href="/Shop/category/Category 4">Sub 4</a></li>
										</ul>
									</div>
									<div class="column-3 column">
										<ul>
											<li><a href="/Shop/category/Category 3">Category 3</a></li>
											<li><a href="/Shop/category/Category 1">Sub 1</a></li>
											<li><a href="/Shop/category/Category 2">Sub 2</a></li>
											<li><a href="/Shop/category/Category 3">Sub 3</a></li>
											<li><a href="/Shop/category/Category 4">Sub 4</a></li>
										</ul>
									</div>
									<div class="column-4 column">
										<ul>
											<li><a href="/Shop/category/Category 1">Category 4</a></li>
											<li><a href="/Shop/category/Category 1">Sub 1</a></li>
											<li><a href="/Shop/category/Category 2">Sub 2</a></li>
											<li><a href="/Shop/category/Category 3">Sub 3</a></li>
											<li><a href="/Shop/category/Category 4">Sub 4</a></li>
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
								<ul>
									<li><a href="/">Home 1</a></li>
									<li><a href="index-2.html">Home 2</a></li>
									<li><a href="index-3.html">Home 3</a></li>
								</ul>
							</li>
							<li><a href="#">Pages</a>
								<ul>
									<li><a href="about-us.html">About US</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
									<li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
									<li><a href="blog-details.html">Blog details</a></li>
									<li><a href="cart.html">Cart</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="coming-soon.html">Coming soon</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="contact-2.html">Contact 2</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="portfolio.html">Portfolio 3 column</a></li>
									<li><a href="portfolio-2.html">Portfolio 4 column</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="shop.html">Shop</a></li>
									<li><a href="shop-list.html">Shop list</a></li>
									<li><a href="shop-left-sidebar.html">Shop left sidebar</a></li>
									<li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
									<li><a href="product-details.html">Product details</a></li>
								</ul>
							</li>
							<li><a href="shop.html">Shop</a>
								<ul>
									<li><a href="shop-list.html">rings</a>
									<ul>
										<li><a href="shop-left-sidebar.html">diamond ring</a></li>
										<li><a href="shop-right-sidebar.html">gold ring</a></li>
										<li><a href="shop-list.html">sliver ring</a></li>
										<li><a href="shop-left-sidebar.html">Platinum ring</a></li>
									</ul>
									</li>
									<li><a href="shop-list.html">Bracelets</a>
									<ul>
										<li><a href="shop-left-sidebar.html">diamond Bracelets</a></li>
										<li><a href="shop-right-sidebar.html">gold Bracelets</a></li>
										<li><a href="shop-left-sidebar.html">sliver Bracelets</a></li>
										<li><a href="shop-right-sidebar.html">Platinum Bracelets</a></li>
									</ul>
									</li>
									<li><a href="shop-list.html">lecklaces</a>
									<ul>
										<li><a href="shop-right-sidebar.html">diamond lecklaces</a></li>
										<li><a href="shop-left-sidebar.html">gold lecklaces</a></li>
										<li><a href="shop-right-sidebar.html">sliver lecklaces</a></li>
										<li><a href="shop-left-sidebar.html">Platinum lecklaces</a></li>
									</ul>
									</li>
								</ul>
							</li>
							<li><a href="shop.html">New Arrivals</a>
								<ul>
									<li><a href="shop-list.html">rings</a>
									<ul>
										<li><a href="shop-left-sidebar.html">diamond ring</a></li>
										<li><a href="shop-right-sidebar.html">gold ring</a></li>
										<li><a href="shop-list.html">sliver ring</a></li>
										<li><a href="shop-left-sidebar.html">Platinum ring</a></li>
									</ul>
									</li>
									<li><a href="shop-list.html">Bracelets</a>
									<ul>
										<li><a href="shop-left-sidebar.html">diamond Bracelets</a></li>
										<li><a href="shop-right-sidebar.html">gold Bracelets</a></li>
										<li><a href="shop-left-sidebar.html">sliver Bracelets</a></li>
										<li><a href="shop-right-sidebar.html">Platinum Bracelets</a></li>
									</ul>
									</li>
									<li><a href="shop-list.html">lecklaces</a>
									<ul>
										<li><a href="shop-right-sidebar.html">diamond lecklaces</a></li>
										<li><a href="shop-left-sidebar.html">gold lecklaces</a></li>
										<li><a href="shop-right-sidebar.html">sliver lecklaces</a></li>
										<li><a href="shop-left-sidebar.html">Platinum lecklaces</a></li>
									</ul>
									</li>
									<li><a href="shop-right-sidebar.html">earrings</a>
									<ul>
										<li><a href="shop-right-sidebar.html">diamond lecklaces</a></li>
										<li><a href="shop-left-sidebar.html">gold earrings</a></li>
										<li><a href="shop-list.html">sliver earrings</a></li>
										<li><a href="shop-left-sidebar.html">Platinum earrings</a></li>
									</ul>
									</li>
								</ul>
							</li>
							<li><a href="portfolio.html">Portfolio</a>
								<ul>
									<li><a href="portfolio.html">Portfolio 3 column</a></li>
									<li><a href="portfolio-2.html">Portfolio 4 column</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Blog</a>
								<ul>
									<li><a href="blog.html">Blog 1</a></li>
									<li><a href="blog-left-sidebar.html">Blog 2</a></li>
									<li><a href="blog-right-sidebar.html">Blog 3</a></li>
								</ul>
							</li>
							<li><a href="about-us.html">About Us</a></li>
							<li><a href="contact.html">Contact</a>
								<ul>
									<li><a href="contact.html">Contact 1</a></li>
									<li><a href="contact-2.html">Contact 2</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div><!--End Main Menu Area-->


<div class="page-title fix"><!--Start Title-->
	<div class="overlay section">
		<h2>Product Details</h2>
	</div>
</div><!--End Title-->
<section class="product-page page fix"><!--Start Product Details Area-->
	<div class="container">
		<div class="row">
		@if(isset($userData)) @if($userData->type=='admin')
			<div class="panel panel-default">
				<div class="panel-heading" >
					<a class="collapsed" data-toggle="collapse" data-parent="#checkout-progress" href="#payment-met"><span><i class="fa fa-edit"></i></span>UPDATE THIS PRODUCT INFORMATION</a>
				</div>
				<div id="payment-met" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="col-sm-6 col-md-5">
							<div class="login">
							  <form id="updateform" action="/UpdateProduct" enctype="multipart/form-data" method="post" name="updatePro">@csrf
								<h2>{{$product->prod_name}}</h2>
								<p class="err-data"> <br></p><input type="hidden" name="pid" value="{{$product->prod_id}}">
								<label id="prodnameLbl"><strong>Product name</strong><span>*</span></label>
								<input value="{{$product->prod_name}}" type="text" name="pname" required>
								<label id="prodqtyLb6"><strong>Product Quantity</strong><span>*</span></label>
								<input value="{{$product->prod_qty}}" type="text" name="pqty" required>
								<div class="bill-info">
									<div class="group">
										<label id="prodprcLb4"><strong>Product Price</strong></label>
										<input type="text" name="psell" value="{{$product->prod_SELLER_price}}" class="half" required>
										<input type="text" name="pmrp" value="{{$product->prod_MRP_price}}" class="half" required>
									</div>
								</div>
							</div>
						  </div>
						  <div class="col-sm-6 col-md-5">
							<div class="login">
								<label id="proddtlsLb2"><strong>Product Details ( Short details with the product )</strong><span>*</span></label>
								<textarea rows="6" cols="63" type="text" name="pdetail" class="det-area" required>{{$product->prod_details}}</textarea><br>
								
								<div class="form-group mt-3">
								  <label class="mr-2" id="prodpicLb7"><strong>Upload product images</strong></label>
									<div class="bill-info">
										<div class="group">
											<input type="file" class="third" name="pimg1">
											<input type="file" class="third" name="pimg2">
											<input type="file" class="third" name="pimg3">
											<input type="file" class="third" name="pimg4">
										</div>
									</div>
								</div>
								
								<label id="shopnamesLb8"><strong>Shop name</strong> <span>(Optional)</span></label>
								<input value="{{$product->prod_shop}}" type="text" name="pshop"/>  
								</br></br>  

								<div class="offset-md-2 col-md-2">
								  <button type="submit" class="btn btn-primary"> Update Information </button></br></br>
								</div>
							   </form>
							  </div>
						  </div>
					</div>
				</div>
			</div>
		@endif @endif
			<div class="col-sm-6">
				@if($proImg!=null)
				<div class="details-pro-tab">
			<!-- Tab panes -->
					<div class="tab-content details-pro-tab-content">
						@if($proImg->image1!=null)
						<div class="tab-pane fade in active" id="image-1">
							<div class="simpleLens-big-image-container">
								<a class="simpleLens-lens-image" data-lens-image="{{ asset('img/shop/'.$proImg->image1.'') }}">
									<img src="{{ asset('img/shop/'.$proImg->image1.'') }}" alt="" class="simpleLens-big-image">
								</a>
							</div>
						</div>@endif
						@if($proImg->image2!=null)
						<div class="tab-pane fade" id="image-2">
							<div class="simpleLens-big-image-container">
								<a class="simpleLens-lens-image" data-lens-image="{{ asset('img/shop/'.$proImg->image2.'') }}">
									<img src="{{ asset('img/shop/'.$proImg->image2.'') }}" alt="" class="simpleLens-big-image">
								</a>
							</div>
						</div>@endif
						@if($proImg->image3!=null)
						<div class="tab-pane fade" id="image-3">
							<div class="simpleLens-big-image-container">
								<a class="simpleLens-lens-image" data-lens-image="{{ asset('img/shop/'.$proImg->image3.'') }}">
									<img src="{{ asset('img/shop/'.$proImg->image3.'') }}" alt="" class="simpleLens-big-image">
								</a>
							</div>
						</div>@endif
						@if($proImg->image4!=null)
						<div class="tab-pane fade" id="image-4">
							<div class="simpleLens-big-image-container">
								<a class="simpleLens-lens-image" data-lens-image="{{ asset('img/shop/'.$proImg->image4.'') }}">
									<img src="{{ asset('img/shop/'.$proImg->image4.'') }}" alt="" class="simpleLens-big-image">
								</a>
							</div>
						</div>@endif
					</div>
					<!-- Nav tabs -->
					<ul class="tabs-list details-pro-tab-list" role="tablist">
						@if($proImg->image1!=null)<li class="active"><a href="#image-1" data-toggle="tab"><img src="{{ asset('img/shop/'.$proImg->image1.'') }}" alt="" /></a></li>@endif
						@if($proImg->image2!=null)<li><a href="#image-2" data-toggle="tab"><img src="{{ asset('img/shop/'.$proImg->image2.'') }}" alt="" /></a></li>@endif
						@if($proImg->image3!=null)<li><a href="#image-3" data-toggle="tab"><img src="{{ asset('img/shop/'.$proImg->image3.'') }}" alt="" /></a></li>@endif
						@if($proImg->image4!=null)<li><a href="#image-4" data-toggle="tab"><img src="{{ asset('img/shop/'.$proImg->image4.'') }}" alt="" /></a></li>@endif
					</ul>
				</div>
				@endif
			</div>
			<div class="col-sm-6">
				<div class="shop-details">
					<!-- Product Name -->
					<h2>{{$product->prod_name}}</h2>
					<!-- Product Ratting -->
					<div class="pro-ratting">
						<i class="on fa fa-star"></i>
						<i class="on fa fa-star"></i>
						<i class="on fa fa-star"></i>
						<i class="on fa fa-star"></i>
						<i class="on fa fa-star-half-o"></i>
					</div>
					<h3><span>${{$product->prod_SELLER_price}}</span>${{$product->prod_MRP_price}}</h3>
					<h4>10 Reviews</h4>
					<h5>Availability - @if($product->prod_qty==0)<span>Out of Stock</span>@else<span>In Stock</span>@endif</h5>
					<h6>QUICK OVERVIEW</h6>
					<textarea rows="4" class="pro-det-area" disabled>{{$product->prod_details}}</textarea>
					@if(isset($userData))
					<div class="review">
						<form action="/revUpload" method="post">@csrf
							<textarea name="revData" rows="4" placeholder="Write Your Review..."></textarea><input type="hidden" name="pid" value="{{$product->prod_id}}">
								<div class="rev-area">Give rating to this product : <input type="range" name="rate" min="1" max="5" onchange="" /></div>
									<button type="submit" class="rev-btn">Upload Review</button>
										</form><br>
					</div>@endif
					<div class="action-btn">
						<a><i class="fa fa-shopping-cart" onclick="AddCart('{{csrf_token()}}','{{$product->prod_id}}')"></i></a>
						<a><i class="fa fa-heart-o" onclick="AddWish('{{csrf_token()}}','{{$product->prod_id}}')"></i></a>
						<a href="#"><i class="fa fa-share"></i></a>
						<a href="#"><i class="fa fa-refresh"></i></a>
					</div>
					<span id="sp-{{$product->prod_id}}"> </span>
					<span id="spp-{{$product->prod_id}}"> </span>
				</div>
			</div>
			
			<div class="col-sm-12 fix">
				<div class="description">
					<!-- Nav tabs -->
					<ul class="nav product-nav">
						<li class=""><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
						<li class="active"><a data-toggle="tab" href="#review">REVIEWS</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div id="description" class="tab-pane fade" role="tabpanel">
							<p>A {{$product->prod_shop}} product</p><br>
							<p>{{$product->prod_details}}</p>
						</div>
						<div id="review" class="tab-pane fade active in" role="tabpanel">
							@foreach($proRev as $dt)
								<h4>{{$dt->username}}<small class="time-foot"> {{$dt->time}}</small></h4><br>
								<p>@for($i=0; $i< $dt->rating; $i++) <i class="on fa fa-star"></i> @endfor <br> {{$dt->review}} </p>
							@endforeach
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="col-md-12 fix">
				<div class="section-title">
					<h2>RELATED PRODUCT</h2>
					<div class="underline"></div>
				</div>
				<div class="related-pro-slider owl-carousel">
					<!-- Single Product Start -->
					@foreach($relatedProduct as $dt)
					<div class="product-item fix">
						<div class="product-img-hover">
							@php($imgCall=0) @foreach($imgData as $img) @if($img->prod_id==$dt->prod_id)
								<a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{ asset('img/shop/'.$img->image1.'') }}" alt="featured" /></a>@php($imgCall=1) @break @endif
							@endforeach
							@if($imgCall==0) <a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="img/featured/1.jpg" alt="featured" /></a> @endif
							<div class="product-action-btn">
								<a class="favorite" ><i class="fa fa-heart-o" onclick="AddWish('{{csrf_token()}}','{{$dt->prod_id}}')"></i></a>
								<a class="add-cart" ><i class="fa fa-shopping-cart" onclick="AddCart('{{csrf_token()}}','{{$dt->prod_id}}')"></i></a>
							</div>
							<span id="sp-{{$dt->prod_id}}"> </span>
							<span id="spp-{{$dt->prod_id}}"> </span>
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
								<p><span class="old">${{$dt->prod_SELLER_price}}</span><span class="new">{{$dt->prod_MRP_price}}</span></p>
							</div>
						</div>
					</div><!-- Single Product End -->
					@endforeach
				</div>
			</div>
			
			@if(isset($historyData))
			<div class="col-md-12 fix">
				<div class="section-title">
					<h2>Products you visited</h2>
					<div class="underline"></div>
				</div>
				<div class="related-pro-slider owl-carousel">
					
					@foreach($historyData as $dt)
					<!-- Single Product Start -->
					<div class="product-item fix">
						<div class="product-img-hover">
							@php($imgCall=0) @foreach($imgData as $img) @if($img->prod_id==$dt->prod_id)
								<a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{ asset('img/shop/'.$img->image1.'') }}" alt="featured" /></a>@php($imgCall=1) @break @endif
							@endforeach
							@if($imgCall==0) <a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="img/featured/1.jpg" alt="featured" /></a> @endif
							<div class="product-action-btn">
								<a class="favorite" ><i class="fa fa-heart-o" onclick="AddWish('{{csrf_token()}}','{{$dt->prod_id}}')"></i></a>
								<a class="add-cart" ><i class="fa fa-shopping-cart" onclick="AddCart('{{csrf_token()}}','{{$dt->prod_id}}')"></i></a>
							</div>
							<span id="sp-{{$dt->prod_id}}"> </span>
							<span id="spp-{{$dt->prod_id}}"> </span>
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
								<p><span class="old">${{$dt->prod_SELLER_price}}</span><span class="new">{{$dt->prod_MRP_price}}</span></p>
							</div>
						</div>
					</div><!-- Single Product End -->
					@endforeach
					
					
				</div>
			</div>
			@endif
			
		</div>
	</div>
	
</section><!--End Product Details Area-->


<div class="brand-area section fix"><!--Start Brand Area-->
	<div class="container">
		<div class="row">
			<div class="section-title">
				<h2>Our Brands</h2>
				<div class="underline"></div>
			</div>
			<div class="brand-slider owl-carousel">
				<div class="brand-item"><img src="{{ asset('img/brand/brand-1.png') }}" alt="" /></div>
				<div class="brand-item"><img src="{{ asset('img/brand/brand-2.png') }}" alt="" /></div>
				<div class="brand-item"><img src="{{ asset('img/brand/brand-3.png') }}" alt="" /></div>
				<div class="brand-item"><img src="{{ asset('img/brand/brand-4.png') }}" alt="" /></div>
				<div class="brand-item"><img src="{{ asset('img/brand/brand-5.png') }}" alt="" /></div>
				<div class="brand-item"><img src="{{ asset('img/brand/brand-1.png') }}" alt="" /></div>
				<div class="brand-item"><img src="{{ asset('img/brand/brand-2.png') }}" alt="" /></div>
				<div class="brand-item"><img src="{{ asset('img/brand/brand-3.png') }}" alt="" /></div>
				<div class="brand-item"><img src="{{ asset('img/brand/brand-4.png') }}" alt="" /></div>
				<div class="brand-item"><img src="{{ asset('img/brand/brand-5.png') }}" alt="" /></div>
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
				<p>Lorem ipsum dolor sit amet, conseetur adipiscing elit, consectetur</p>
			</div>
			<div class="support col-sm-3">
				<i class="fa fa-bus"></i>
				<h3>Fast Delivery</h3>
				<p>Lorem ipsum dolor sit amet, conseetur adipiscing elit, consectetur</p>
			</div>
			<div class="support col-sm-3">
				<i class="fa fa-phone"></i>
				<h3>24/7 support</h3>
				<p>Lorem ipsum dolor sit amet, conseetur adipiscing elit, consectetur</p>
			</div>
			<div class="support col-sm-3">
				<i class="fa fa-random"></i>
				<h3>14 - Day Returns</h3>
				<p>Lorem ipsum dolor sit amet, conseetur adipiscing elit, consectetur</p>
			</div>
		</div>
	</div>
</div><!--Start Support Area-->
<div class="footer-top-area fix"><!--Start Footer top area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="footer-about">
					<div class="image">
						<img src="{{ asset('img/header/logo.png') }}" alt="" />
						<h3>online jewelry store</h3>
					</div>
					<p>perspiciatis unde omnis iste natus error sit voluptatem accm doloremque antium, totam rem aperiam, eaque ipsa perspiciatis unde omnis iste</p>
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
							<p>+012  456  456  456</p>
							<p>+012  356  897  222</p>
						</div>
					</div>
					<div class="single-contact">
						<div class="icon">
							<i class="fa fa-dribbble"></i>
						</div>
						<div class="details">
							<a href="#">info@olongker.com</a>
							<a href="#">www.olongker.com</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="footer-quick-link footer-links">
					<h2>QUICK LINK</h2>
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="shop.html">Shop</a></li>
						<li><a href="shop-left-sidebar.html">New Arrivals</a></li>
						<li><a href="services.html">Services</a></li>	
						<li><a href="portfolio-1.html">Portfolio</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="#">Shortcodes</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="row">
					<div class="col-sm-8 footer-support footer-links">
						<h2>OUR SUPPORT</h2>
						<ul>
							<li><a href="#">Site Map</a></li>
							<li><a href="#">privacy Policy</a></li>
							<li><a href="#">Your Account</a></li>
							<li><a href="#">Term & Conditions</a></li>
							<li><a href="#">Advance Search</a></li>
							<li><a href="faq.html">Help & FAQs</a></li>
							<li><a href="#">Gift Voucher</a></li>
							<li><a href="contact-2.html">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-sm-4 footer-account footer-links">
						<h2>my Account</h2>
						<ul>
							<li><a href="#">my Account</a></li>
							<li><a href="#">order History</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Specials</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-newslater fix">
					<div class="wrap fix">
						<h3>NEWS LETTER ! </h3>
						<form action="#">
							<input type="email" placeholder="Your E-mail...">
							<button class="submit">SUBSCRIBE</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--Start Footer top area-->
<div class="footer-area fix"><!--Start Footer Area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="copy-right">
					<p>Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a></p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="payment">
					<ul>
						<li><a href="#"><img src="{{ asset('img/footer/paypal.jpg') }}" alt="" /></a></li>
						<li><a href="#"><img src="{{ asset('img/footer/visa.jpg') }}" alt="" /></a></li>
						<li><a href="#"><img src="{{ asset('img/footer/master.jpg') }}" alt="" /></a></li>
						<li><a href="#"><img src="{{ asset('img/footer/cards.jpg') }}" alt="" /></a></li>
						<li><a href="#"><img src="{{ asset('img/footer/discover.jpg') }}" alt="" /></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!--End Footer Area-->
	
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