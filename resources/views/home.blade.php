<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>YLGI</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon-2.png" type="image/x-icon">

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
<link href="/assets/css/module-css/banner.css" rel="stylesheet">
<link href="/assets/css/module-css/mission.css" rel="stylesheet">
<link href="/assets/css/module-css/about.css" rel="stylesheet">
<link href="/assets/css/module-css/gallery.css" rel="stylesheet">
<link href="/assets/css/module-css/clients.css" rel="stylesheet">
<link href="/assets/css/module-css/conference.css" rel="stylesheet">
<link href="/assets/css/module-css/testimonial.css" rel="stylesheet">
<link href="/assets/css/module-css/cta.css" rel="stylesheet">
<link href="/assets/css/module-css/news.css" rel="stylesheet">
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
                                        <li class="current dropdown"><a href="{{route('home')}}">Home</a>
                                        </li> 
                                        <li class=" dropdown"><a href="{{route('about')}}">About Us</a>
                                    
                                        </li> 
                                        <!-- <li class="dropdown"><a href="event.html">Events</a>
                        
                                        </li> -->
                                        <li class="dropdown"><a href="{{route('gallery')}}">Gallery</a>
                    
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

    <!-- banner-style-two -->
    <section class="banner-style-two">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-1.jpg);"></div>
                    
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="date"><img src="assets/images/icons/icon-1.png" alt="">#YLGI</span>
                            <h2>Empowering Next Generation Leaders</h2>
                            <p>We groom young leaders in government with skills, integrity, and vision to create a brighter future.</p>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one">See More</a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-2.jpg);"></div>
                   
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="date"><img src="assets/images/icons/icon-1.png" alt="">#YLGI</span>
                            <h2>Driving Positive Change Through Youths</h2>
                            <p>We groom young leaders in government with skills, integrity, and vision to create a brighter future.</p>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn btn-one">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-style-two end -->

         <!-- about-style-three -->
         <section class="about-style-three pt_140 pb_140">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title mb_20">
                                <span class="sub-title">#About Us</span>
                                <h2>Empowerment and leadership are our core values</h2>
                            </div>
                            <div class="text-box mb_50">
                                <p class="bold-text">Young Leaders in Governance Initiative (YLGI) is a dynamic non-governmental organization committed to nurturing and empowering the next generation of leaders. </p>
                                <p>We foster leadership skills and civic engagement among young people, equipping them with the tools, knowledge, and networks necessary to drive positive change within their communities and beyond.</p>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <div class="pattern-2 float-bob-y" style="background-image: url(assets/images/shape/shape-16.png);"></div>
                            <figure class="image image-1"><img src="assets/images/resource/about-5.jpg" alt=""></figure>
                            <figure class="image image-2"><img src="assets/images/resource/about-6.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-three end -->

         <!-- feature-section -->
         <section class="feature-section pb_110">
            <div class="auto-container">
                <div class="title-inner centred mb_60">
                    <div class="sec-title mb_20 centred">
                        <span class="sub-title">#We are raising the next generation of leaders</span>
                        <h2>Join our Workshop</h2>
                    </div>
                    <p>With our passion, knowledge, creative flair and inspiration, <br />we are dedicated in helping.</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-7.png" alt=""></div>
                                <h3>Public Speaking</h3>
                                <p>Join our Public Speaking Workshop to enhance communication skills, boost confidence, and captivate any audience. Learn to articulate ideas clearly and persuasively, empowering you to speak with impact.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h3>Worldwide Exposure</h3>
                                <p>Expand your global reach and connect with international audiences. Gain insights into effective cross-cultural communication and strategies to build a global presence. Empower yourself to succeed on the world stage.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-9.png" alt=""></div>
                                <h3>Deepen Your Understanding</h3>
                                <p>Expand your knowledge on political matters in our workshop designed to enhance your insight on global and local politics. Engage with experts, explore current issues, and develop informed perspectives in political discourse and decision-making.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt=""></div>
                                <h3>Find a Tribe</h3>
                                <p>Connect with like-minded individuals and build meaningful relationships. Learn effective networking strategies, share experiences, and find your community of support and inspiration. Expand your network and grow together.                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->

        <!-- conference-style-two -->
        <section class="conference-style-two pt_140 pb_140">
            <div class="bg-layer" style="background-image: url(assets/images/background/conference-bg.jpg);"></div>
            <div class="auto-container">
                <div class="title-inner mb_60">
                    <div class="sec-title mb_20 light">
                        <span class="sub-title"># Our Upcoming Events</span>
                        <h2>Connect with other <br />Leaders</h2>
                    </div>
                    <p></p>
                </div>
                
            </div>
        </section>
        <!-- conference-style-two end -->

        <!-- conference-section -->
        <section class="conference-section">
            <div class="outer-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h3>Next Conference Location:</h3>
                            <div class="inner-box">
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-3"></i></div>
                                    <h4>Date:</h4>
                                    <p>Saturday 27 July, 2024</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-4"></i></div>
                                    <h4>Location:</h4>
                                    <p>FCT, Wuye</p>
                                </div>
                                <div class="btn-box">
                                    <a href="gear-up.html" class="theme-btn btn-one">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 carousel-column">
                        <div class="carousel-content">
                            <span class="title-text">Connect, Grow, Advance</span>
                            <div class="conference-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                <div class="conference-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/resource/conference-1.jpg" alt=""></figure>
                                        <div class="lower-content">
                                            <h3><a href="gear-up.html">Global Influencers Conference - Gear Up</a></h3>
                                            <p>The theme "Gear Up for the Global Influencers' Conference" embodies our commitment to preparing the next generation of leaders to navigate and shape the complex global landscape. Our vision is to..</p>
                                            <div class="link"><a href="gear-up.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="conference-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/resource/conference-2.jpg" alt=""></figure>
                                        <div class="lower-content">
                                            <h3><a href="index.html">Global Influencers Conference -Dare To Lead</a></h3>
                                            <p>Welcome to the "Dare to Lead" Youth Leadership Conference, where we challenge you to embrace your potential and step confidently into roles of influence. This event is designed to ignite your passion, sharpen your skills, and inspire you to lead with courage and vision..</p>
                                            <div class="link"><a href="index.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="conference-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/resource/conference-3.jpg" alt=""></figure>
                                        <div class="lower-content">
                                            <h3><a href="index.html">Global Influencers Conference - Leadership & Governance</a></h3>
                                            <p>At the "Leadership & Governance" Conference, where we explore the critical intersections of effective leadership and sound governance. This event is crafted to equip you with the knowledge and skills needed to lead with integrity and oversee responsible governance. </p>
                                            <div class="link"><a href="index.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="conference-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/resource/conference-1.jpg" alt=""></figure>
                                        <div class="lower-content">
                                            <h3><a href="index.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                                            <p>Nulla in mattis arcu ultrices suspendisse sed amet pulvinarert aliquam. Condimentum congue morbi risus platea. Ante elittg dolor augue tellus turpis tortor</p>
                                            <div class="link"><a href="index.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="conference-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/resource/conference-2.jpg" alt=""></figure>
                                        <div class="lower-content">
                                            <h3><a href="index.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                                            <p>Nulla in mattis arcu ultrices suspendisse sed amet pulvinarert aliquam. Condimentum congue morbi risus platea. Ante elittg dolor augue tellus turpis tortor</p>
                                            <div class="link"><a href="index.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="conference-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/resource/conference-3.jpg" alt=""></figure>
                                        <div class="lower-content">
                                            <h3><a href="index.html">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a></h3>
                                            <p>Nulla in mattis arcu ultrices suspendisse sed amet pulvinarert aliquam. Condimentum congue morbi risus platea. Ante elittg dolor augue tellus turpis tortor</p>
                                            <div class="link"><a href="index.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="conference-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/resource/conference-1.jpg" alt=""></figure>
                                        <div class="lower-content">
                                            <h3><a href="index.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                                            <p>Nulla in mattis arcu ultrices suspendisse sed amet pulvinarert aliquam. Condimentum congue morbi risus platea. Ante elittg dolor augue tellus turpis tortor</p>
                                            <div class="link"><a href="index.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="conference-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/resource/conference-2.jpg" alt=""></figure>
                                        <div class="lower-content">
                                            <h3><a href="index.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                                            <p>Nulla in mattis arcu ultrices suspendisse sed amet pulvinarert aliquam. Condimentum congue morbi risus platea. Ante elittg dolor augue tellus turpis tortor</p>
                                            <div class="link"><a href="index.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="conference-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/resource/conference-3.jpg" alt=""></figure>
                                        <div class="lower-content">
                                            <h3><a href="index.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
                                            <p>Nulla in mattis arcu ultrices suspendisse sed amet pulvinarert aliquam. Condimentum congue morbi risus platea. Ante elittg dolor augue tellus turpis tortor</p>
                                            <div class="link"><a href="index.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!-- conference-section end -->

         <!-- clients-style-two -->
         <section class="clients-style-two pt_110 pb_140">
            <div class="sec-title mb_20 centred">
                <span class="sub-title">#Partners</span>
                <h2>Our Partners</h2>
            </div>
            <div class="auto-container">
                <ul class="clients-logo-list">
                    <li><a href="index.html"><img src="assets/images/clients/clients-1.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-2.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-3.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-4.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-5.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-6.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-7.png" alt=""></a></li>
                    <li><a href="index.html"><img src="assets/images/clients/clients-8.png" alt=""></a></li>
                </ul>
            </div>
        </section>
        <!-- clients-style-two end -->

         <!-- gallery-style-two -->
         <section class="gallery-style-two pb_110">
            <div class="sec-title mb_20 centred">
                <span class="sub-title">#Gallery</span>
                <h2>Picture Gallery</h2>
            </div>
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
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery-style-two end -->

        <!-- testimonial-section -->
        <section class="testimonial-section pt_110 pb_140">
            <div class="pattern-layer">
                <div class="pattern-1 float-bob-x" style="background-image: url(assets/images/shape/shape-17.png);"></div>
            </div>
            <div class="auto-container">
                <div class="title-inner mb_60">
                    <div class="sec-title mb_20">
                        <span class="sub-title"># Testimonial</span>
                        <h2>What Members Are Saying</h2>
                    </div>
                    <p></p>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                <div class="icon-box"><i class="icon-8"></i></div>
                            </div>
                            <div class="text-box">
                                <p>Joining YLGI was pivotal for my career. Their training on leadership and governance provided practical strategies that improved my project management and stakeholder engagement. The support and mentorship have been crucial in my development as a leader.</p>
                                <h3>Chioma Johnson</h3>
                                <span class="designation">Member</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                <div class="icon-box"><i class="icon-8"></i></div>
                            </div>
                            <div class="text-box">
                                <p>YLGI leadership programs were a game-changer for me. Their workshops on governance and ethical leadership gave me the tools and confidence to lead effectively and make a real impact in my community. The mentorship and networking opportunities were invaluable in my personal and professional growth.</p>
                                <h3>Godwin Okoye</h3>
                                <span class="designation">Member</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->

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