<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <title>Vendeon</title>

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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

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

    @stack('styles_vendor')
    @stack('styles')
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
            <a href="{{ url('/') }}" class="site-logo">
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
                  <a href="/">Home</a>
                </li>
                <li>
                  <a href="/">Catalog</a>
                </li>
              </ul>
              <!-- END Main Menu -->
            </nav>
          </div>

          <div class="col-md-2">
            <ul class="nav-icons">
              <li>
                <a href="{{ route('cart') }}"><i class="fa fa-shopping-cart fa-2x"></i></a>
              </li>
            </ul>
          </div>
          <!-- END Site Navigation -->
        </div>
      </header>

      @yield('content')

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

    @stack('scripts_vendor')
    @stack('scripts')
  </body>
</html>