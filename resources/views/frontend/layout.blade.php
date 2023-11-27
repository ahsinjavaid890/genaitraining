<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Genai Training</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ url('public/frontend/images/favicon.png')}}">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/bootstrap.min.css')}}">
    <!--owl carousel css-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/owl.carousel.min.css')}}">
    <!--magnific popup css-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/magnific-popup.css')}}">
    <!--font awesome css-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/font-awesome.min.css')}}">
    <!--meanmenu css-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/meanmenu.css')}}">
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/animate.css')}}">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/style.css')}}">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/css/responsive.css')}}">
</head>

<body>
    <!--star preloader-->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell align-middle">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!--end preloader-->
    <div class="sidebar-wrap">
        <div class="sidebar-inner">
            <div class="sidebar-close">
                <div class="sidebar-close-btn">
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-logo">
                    <a href="{{ url('') }}">
                        <img class="img-fluid" src="{{ url('public/frontend/images/logoorig.png')}}" alt="logo.png">
                    </a>
                </div>
                <div class="mobile-menu"></div>
                <div class="search-form">
                    <input type="text" placeholder="Search Courses" class="form-control">
                    <span><i class="fa fa-search"></i></span>
                </div>
                <div class="contact-info">
                    <ul>
                        <li><i class="fa fa-envelope"></i> info@genai-training.com</li>
                        <li><i class="fa fa-phone"></i> +98 012345 6789</li>
                    </ul>
                </div>
                <div class="social-icon">
                    <ul>
                        <li><span>Follow Us:</span></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="header-log-reg">
                    <ul>
                        <li><a href="{{ url('') }}">Login</a></li>
                        <li><small>|</small></li>
                        <li><a href="{{ url('') }}">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- start header-top-area -->
    <header class="header-area">
        <div class="header-top-area">
            <div class="container">
                <div class="header-top-wrap">
                    <!--start couser search-->
                    <div class="header-course-search">
                        <input type="text" placeholder="Search Courses" class="form-control">
                        <span><i class="fa fa-search"></i></span>
                    </div>
                    <!--end couser search-->
                    <!--start header contact info-->
                    <div class="header-contact-info text-right">
                        <ul>
                            <li><i class="fa fa-envelope"></i> info@genai-training.com</li>
                            <li><i class="fa fa-phone"></i> +98 012345 6789</li>
                        </ul>
                    </div>
                    <!--end header contact info-->
                    <!--start header-top-social-->
                    <div class="header-top-social text-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <!--end header-top-social-->
                </div>
            </div>
        </div>
        <!--end header-top-area-->
        <!--start header-btm-area-->
        <div class="header-btm-area">
            <div class="container">
                <div class="main-menu-wrap">
                    <!--start site logo-->
                    <div class="site-logo">
                        <a class="logo" href="{{ url('') }}">
                            <img style="width: 60px;" src="{{ url('public/frontend/images/logoorig.png')}}" alt="logo">
                        </a>
                    </div>
                    <!--end site logo-->
                    <!--start mainmenu-->
                    <div class="main-menu-area text-right">
                        <nav class="mainmenu">
                            <ul>
                                <li>
                                    <a class="active" href="{{ url('') }}">Home</a>
                                </li>
                                <li>
                                    <a class="" href="{{ url('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('') }}">Registration</a>
                                </li>
                                <li>
                                    <a href="{{ url('') }}">Certifications</a>
                                </li>
                                <li>
                                    <a href="{{ url('') }}">Genai Trainings</a>
                                </li>
                                                                                        
                            </ul>
                        </nav>
                    </div>
                    <!--end mainmenu-->
                    <!--start cart icon-->
                    <!--end cart icon-->
                    <!--start login registration btn-->
                    <div class="header-log-reg text-right">
                        <ul>
                            <li><a href="javascript:void(0)">PAY BC-1</a></li>
                            <li><small>|</small></li>
                            <li><a href="javascript:void(0)">PAY GenAi</a></li>
                        </ul>
                    </div>
                    <!--end login registration btn-->
                    <!--start toggle button-->
                    <div class="header-toggle-btn">
                        <a class="sidebar-toggle-btn">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <!--end toggle button-->
                </div>
            </div>
        </div>
    </header>
    <!--end header-->
        @yield('content')
    <!--start footer-area-->
    <footer class="footer-area">
        <!--start footer top area-->
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <!--start footer widget-->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget logo">
                            <a href="#"><img src="{{ url('public/frontend/images/logo-white-1.png')}}" alt="logo"></a>
                            <div class="footer-about-description">
                                <p>We are providing high-quality online courses for about ten years. Our all instructors expert and highly experienced.</p>
                            </div>
                            <h6>Follow Us</h6>
                            <ul class="footer-social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end footer widget-->
                    <!--start footer widget-->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget footer-cat">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Business</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Design</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Development</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Marketing</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Photography</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end footer widget-->
                    <!--start footer widget-->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget recent-post">
                            <h4> Recent Posts</h4>
                            <!--start recent post single-->
                            <div class="footer-post-single">
                                <div class="recent-post-thumb">
                                    <img src="{{ url('public/frontend/images/blog-sm-5.jpg')}}" alt="image" class="img-fluid">
                                </div>
                                <div class="recent-post-cont">
                                    <h6><a href="#">Learn Webs Applications Development from Experts</a></h6>
                                    <span>April 1, 2022</span>
                                </div>
                            </div>
                            <!--end recent post single-->
                            <!--start recent post single-->
                            <div class="footer-post-single m-0">
                                <div class="recent-post-thumb">
                                    <img src="{{ url('public/frontend/images/blog-sm-4.jpg')}}" alt="image" class="img-fluid">
                                </div>
                                <div class="recent-post-cont">
                                    <h6><a href="#">Expand Your Career Opportunities With Python</a></h6>
                                    <span>May 25, 2022</span>
                                </div>
                            </div>
                            <!--end recent post single-->
                        </div>
                    </div>
                    <!--end footer widget-->
                    <!--start footer widget-->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <p class="m-0">250/A Oval Street, Mount View, London, United Kingdom</p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="m-0">support@example.com</p>
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p class="m-0">+98 12345 67890</p>
                                </li>
                                <li class="p-0 info">Feel free to contact us
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end footer widget-->
                </div>
            </div>
        </div>
        <!--end footer top area-->
        <!--start footer bottom-->
        <div class="footer-bottom-area text-center">
            <div class="container">
                <p class="m-0">&copy; Copy 2022. All Rights Reserved</p>
            </div>
        </div>
        <!--end footer bottom-->
    </footer>
    <!--end footer-->
    <!--jQuery js-->
    <script src="{{ url('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
    <!--proper js-->
    <script src="{{ url('public/frontend/js/popper.min.js')}}"></script>
    <!--bootstrap js-->
    <script src="{{ url('public/frontend/js/bootstrap.min.js')}}"></script>
    <!--mainmenu js-->
    <script src="{{ url('public/frontend/js/meanmenu.min.js')}}"></script>
    <!--counterup js-->
    <script src="{{ url('public/frontend/js/counterup.min.js')}}"></script>
    <!--waypoints js-->
    <script src="{{ url('public/frontend/js/waypoints.js')}}"></script>
    <!--magnic popup js-->
    <script src="{{ url('public/frontend/js/magnific-popup.min.js')}}"></script>
    <!--owl carousel js-->
    <script src="{{ url('public/frontend/js/owl.carousel.min.js')}}"></script>
    <!--syotimer js-->
    <script src="{{ url('public/frontend/js/syotimer.min.js')}}"></script>
    <!--main js-->
    <script src="{{ url('public/frontend/js/custom.js')}}"></script>
</body>

</html>