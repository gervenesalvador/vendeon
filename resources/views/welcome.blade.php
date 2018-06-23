<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <title>ProUI Frontend - Responsive Bootstrap Site Template</title>

    <meta name="description" content="ProUI Frontend is a Responsive Bootstrap Site Template created by pixelcave and added as a bonus in ProUI Admin Template package which is published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/icon57.png') }}" sizes="57x57">
    <link rel="apple-touch-icon" href="{{ asset('img/icon72.png') }}" sizes="72x72">
    <link rel="apple-touch-icon" href="{{ asset('img/icon76.png') }}" sizes="76x76">
    <link rel="apple-touch-icon" href="{{ asset('img/icon114.png') }}" sizes="114x114">
    <link rel="apple-touch-icon" href="{{ asset('img/icon120.png') }}" sizes="120x120">
    <link rel="apple-touch-icon" href="{{ asset('img/icon144.png') }}" sizes="144x144">
    <link rel="apple-touch-icon" href="{{ asset('img/icon152.png') }}" sizes="152x152">
    <link rel="apple-touch-icon" href="{{ asset('img/icon180.png') }}" sizes="180x180">

    <link href="//fonts.googleapis.com/css?family=Work+Sans:400,700" rel="stylesheet" type="text/css" media="all">
    <link href="//fonts.googleapis.com/css?family=Work+Sans:600" rel="stylesheet" type="text/css" media="all">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min') }}.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{ asset('css/themes.css') }}">
    <!-- END Stylesheets -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Modernizr (browser feature detection library) -->
    <script src="{{ asset('js/vendor/modernizr.min.js') }}"></script>
  </head>
  <body>
    <!-- Page Container -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!-- 'boxed' class for a boxed layout -->
    <div id="page-container">
      <!-- Site Header -->
      <div class="announcement-header">
        <h3>Free Shipping & Cash-on-Delivery (PHILIPPINES ONLY)</h3>
      </div>
      <header>
        <div class="container">
          <!-- Site Logo -->
          <div class="col-md-2">
            <a href="index.html" class="site-logo">
              <img src="{{ asset('img/logo-1.png') }}" alt="Vendeon Logo">
            </a>                        
          </div>
          <!-- Site Logo -->

          <!-- Site Navigation -->
          <div class="col-md-8">
            <nav>
              <!-- Menu Toggle -->
              <!-- Toggles menu on small screens -->
              <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                <i class="fa fa-bars"></i>
              </a>
              <!-- END Menu Toggle -->

              <!-- Main Menu -->
              <ul class="site-nav">
                <!-- Toggles menu on small screens -->
                <li class="visible-xs visible-sm">
                  <a href="javascript:void(0)" class="site-menu-toggle text-center">
                    <i class="fa fa-times"></i>
                  </a>
                </li>
                <!-- END Menu Toggle -->
                <li>
                  <a href="features.html">Home</a>
                </li>
                <li>
                  <a href="pricing.html">Catalog</a>
                </li>
              </ul>
              <!-- END Main Menu -->
            </nav>
          </div>

          <div class="col-md-2">
            <ul class="nav-icons">
              <li>
                <a href="#"><i class="fa fa-shopping-cart fa-2x"></i></a>
              </li>
            </ul>
          </div>
          <!-- END Site Navigation -->
        </div>
      </header>
      <!-- END Site Header -->

      <!-- Media Container -->
      <div class="media-container">
        <!-- Intro -->
        <section class="site-section site-section-light site-section-top">
          <div class="container text-center">
            <h1 class="animation-slideDown"><strong>Welcome to our Online Store!</strong></h1>
            <h2 class="h3 animation-slideUp hidden-xs">Explore over 5.000 products!</h2>
          </div>
        </section>
        <!-- END Intro -->

        <!-- For best results use an image with a resolution of 2560x279 pixels -->
        <img src="{{ asset('img/placeholders/headers/store_home.jpg') }}" alt="" class="media-image animation-pulseSlow">
      </div>
      <!-- END Media Container -->

      <!-- Products -->
      <section class="site-content site-section">
        <div class="container">
          <!-- Seach Form -->
          <div class="site-block">
            <form action="ecom_search_results.html" method="post">
              <div class="input-group input-group-lg">
                <input type="text" id="ecom-search" name="ecom-search" class="form-control text-center" placeholder="Search Store..">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
          <!-- END Seach Form -->

          <!-- New Arrivals -->
          <h2 class="site-heading"><strong>New</strong> Arrivals</h2>
          <hr>
          <div class="row store-items">
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
              <div class="store-item">
                <div class="store-item-rating text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <div class="store-item-image">
                  <a href="ecom_product.html">
                    <img src="{{ asset('img/placeholders/photos/photo26.jpg') }}" alt="" class="img-responsive">
                  </a>
                </div>
                <div class="store-item-info clearfix">
                  <span class="store-item-price themed-color-dark pull-right">$ 79</span>
                  <a href="ecom_product.html"><strong>Sport Shoes</strong></a><br>
                  <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                </div>
              </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
              <div class="store-item">
                <div class="store-item-rating text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <div class="store-item-image">
                  <a href="ecom_product.html">
                    <img src="{{ asset('img/placeholders/photos/photo29.jpg') }}" alt="" class="img-responsive">
                  </a>
                </div>
                <div class="store-item-info clearfix">
                  <span class="store-item-price themed-color-dark pull-right">$ 99</span>
                  <a href="ecom_product.html"><strong>Jacket</strong></a><br>
                  <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                </div>
              </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
              <div class="store-item">
                <div class="store-item-rating text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <div class="store-item-image">
                  <a href="ecom_product.html">
                    <img src="{{ asset('img/placeholders/photos/photo27.jpg') }}" alt="" class="img-responsive">
                  </a>
                </div>
                <div class="store-item-info clearfix">
                  <span class="store-item-price themed-color-dark pull-right">$ 299</span>
                  <a href="ecom_product.html"><strong>Watch</strong></a><br>
                  <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-right">
              <a href="ecom_product_list.html"><strong>View All</strong> <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
          <!-- END New Arrivals -->

          <!-- Best Sellers -->
          <h2 class="site-heading"><strong>Best</strong> Sellers</h2>
          <hr>
          <div class="row store-items">
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
              <div class="store-item">
                <div class="store-item-rating text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <div class="store-item-image">
                  <a href="ecom_product.html">
                    <img src="{{ asset('img/placeholders/photos/photo25.jpg') }}" alt="" class="img-responsive">
                  </a>
                </div>
                <div class="store-item-info clearfix">
                  <span class="store-item-price themed-color-dark pull-right">$ 109</span>
                  <a href="ecom_product.html"><strong>Sunglasses</strong></a><br>
                  <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                </div>
              </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
              <div class="store-item">
                <div class="store-item-rating text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <div class="store-item-image">
                  <a href="ecom_product.html">
                    <img src="{{ asset('img/placeholders/photos/photo28.jpg') }}" alt="" class="img-responsive">
                  </a>
                </div>
                <div class="store-item-info clearfix">
                  <span class="store-item-price themed-color-dark pull-right">$ 59</span>
                  <a href="ecom_product.html"><strong>Gloves</strong></a><br>
                  <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                </div>
              </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
              <div class="store-item">
                <div class="store-item-rating text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <div class="store-item-image">
                  <a href="ecom_product.html">
                    <img src="{{ asset('img/placeholders/photos/photo30.jpg') }}" alt="" class="img-responsive">
                  </a>
                </div>
                <div class="store-item-info clearfix">
                  <span class="store-item-price themed-color-dark pull-right">$ 99</span>
                  <a href="ecom_product.html"><strong>Jacket</strong></a><br>
                  <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                </div>
              </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
              <div class="store-item">
                <div class="store-item-rating text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <div class="store-item-image">
                  <a href="ecom_product.html">
                    <img src="{{ asset('img/placeholders/photos/photo32.jpg') }}" alt="" class="img-responsive">
                  </a>
                </div>
                <div class="store-item-info clearfix">
                  <span class="store-item-price themed-color-dark pull-right">$ 79</span>
                  <a href="ecom_product.html"><strong>Headset</strong></a><br>
                  <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                </div>
              </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
              <div class="store-item">
                <div class="store-item-rating text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <div class="store-item-image">
                  <a href="ecom_product.html">
                    <img src="{{ asset('img/placeholders/photos/photo35.jpg') }}" alt="" class="img-responsive">
                  </a>
                </div>
                <div class="store-item-info clearfix">
                  <span class="store-item-price themed-color-dark pull-right">$ 1.599</span>
                  <a href="ecom_product.html"><strong>Laptop</strong></a><br>
                  <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                </div>
              </div>
            </div>
            <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
              <div class="store-item">
                <div class="store-item-rating text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                </div>
                <div class="store-item-image">
                  <a href="ecom_product.html">
                    <img src="{{ asset('img/placeholders/photos/photo33.jpg') }}" alt="" class="img-responsive">
                  </a>
                </div>
                <div class="store-item-info clearfix">
                  <span class="store-item-price themed-color-dark pull-right">$ 149</span>
                  <a href="ecom_product.html"><strong>Sunglasses</strong></a><br>
                  <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-right">
              <a href="ecom_product_list.html"><strong>View All</strong> <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
          <!-- END Best Sellers -->
        </div>
      </section>
      <!-- END Products -->

      <!-- Explore Store Action -->
      <section class="site-content site-section site-section-light themed-background-dark-night">
        <div class="container">
          <div class="text-center push">
            <div class="push">
              <i class="gi gi-shopping_bag fa-5x text-muted"></i>
            </div>
            <a href="ecom_product_list.html" class="btn btn-lg btn-primary">Explore Store <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </section>
      <!-- END Explore Store Action -->

      <!-- Footer -->
      <footer class="site-footer site-section">
        <div class="container">
          <!-- Footer Links -->
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <h4 class="footer-heading">About Us</h4>
              <ul class="footer-nav list-inline">
                <li><a href="about.html">Company</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="contact.html">Support</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <h4 class="footer-heading">Legal</h4>
              <ul class="footer-nav list-inline">
                <li><a href="javascript:void(0)">Licensing</a></li>
                <li><a href="javascript:void(0)">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <h4 class="footer-heading">Follow Us</h4>
              <ul class="footer-nav footer-nav-social list-inline">
                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <h4 class="footer-heading"><span id="year-copy">2014</span> &copy; <a href="http://goo.gl/TDOSuC">ProUI Frontend</a></h4>
              <ul class="footer-nav list-inline">
                <li>Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I">pixelcave</a></li>
              </ul>
            </div>
          </div>
          <!-- END Footer Links -->
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
    <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>