<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Shopify Add Details Page</title>
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

<div class="page-title fix"><!--Start Title-->
  <div class="overlay section">
    <h2>Add Product Information</h2>
  </div>
</div><!--End Title-->


<div class="login-page page fix"><!--start login Area-->
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-sm-6 col-md-5">
        <div class="login">
          <form id="accountform" action="/account" method="post" name="reg">
            <h2>Product Information.</h2>
            <p style="color:red;"> <br></p>
            <label id="prodnameLbl"><strong>Product name</strong><span>*</span></label>
            <input value="" type="text" name="prodname" />
            <label id="proddtlsLb2"><strong>Product Details (Short details which will be showing with the product.)</strong><span>*</span></label>
            <input value="" type="text" name="proddetails"/>
            <label id="proddesLb3"><strong>Product Description (Full description of the product.)</strong><span>*</span></label>
            <input value="" type="text" name="proddes"/> 
            <label id="prodprcLb4"><strong>Product price</strong></label>
            <input value="" type="text" name="prodprice"/>
            <label id="spclprcLb5"><strong>Speacial price</strong></label>
            <input value="" type="text" name="spclprice"/>
            <label id="prodqtyLb6"><strong>Product Quantity</strong><span>*</span></label>
            <input value="" type="text" name="prodqty"/> 
            <div class="form-group mt-3">
              <label class="mr-2" id="prodpicLb7"><strong>Upload product image</strong></label>
              <input type="file" name="prodpic">
            </div>
            <label id="shopnamesLb8"><strong>Shop name</strong> <span>*</span></label>
            <input value="" type="text" name="shopname"/>  
            <label for="exampleFormControlSelect1"><strong>Product category <span>*</span></strong></label>
            <select class="form-control" id="prodcatLb9" name="prodcat" required="required">
              <option>category1</option>
              <option>category2</option>
              <option>category3</option>
              <option>category4</option>
              <option>category5</option>
              <option>category6</option>
            </select></br></br>  

            <div class="offset-md-2 col-md-2">
              <button type="submit" class="btn btn-primary">Submit</button></br></br>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div><!--End login Area-->

<div class="footer-top-area fix"><!--Start Footer top area-->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="footer-about">
          <div class="image">
            <img src="img/header/logo.png" alt="" />
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
            <li><a href="index.html">Home</a></li>
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
            <li><a href="#"><img src="img/footer/paypal.jpg" alt="" /></a></li>
            <li><a href="#"><img src="img/footer/visa.jpg" alt="" /></a></li>
            <li><a href="#"><img src="img/footer/master.jpg" alt="" /></a></li>
            <li><a href="#"><img src="img/footer/cards.jpg" alt="" /></a></li>
            <li><a href="#"><img src="img/footer/discover.jpg" alt="" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div><!--End Footer Area-->
  
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
<script>
  new WOW().init();
</script> 
<!-- Main JS -->
<script type="text/javascript" src="js/main.js"></script>

</body>

</html>