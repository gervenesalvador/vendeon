<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>ProUI - Responsive Bootstrap Admin Template</title>

    <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('admin-asset/img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('admin-asset/img/icon57.png') }}" sizes="57x57">
    <link rel="apple-touch-icon" href="{{ asset('admin-asset/img/icon72.png') }}" sizes="72x72">
    <link rel="apple-touch-icon" href="{{ asset('admin-asset/img/icon76.png') }}" sizes="76x76">
    <link rel="apple-touch-icon" href="{{ asset('admin-asset/img/icon114.png') }}" sizes="114x114">
    <link rel="apple-touch-icon" href="{{ asset('admin-asset/img/icon120.png') }}" sizes="120x120">
    <link rel="apple-touch-icon" href="{{ asset('admin-asset/img/icon144.png') }}" sizes="144x144">
    <link rel="apple-touch-icon" href="{{ asset('admin-asset/img/icon152.png') }}" sizes="152x152">
    <link rel="apple-touch-icon" href="{{ asset('admin-asset/img/icon180.png') }}" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('admin-asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-asset/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-asset/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-asset/css/themes.css') }}">
    <!-- END Stylesheets -->
    @stack('styles_vendor')
    @stack('styles')

    <script src="{{ asset('admin-asset/js/vendor/modernizr.min.js') }}"></script>
</head>
<body>
    <!-- Login Alternative Row -->
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div id="login-alt-container">
                    <!-- Title -->
                    <h1 class="push-top-bottom">
                        <i class="gi gi-flash"></i> <strong>ProUI</strong><br>
                        <small>Welcome to ProUI Admin Template!</small>
                    </h1>
                    <!-- END Title -->

                    <!-- Key Features -->
                    <ul class="fa-ul text-muted">
                        <li><i class="fa fa-check fa-li text-success"></i> Clean &amp; Modern Design</li>
                        <li><i class="fa fa-check fa-li text-success"></i> Fully Responsive &amp; Retina Ready</li>
                        <li><i class="fa fa-check fa-li text-success"></i> 10 Color Themes</li>
                        <li><i class="fa fa-check fa-li text-success"></i> PSD Files Included</li>
                        <li><i class="fa fa-check fa-li text-success"></i> Widgets Collection</li>
                        <li><i class="fa fa-check fa-li text-success"></i> Designed Pages Collection</li>
                        <li><i class="fa fa-check fa-li text-success"></i> .. and many more awesome features!</li>
                    </ul>
                    <!-- END Key Features -->

                    <!-- Footer -->
                    <footer class="text-muted push-top-bottom">
                        <small><span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 3.8</a></small>
                    </footer>
                    <!-- END Footer -->
                </div>
            </div>
            <div class="col-md-5">
                <!-- Login Container -->
                <div id="login-container">
                    <!-- Login Title -->
                    <div class="login-title text-center">
                        <h1><strong>Login</strong> or <strong>Register</strong></h1>
                    </div>
                    <!-- END Login Title -->

                    <!-- Login Block -->
                    <div class="block push-bit">
                        @yield('content')
                    </div>
                    <!-- END Login Block -->
                </div>
                <!-- END Login Container -->
            </div>
        </div>
    </div>
    <!-- END Login Alternative Row -->

    <script src="{{ asset('admin-asset/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/plugins.js') }}"></script>
    <script src="{{ asset('admin-asset/js/app.js') }}"></script>

    <script src="{{ asset('admin-asset/js/pages/login.js') }}"></script>
    <script>$(function(){ Login.init(); });</script>
    @stack('scripts_vendor')
    @stack('scripts')
</body>
</html>