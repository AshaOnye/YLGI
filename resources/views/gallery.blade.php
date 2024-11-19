<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>YLGI | Gallery</title>

<!-- Fav Icon -->
<link rel="icon" href="/assets/images/favicon-2.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="/assets/css/font-awesome-all.css" rel="stylesheet">
<link href="/assets/css/flaticon.css" rel="stylesheet">
<link href="/assets/css/owl.css" rel="stylesheet">
<link href="/assets/css/bootstrap.css" rel="stylesheet">
<link href="/assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="/assets/css/animate.css" rel="stylesheet">
<link href="/assets/css/nice-select.css" rel="stylesheet">
<link href="/assets/css/elpath.css" rel="stylesheet">
<link href="/assets/css/color.css" id="jssDefault" rel="stylesheet">
<link href="/assets/css/rtl.css" rel="stylesheet">
<link href="/assets/css/style.css" rel="stylesheet">
<link href="/assets/css/module-css/page-title.css" rel="stylesheet">
<link href="/assets/css/module-css/gallery.css" rel="stylesheet">
<link href="/assets/css/responsive.css" rel="stylesheet">

</head>

<body>
<div class="boxed_wrapper ltr">
    <!-- preloader -->
  <div class="loader-wrap">
        <div class="preloader">
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="txt-loading">
                        <img src="/assets/images/favicon-2.png" style="width: 60px; height: 60px;">
                    </div>
                </div>   
            </div>
        </div>
   </div>
    <!-- preloader end -->

         <!-- main header -->
        <header class="main-header header-style-two">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <figure class="logo-box"><a href="{{route('home')}}"><img src="assets/images/logo.png" alt=""></a></figure>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light clearfix">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class=" dropdown"><a href="{{route('home')}}">Home</a>
                                        </li> 
                                        <li class=" dropdown"><a href="{{route('about')}}">About Us</a>
                                    
                                        </li> 
                                        <!-- <li class="dropdown"><a href="event.html">Events</a>
                        
                                        </li> -->
                                        <li class=" current dropdown"><a href="{{route('gallery')}}">Gallery</a>
                    
                                        </li>
                                        <li><a href="{{route('contact')}}">Contact</a></li> 
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="btn-box mr_40"><a href="https://youngleadersig.org/gic/register/" class="theme-btn btn-one">Register</a></div>
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com/youngleadersingovernance?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/youngleadersig?igsh=dm9odGphdzNibnpk"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{route('home')}}"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="btn-box mr_40"><a href="https://youngleadersig.org/gic/register/" class="theme-btn btn-one">Register</a></div>
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com/youngleadersingovernance?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/youngleadersig?igsh=dm9odGphdzNibnpk"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

         <!-- Mobile Menu  -->
       <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="{{route('home')}}"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li> Suite B10, Abraham Plaza, Plot 6 Ekukimam St, Utako District, Abuja</li>
                    <li><a href="tel:+234 (802) 341 6380">+234 (802) 341 6380</a></li>
                    <li><a href="mailto:info@example.com">youngleadersingovernance@gmail.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="https://www.facebook.com/youngleadersingovernance?mibextid=ZbWKwL"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="https://www.instagram.com/youngleadersig?igsh=dm9odGphdzNibnpk"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

    <!-- page-title -->
    <section class="page-title">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title-4.jpg);"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-36.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-47.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix mb_20">
                        <li><a href="index.html"># Home</a></li>
                        <li>&nbsp;-&nbsp;</li>
                        <li>Event Gallery</li>
                    </ul>
                    <h1>Event Gallery</h1>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- gallery-style-two -->
        <section class="gallery-style-two pb_110">
            <div class="auto-container">
                <div class="sortable-masonry">
                    <div class="items-container row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all technology grocery hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-5.jpg" alt=""></figure>
                                    <div class="link"><a href="index-2.html"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all grocery technology material">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-6.jpg" alt=""></figure>
                                    <div class="link"><a href="index-2.html"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-7.jpg" alt=""></figure>
                                    <div class="link"><a href="index-2.html"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all grocery hospital construction">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-8.jpg" alt=""></figure>
                                    <div class="link"><a href="index-2.html"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-9.jpg" alt=""></figure>
                                    <div class="link"><a href="index-2.html"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-10.jpg" alt=""></figure>
                                    <div class="link"><a href="index-2.html"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-11.jpg" alt=""></figure>
                                    <div class="link"><a href="index-2.html"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all construction hospital">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/gallery/gallery-12.jpg" alt=""></figure>
                                    <div class="link"><a href="index-2.html"><i class="icon-25"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery-style-two end -->

          <!-- main-footer -->
          <footer class="main-footer style-three">
            <div class="bg-layer" style="background-image: url(assets/images/background/footer-bg.jpg);"></div>
            <div class="widget-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="{{route('home')}}"><img src="assets/images/logo-2.png" alt=""></a></figure>
                                <p style="margin-bottom: 15px;">
                                    Empowering Leaders, Shaping Futures. Join us in driving positive change and fostering impactful leadership.</p>
                                <h3>Social Media:</h3>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/youngleadersingovernance?mibextid=ZbWKwL">facebook</a></li>
                                    <li><a href="#">twitter</a></li>
                                    <li><a href="#">linkedin</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <span class="title-text">Quick Links</span>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><a href="#">Events</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget newsletter-widget">
                                <span class="title-text">News Letter</span>
                                <div class="widget-content">
                                    <p>Join our newsletter list and get latest information and updates</p>
                                    <div class="location-box mb_35">
                                        <h5>Address :</h5>
                                        <span><img src="assets/images/icons/icon-5.png" alt="">Suite B10, Abraham Plaza, Plot 6 Ekukimam St, Utako District, Abuja</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget instagram-widget">
                                <span class="title-text">Instagram</span>
                                <div class="widget-content">
                                    <ul class="image-list clearfix">
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-1.jpg" alt="">
                                                <a href="https://www.instagram.com/youngleadersig?igsh=dm9odGphdzNibnpk"><i class="icon-13"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-2.jpg" alt="">
                                                <a href="https://www.instagram.com/youngleadersig?igsh=dm9odGphdzNibnpk"><i class="icon-13"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-3.jpg" alt="">
                                                <a href="https://www.instagram.com/youngleadersig?igsh=dm9odGphdzNibnpk"><i class="icon-13"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-4.jpg" alt="">
                                                <a href="https://www.instagram.com/youngleadersig?igsh=dm9odGphdzNibnpk"><i class="icon-13"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-5.jpg" alt="">
                                                <a href="https://www.instagram.com/youngleadersig?igsh=dm9odGphdzNibnpk"><i class="icon-13"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-6.jpg" alt="">
                                                <a href="https://www.instagram.com/youngleadersig?igsh=dm9odGphdzNibnpk"><i class="icon-13"></i></a>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright"><p>&copy; 2024 YLGI, All Rights Reserved. Powered by TechBuddie.</p></div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->

         <!--Scroll to top-->
         <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->

</div>    

<!-- jequery plugins -->
<script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/jquery.fancybox.js"></script>
    <script src="/assets/js/appear.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <script src="/assets/js/parallax-scroll.js"></script>
    <script src="/assets/js/scrollbar.js"></script>

    <!-- main-js -->
    <script src="/assets/js/script.js"></script>
</body>

</html>