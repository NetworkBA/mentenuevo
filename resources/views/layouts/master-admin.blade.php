<!DOCTYPE html>
<html lang="en">

<head>
    <title>GURU Able - Premium Admin Template </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('/admin/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/icon/icofont/css/icofont.css')}}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/pages/flag-icon/flag-icon.min.css')}}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/pages/menu-search/css/component.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/css/jquery.mCustomScrollbar.css')}}">
    @yield('css')
</head>

<body>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                        <a class="mobile-search morphsearch-search" href="#">
                        <i class="ti-search"></i>
                    </a>
                        <a href="index.html">
                        <img class="img-fluid" src="{{asset('/admin/assets/images/logo.png')}}" alt="Theme-Logo" />
                    </a>
                        <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                <img src="{{asset('/admin/assets/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <i class="ti-angle-down"></i>
                            </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                        <i class="ti-settings"></i> Settings
                                    </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                        <i class="ti-email"></i> My Messages
                                    </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                        <i class="ti-lock"></i> Lock Screen
                                    </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="{{asset('/admin/assets/images/avatar-4.jpg')}}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>John Doe</span>
                                        <span id="more-details">UX Designer</span>
                                    </div>
                                </div>                              
                            </div>
                        
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.modulos">Modulos</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.esp.main">Especialistas</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="{{Route('especialista.crear')}}">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.esp.registrar">Registrar Especialista</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                        <li class="">
                                            <a href="{{Route('especialista.listar')}}">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.esp.listado">Listado de Especialistas</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class=""> 
                                    <a href="">        
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>        
                                        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Single</span>        
                                        <span class="pcoded-mcaret"></span>    
                                    </a>
                                </li>
                            
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    @yield('header')
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        @yield('contenido')
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('/admin/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('/admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('/admin/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{asset('/admin/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    
    <script src="{{asset('/admin/assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('/admin/assets/js/demo-12.js')}}"></script>
    <script src="{{asset('/admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    @yield('js')
</body>

</html>
