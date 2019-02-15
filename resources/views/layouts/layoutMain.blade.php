<!doctype html>
<html class="no-js" lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home One || Educate</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template/img/favicon.ico') }}">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
        
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">
        
		<!-- Owl Carousel CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}">
        
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/jquery-ui.css') }}">
        
		<!-- Meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/meanmenu.min.css') }}">
        
		<!-- Animate CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/animate.css') }}">
        
        <!-- Nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('template/lib/nivo-slider/css/nivo-slider.css') }}" type="text/css" />
		<link rel="stylesheet" href="{{ asset('template/lib/nivo-slider/css/preview.css') }}" type="text/css" media="screen" />
        
		<!-- Metarial Iconic Font CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/material-design-iconic-font.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/material-design-iconic-font.min.css') }}">
        
		<!-- Slick CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/slick.css') }}">
        
		<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('template/style.css') }}">
        
		<!-- Responsive CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custome.css') }}">
        
		<!-- Modernizr JS
		============================================ -->		
        <script src="{{ asset('template/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Header Area Start-->
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-5 hidden-xs">
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
                            <div class="header-top-right">
                                <div class="content">
                                    @if (!Auth::check())
                                        <a href="{{ route('login') }}">  Login

                                    @else
                                        <a href="#"><i class="zmdi zmdi-account">   Hello {{ Auth::user()->name }}</i>

                                    @endif
                                    </a>
                                    @if (Auth::check())
                                    <ul class="account-dropdown">

                                            <li><a href="#">Profile</a></li>
                                           
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                localStorage.removeItem('token');
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-logo-menu sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('/template/img/logo/logo.png') }}" alt="EDUCAT"></a>
                            </div>
                        </div>
                        <div class="col-md-9 hidden-sm hidden-xs">
                            <div class="mainmenu-area">
                                <div class="mainmenu">
                                    <nav>
                                        <ul id="nav">
                                            <li class="current"><a href="#">Home</a>
                                            </li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <ul class="header-search">
                                    <li class="search-menu">
                                        <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                                    </li>
                                </ul>
                                <!--Search Form-->
                                <div class="search">
                                    <div class="search-form">
                                        <form id="search-form" action="#">
                                            <input type="search" placeholder="Search here..." name="search" />
                                            <button type="submit">
                                                <span><i class="fa fa-search"></i></span>
                                            </button>
                                        </form>                                
                                    </div>
                                </div>
                                <!--End of Search Form-->
                            </div> 
                        </div>
                    </div>
                </div>
            </div>  
          
        </header>
        <!--End of Header Area-->
            
        
        @yield('content')

