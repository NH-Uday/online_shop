<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Shopify | Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Fav Icon -->
	<link id="favicon" rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}" />
	<!-- Google Font Raleway -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:200,300,500,400,600,700,800' rel='stylesheet' type='text/css'>
	<!-- Google Font Dancing Script -->
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}" />
	<!-- Animate CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}" />
	<!-- simpleLens CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.simpleLens.css')}}" />
	<!-- Price Slider CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-price-slider.css')}}" />
	<!-- MeanMenu CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/meanmenu.min.css')}}" />
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}" />
	<!-- Nivo Slider CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/nivo-slider.css')}}" />
	<!-- Stylesheet CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}" />
	<!-- Responsive Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />
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
						<img src="{{asset('img/header/logo.png')}}" alt="" />
						<h4>{{$SiteData[6]->data}}</h4>
					</a>
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
							
						</div>
					</div>
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
		<h2>Products</h2>
	</div>
</div><!--End Title-->

<div class="shop-product-area section fix"><!--Start Shop Area-->
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="shop-sidebar fix">
					<!-- single-sidebar start -->
					<div class="sin-shop-sidebar product-price-range">
						<h2>Price</h2>
						<div class="slider-range-container">
							<div id="slider-range"></div>
							<p>
								<input type="text" id="price-amount" readonly>
								<input type="submit" onclick="RangeVal()" value="Search">
							</p>
						</div>
					</div>
					<div class="sin-shop-sidebar shop-category">
						<h2>Category</h2>
						<ul>
							<li><a href="/shop/withtag/category/Category 1">Category 1</a></li>
							<li><a href="/shop/withtag/category/Category 2">Category 2</a></li>
							<li><a href="/shop/withtag/category/Category 3">Category 3</a></li>
							<li><a href="/shop/withtag/category/Category 4">Category 4</a></li>
						</ul>
					</div>
					<!-- single-sidebar end -->
					<!-- single-sidebar start
					<div class="sin-shop-sidebar shop-add">
						<a href="#"><img src="img/shop-add-1.jpg" alt=""></a>
					</div>
					<!-- single-sidebar end -->
					<!-- single-sidebar start
					<div class="sin-shop-sidebar shop-add">
						<a href="#"><img src="img/shop-add-2.jpg" alt=""></a>
					</div>
					<!-- single-sidebar end -->
					<!-- single-sidebar start -->
					<div class="sin-shop-sidebar shop-tags">
						<h2>Tags</h2>
						<ul>
							<li><a href="/shop/withtag/searchBy/Cream">Cream</a></li>
							<li><a href="/shop/withtag/searchBy/Shampoo">Shampoo</a></li>
							<li><a href="/shop/withtag/searchBy/Biscuit">Biscuit</a></li>
							<li><a href="/shop/withtag/searchBy/Lotion">Lotion</a></li>
							<li><a href="/shop/withtag/searchBy/Hair Oil">Hair Oil</a></li>
							<li><a href="/shop/withtag/searchBy/For Men">For Men</a></li>
							<li><a href="/shop/withtag/searchBy/For Women">For Women</a></li>
						</ul>
					</div>
					<!-- single-sidebar end -->
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="shop-tool-bar col-sm-12 fix">
						<div class="view-mode">
							<a href="/Shop/{{$SearchData['searchType']}}/{{$SearchData['value']}}"><i class="fa fa-th"></i></a>
							<a href="" class="active"><i class="fa fa-th-list"></i></a>
						</div>
						<div class="show-product">
							<div class="search float-right">
								<input type="text" value="" id="srcTxt" placeholder="Search Here...." onchange="searchListBy()" />
								<button class="submit"><i class="fa fa-search" onclick="searchListBy()" ></i></button>
							</div>
						</div>
						<div class="sort-by">
							<span> &nbsp &nbsp &nbsp Sort By</span>
							<select id="sort-by">
								<option value="" readonly> Select an option </option>
								<option value="/shop/withtag/{{$SearchData['searchType']}}/{{$SearchData['value']}}/l2%hi"> price ( low &gt; high ) </option>
								<option value="/shop/withtag/{{$SearchData['searchType']}}/{{$SearchData['value']}}/h2%lo"> price (high &gt; low) </option>
							</select>
							<input type="hidden" value="{{$SearchData['searchType']}}" id="srcDT">
							<input type="hidden" value="{{$SearchData['value']}}" id="valDT">
						</div>
						<div class="pro-Showing">
							<span>Showing Result of " {{$SearchData['value']}} ", Found {{count($searchResult)}} results</span>
						</div>
					</div>
					</div>
					<div class="shop-products">
						@foreach($searchResult as $dt)
						<!-- Single Product Start -->
						<div class="col-sm-4 fix">
							<div class="product-item fix">
								<div class="product-img-hover">
									<div class="shop-img2">
										@php($imgCall=0) @foreach($imgData as $img) @if($img->prod_id==$dt->prod_id)
											<a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{ asset('img/shop/'.$img->image1.'')}}" class="shop-img2" alt="featured" /></a>@php($imgCall=1) @break @endif
										@endforeach
										@if($imgCall==0) <a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{ asset('img/featured/1.jpg')}}" class="shop-img2" alt="featured" /></a> @endif
									</div>
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
										<p><span class="old">${{$dt->prod_SELLER_price}}</span><span class="new">${{$dt->prod_MRP_price}}</span></p>
									</div>
								</div>
							</div><!-- Single Product End -->
						</div><!-- Single Product End -->
						@endforeach
						<!-- Pagination -->
						<div class="pagination">
							<ul>
								<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
								@php($cnt=count($searchResult)/16)
								@for($i=1;$i<$cnt+1;$i++)
								<li><a href="">{{$i }}</a></li>
								@endfor
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul><br><br>
						</div>
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
								<a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{ asset('img/shop/'.$img->image1.'')}}" alt="featured" /></a>@php($imgCall=1) @break @endif
							@endforeach
							@if($imgCall==0) <a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{ asset('img/featured/1.jpg')}}" alt="featured" /></a> @endif
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
								<p><span class="old">${{$dt->prod_SELLER_price}}</span><span class="new">${{$dt->prod_MRP_price}}</span></p>
							</div>
						</div>
					</div><!-- Single Product End -->
					@endforeach
					
					
				</div>
			</div>
			@endif
			</div>
		</div>
	</div>
