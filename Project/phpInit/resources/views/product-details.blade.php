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
										<li><a href="/DashBoard"><i class="fa fa-dashboard"> Dashboard </i></a></li>
										<li><a href="/addDetails"><i class="fa fa-plus"> Add Product </i></a></li>
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
						<img src="{{asset('img/header/logo.png')}}" alt="" />
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
								<div class="image">
									@php($imgCall=0) @foreach($imgData as $img) @if($img->prod_id==$dt->prod_id)
											<a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img alt="cart item" src="img/shop/{{$img->image1}}" /></a>@php($imgCall=1) @break @endif
									@endforeach
									@if($imgCall==0) <a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{asset('img/cart-1.jpg')}}" alt="cart item" /></a> @endif
								</div>
								<div class="content fix"><a href="/product-details/{{$dt->prod_id}}">{{$dt->prod_name}}</a><span class="price">Price: ${{$dt->prod_MRP_price * $dt->prod_quantity}}</span><span class="quantity">Quantity: {{$dt->prod_quantity}}</span></div> @php($tot=$tot+$dt->prod_MRP_price*$dt->prod_quantity)
							</li>
							@endforeach
							
						</ul>
						<div class="header-button-price">
							<a href="/ProductCart"><i class="fa fa-sign-out"></i><span>Check Out</span></a>
							&nbsp&nbsp&nbsp Amount : ${{$tot}}
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
											<li><a href="/aboutus">About US</a></li>
											<li><a href="/contact">Contact</a></li>
											<li><a href="/FAQ">FAQ</a></li>
										</ul>
									</div>
									<div class="column-2 column">
										<ul>
											<li><a href="/ProductCart">Cart</a></li>
											<li><a href="/checkout">Checkout</a></li>
											<li><a href="/services">Services</a></li>
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
							</li>
							<li><a href="/Order">Orders</a>
								<ul class="sub-menu">
									<li><a href="/Order">Track Order</a></li>
									<li><a href="/Order">Purchase History</a></li>
								</ul>
							</li>
							<li><a href="/Coupon">Discount</a>
							</li>
							<li><a href="/aboutus">About Us</a></li>
							<li><a href="/contact">Contact</a></li>
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
									<li><a href="/about-us">About US</a></li>
									<li><a href="/checkout">Checkout</a></li>
									<li><a href="/contact">Contact</a></li>
									<li><a href="/faq">FAQ</a></li>
									<li><a href="/login">Login</a></li>
									<li><a href="/Shop/searchBy/lanxi">Shop</a></li>
									<li><a href="/Shop/category/Category%201/l2%hi">New Arrival</a></li>
								</ul>
							</li>
							<li><a href="/Shop/searchBy/lanxi">Shop</a>
							</li>
							<li><a href="/Shop/category/Category%201/l2%hi">New Arrivals</a>
							</li>
							<li><a href="/about-us">About Us</a></li>
							<li><a href="/contact">Contact</a>
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
							@if($imgCall==0) <a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{asset('img/featured/1.jpg')}}" alt="featured" /></a> @endif
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
							@if($imgCall==0) <a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{asset('img/featured/1.jpg')}}" alt="featured" /></a> @endif
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
				<h3>{{$SiteData[43]->element}}</h3>
				<p>{{$SiteData[43]->data}}</p>
			</div>
			<div class="support col-sm-3">
				<i class="fa fa-bus"></i>
				<h3>{{$SiteData[44]->element}}</h3>
				<p>{{$SiteData[44]->data}}</p>
			</div>
			<div class="support col-sm-3">
				<i class="fa fa-phone"></i>
				<h3>{{$SiteData[45]->element}}</h3>
				<p>{{$SiteData[45]->data}}</p>
			</div>
			<div class="support col-sm-3">
				<i class="fa fa-random"></i>
				<h3>{{$SiteData[46]->element}}</h3>
				<p>{{$SiteData[45]->data}}</p>
			</div>
		</div>
	</div>
</div><!--Start Support Area-->
<div class="footer-top-area fix"><!--Start Footer top area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="footer-quick-link footer-links avio">
					<a href="/">
					<div class="image avio">
						<img src="img/header/logo.png" alt="" />
						<h3>{{$SiteData[6]->data}}</h3>
					</div>
					</a>
					<p>{{$SiteData[42]->data}}</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="footer-quick-link footer-links">
					<h2>CONTACT</h2>
					<div class="single-contact">
						<div class="icon">
							<i class="fa fa-map-marker"></i>
						</div>
						<div class="details">
							<p>{{$SiteData[40]->data}}</p>
							<p>{{$SiteData[41]->data}}</p>
						</div>
					</div>
					<div class="single-contact">
						<div class="icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="details">
							<p>{{$SiteData[0]->data}}</p>
							<p>{{$SiteData[47]->data}}</p>
						</div>
					</div>
					<div class="single-contact">
						<div class="icon">
							<i class="fa fa-dribbble"></i>
						</div>
						<div class="details">
							<a href="/">{{$SiteData[1]->data}}</a>
							<a href="/">{{$SiteData[39]->data}}</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="footer-quick-link footer-links">
					<h2>QUICK LINK</h2>
					<ul>
						<li><a href="/Shop/searchBy/lanxi">Shop</a></li>
						<li><a href="/">Home</a></li>
						<li><a href="/FAQ">FAQs</a></li>
						<li><a href="/Shop/category/Category%201/l2%hi">New Arrivals</a></li>
						<li><a href="/contact">Contact</a></li>
						<li><a href="/services">Services</a></li>	
					</ul>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="footer-links">
					<h2>OUR SUPPORT</h2>
					<ul>
						<li><a href="/profile">Your Account</a></li>
						<li><a href="/"></a></li>
						<li><a href="/Coupon">Gift Voucher</a></li>
						<li><a href="/"></a></li>
						<li><a href="/Conditions">Our Policies</a></li>
						<li><a href="/"></a></li>
						<li><a href="/wishlist">Wishlist</a></li>
					</ul>
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
					<p>&copy 2020 <i class="fa fa-love"></i><a href="/Conditions">Shopify All Rights Reserved.</a></p>
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