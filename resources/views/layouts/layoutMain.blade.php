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
                            <span>Have any question? +968 547856 254</span>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
                            <div class="header-top-right">
                                <div class="content"><a href="#"><i class="zmdi zmdi-account"></i> My Account</a>
                                    <ul class="account-dropdown">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Log In</a></li>
                                        <li><a href="#">Register</a></li>
                                        <li><a href="#">Blog</a></li>
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
                                <a href="index-2.html"><img src="{{ asset('/template/img/logo/logo.png') }}" alt="EDUCAT"></a>
                            </div>
                        </div>
                        <div class="col-md-9 hidden-sm hidden-xs">
                            <div class="mainmenu-area">
                                <div class="mainmenu">
                                    <nav>
                                        <ul id="nav">
                                            <li class="current"><a href="index-2.html">Home</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index-3.html">Homepage Version 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="courses.html">Courses</a>
                                                <ul class="sub-menu">
                                                    <li><a href="courses-details.html">Courses Details</a></li>
                                                </ul>
                                            </li>
                                    
                                            <li><a href="contact.html">Contact</a></li>
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
            <!-- Mobile Menu Area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index-2.html">HOME</a>
                                            <ul>
                                                <li><a href="index-3.html">Homepage Version 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="courses.html">Courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses-details.html">Courses Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="event.html">Event</a>
                                            <ul class="sub-menu">
                                                <li><a href="event-details.html">Event Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-2.html">Shortcode</a>
                                            <ul class="sub-menu">
                                                <li><a href="shortcode-alerts.html">Alerts</a></li>
                                                <li><a href="shortcode-breadcrumbs.html">Breadcrumb</a></li>
                                                <li><a href="shortcode-button.html">Button</a></li>
                                                <li><a href="shortcode-course.html">Courses</a></li>
                                                <li><a href="shortcode-dropdown.html">Dropdown</a></li>
                                                <li><a href="shortcode-event.html">Event</a></li>
                                                <li><a href="shortcode-latest-news.html">Latest News</a></li>
                                                <li><a href="shortcode-pagination.html">Pagination</a></li>
                                                <li><a href="shortcode-product.html">Product</a></li>
                                                <li><a href="shortcode-facts.html">Facts</a></li>
                                                <li><a href="shortcode-map.html">Map</a></li>
                                                <li><a href="shortcode-contact-form.html">Contact Form</a></li>
                                                <li><a href="shortcode-progressbar.html">Progressbar</a></li>
                                                <li><a href="shortcode-testimonial.html">Testimonial</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="latest-news.html">Latest News</a>
                                            <ul class="sub-menu">
                                                <li><a href="news-details.html">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area end -->    
        </header>
        <!--End of Header Area-->
@@yield('content')
        <!--Newsletter Area Start-->
        <div class="newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="newsletter-content">
                            <h3>SUBSCRIBE</h3>
                            <h2>TO OUR NEWSLETTER</h2>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="newsletter-form">
                            <form action="#">
                                <div class="subscribe-form">
                                    <input type="email" name="email" placeholder="Enter your email address...">
                                    <button type="submit">SUBSCRIBE</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Newsletter Area-->
        <!--Footer Widget Area Start-->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a href="index-2.html"><img src="img/logo/footer.png" alt=""></a>
                            </div>
                            <p>There are many variations of passg of Lorem Ipsum available, but thmajority have suffered altem, </p>
                            <div class="social-icons">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-footer-widget">
                            <h3>GET IN TOUCH</h3>
                            <span><i class="fa fa-phone"></i>+88 018 785 4589</span>
                            <span><i class="fa fa-envelope"></i>devitems@email.com</span>
                            <span><i class="fa fa-globe"></i>www.devitems.com</span>
                            <span><i class="fa fa-map-marker"></i>ur address goes here,street.</span>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm">
                        <div class="single-footer-widget">
                            <h3>Useful Links</h3>
                            <ul class="footer-list">
                                <li><a href="#">Teachers &amp; Staff</a></li>
                                <li><a href="#">Our Courses</a></li>
                                <li><a href="#">Courses Categories</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-footer-widget">
                            <h3>Instagram</h3>
                            <div class="instagram-image">
                                <div class="footer-img">
                                    <a href="#"><img src="img/footer/1.jpg" alt=""></a>
                                </div>
                                <div class="footer-img">
                                    <a href="#"><img src="img/footer/2.jpg" alt=""></a>
                                </div>
                                <div class="footer-img">
                                    <a href="#"><img src="img/footer/3.jpg" alt=""></a>
                                </div>
                                <div class="footer-img">
                                    <a href="#"><img src="img/footer/4.jpg" alt=""></a>
                                </div>
                                <div class="footer-img">
                                    <a href="#"><img src="img/footer/5.jpg" alt=""></a>
                                </div>
                                <div class="footer-img">
                                    <a href="#"><img src="img/footer/6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Footer Widget Area-->
        <!--Footer Area Start-->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <span>Copyright &copy; EDUCAT 2016.All right reserved.Created by <a href="#">Devitems</a></span>
                    </div>
                    <div class="col-md-6 col-sm-5">
                        <div class="column-right">
                            <span>Privacy Policy , Terms &amp; Conditions</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End of Footer Area-->
        
        
		<!-- jquery
		============================================ -->		
        <script src="{{ asset('template/js/vendor/jquery-1.12.4.min.js') }}"></script>
        
		<!-- bootstrap JS
		============================================ -->		
        <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
        
        <!-- nivo slider js
		============================================ -->       
		<script src="{{ asset('template/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript') }}"></script>
		<script src="{{ asset('template/lib/nivo-slider/home.js" type="text/javascript') }}"></script>
        
		<!-- meanmenu JS
		============================================ -->		
        <script src="{{ asset('template/js/jquery.meanmenu.js') }}"></script>
		
		<!-- wow JS
		============================================ -->		
        <script src="{{ asset('template/js/wow.min.js') }}"></script>
        
		<!-- owl.carousel JS
		============================================ -->		
        <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
        
		<!-- scrollUp JS
		============================================ -->		
        <script src="{{ asset('template/js/jquery.scrollUp.min.js') }}"></script>
        
		<!-- Waypoints JS
		============================================ -->		
        <script src="{{ asset('template/js/waypoints.min.js') }}"></script>
        
		<!-- Counterup JS
		============================================ -->		
        <script src="{{ asset('template/js/jquery.counterup.min.js') }}"></script>
        
		<!-- Slick JS
		============================================ -->		
        <script src="{{ asset('template/js/slick.min.js') }}"></script>
        
		<!-- plugins JS
		============================================ -->		
        <script src="{{ asset('template/js/plugins.js') }}"></script>
        
		<!-- main JS
		============================================ -->		
        <script src="{{ asset('template/js/main.js') }}"></script>
    </body>

<!-- Mirrored from devitems.com/html/educat-preview/educat/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2016 09:56:15 GMT -->
</html>