</div><!--Start Shop Area-->

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
						<img src="{{asset('img/header/logo.png')}}" alt="" />
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
						<li><a href="/payments"><img src="{{asset('img/footer/paypal.jpg')}}" alt="" /></a></li>
						<li><a href="/payments"><img src="{{asset('img/footer/visa.jpg')}}" alt="" /></a></li>
						<li><a href="/payments"><img src="{{asset('img/footer/master.jpg')}}" alt="" /></a></li>
						<li><a href="/payments"><img src="{{asset('img/footer/cards.jpg')}}" alt="" /></a></li>
						<li><a href="/payments"><img src="{{asset('img/footer/discover.jpg')}}" alt="" /></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!--End Footer Area-->
	
<!-- jQuery 2.1.4 -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<!--countTo JS -->
<script type="text/javascript" src="{{asset('js/jquery.countTo.js')}}"></script>
<!-- mixitup JS -->
<script type="text/javascript" src="{{asset('js/jquery.mixitup.min.js')}}"></script>
<!-- magnific popup JS -->
<script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Appear JS -->
<script type="text/javascript" src="{{asset('js/jquery.appear.js')}}"></script>
<!-- MeanMenu JS -->
<script type="text/javascript" src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
<!-- Nivo Slider JS -->
<script type="text/javascript" src="{{asset('js/jquery.nivo.slider.pack.js')}}"></script>
<!-- Scrollup JS -->
<script type="text/javascript" src="{{asset('js/jquery.scrollup.min.js')}}"></script>
<!-- simpleLens JS -->
<script type="text/javascript" src="{{asset('js/jquery.simpleLens.min.js')}}"></script>
<!-- Price Slider JS -->
<script type="text/javascript" src="{{asset('js/jquery-price-slider.js')}}"></script>
<!-- WOW JS -->
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script>
	new WOW().init();
</script>	
<!-- Main JS -->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</body>

</html>