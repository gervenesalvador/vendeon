<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Admin Page - Student Monitoring System</title>
    
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
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

    <link rel="stylesheet" href="{{ asset('admin-asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-asset/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-asset/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-asset/css/themes.css') }}">
    
    {{-- <link rel="stylesheet" href="{{ asset('admin-asset/css/themes/emerald.css') }}"> --}}
    @stack('styles_vendor')
    @stack('styles')
    
    <script src="{{ asset('admin-asset/js/vendor/modernizr.min.js') }}"></script>
</head>
<body>
    <div id="page-wrapper">
        <div class="preloader themed-background">
            <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
            </div>
        </div>

        <!-- Page Container -->
        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
            <div id="sidebar-alt">
                <div id="sidebar-alt-scroll">
                    <div class="sidebar-content">
                        <a href="#" class="sidebar-title"><i class="gi gi-cogwheel pull-right"></i> <strong>Header</strong></a>
                        <div class="sidebar-section">Section content..</div>
                    </div>
                </div>
            </div>

            <!-- Main Sidebar -->
            <div id="sidebar">
                <div id="sidebar-scroll">
                    <div class="sidebar-content">
                        <a href="index.html" class="sidebar-brand">
                            <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>Pro</strong>UI</span>
                        </a>

                        <!-- User Info -->
                        <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                            <div class="sidebar-user-avatar">
                                <a href="index.html">
                                    <img src="{{ asset('admin-asset/img/placeholders/avatars/avatar.jpg') }}" alt="avatar">
                                </a>
                            </div>
                            <div class="sidebar-user-name">John Doe</div>
                            <div class="sidebar-user-links">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Settings"><i class="gi gi-cogwheel"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                            </div>
                        </div>
                        <!-- END User Info -->

                        <!-- Sidebar Navigation -->
                        <ul class="sidebar-nav">
                            <li>
                                <a href="{{ url('/') }}/admin/home" class="@yield('home')"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Home</span></a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}/admin/products" class="@yield('products')"><i class="gi gi-inbox sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Products</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
                
                <header class="navbar navbar-inverse">
                    <!-- Left Header Navigation -->
                    <ul class="nav navbar-nav-custom">
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                <i class="fa fa-bars fa-fw"></i>
                            </a>
                        </li>
                        <li class="dropdown"></li>
                    </ul>
                    <!-- END Left Header Navigation -->

                    <!-- Search Form -->
                    <form action="#" method="post" class="navbar-form-custom">
                        <div class="form-group">
                            <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                        </div>
                    </form>
                    <!-- END Search Form -->

                    <!-- Right Header Navigation -->
                    <ul class="nav navbar-nav-custom pull-right">
                        <!-- Alternative Sidebar Toggle Button -->
                        <li>
                            <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');this.blur();">
                                <i class="gi gi-share_alt"></i>
                                {{-- <span class="label label-primary label-indicator animation-floating">4</span> --}}
                            </a>
                        </li>
                        <!-- END Alternative Sidebar Toggle Button -->

                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('admin-asset/img/placeholders/avatars/avatar.jpg') }}" alt="avatar"> <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Header</li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-clock-o fa-fw pull-right"></i>
                                        <span class="badge pull-right">10</span>
                                        Link #1
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                        <span class="badge pull-right">5</span>
                                        Link #2
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-magnet fa-fw pull-right"></i>
                                        <span class="badge pull-right">3</span>
                                        Link #3
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-question fa-fw pull-right"></i>
                                        <span class="badge pull-right">11</span>
                                        Link #4
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                        Link #1
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                        Link #2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END User Dropdown -->
                    </ul>
                    <!-- END Right Header Navigation -->
                </header>
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                    @yield('content')
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <footer class="clearfix">
                    <div class="pull-right">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="pull-left">
                        <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI</a>
                    </div>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
    <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <script src="{{ asset('admin-asset/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/plugins.js') }}"></script>
    <script src="{{ asset('admin-asset/js/app.js') }}"></script>
    @stack('scripts_vendor')
    @stack('scripts')
</body>
</html>