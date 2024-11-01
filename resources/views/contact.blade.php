@extends('layout')
@section('content')
 <!-- page-title -->
 <section class="page-title">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title-7.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix mb_20">
                        <li><a href="index.html"># Home</a></li>
                        <li>&nbsp;-&nbsp;</li>
                        <li>Contact</li>
                    </ul>
                    <h1>Contact Us</h1>
                </div>
            </div>
        </section>
        <!-- page-title end -->

         <!-- contact-section -->
         <section class="contact-section pb_140">

            
            
<div class="auto-container">
    <div class="row clearfix">
        <div class="col-lg-9 col-md-12 col-sm-12 form-column">
            <h2 style="padding-bottom: 15px;">Got Inquiries? Send Us a Message</h2>
            <div class="form-inner">
                <form method="post" action="" id="contact-form" class="default-form"> 
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Name*" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email*" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" required="" placeholder="Your Phone*">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" required="" placeholder="Subject">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Enter your comment here"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                            <button class="theme-btn btn-one" type="submit" name="submit-form">Send Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 info-column" style="margin-top: 60px;">
            <div class="info-inner">
                <div class="single-item mb_60">
                    <h6>Send Us a Message</h6>
                    <ul class="info-list clearfix">
                        <li><i class="icon-27"></i><a href="mailto:youngleadersingovernance@gmail.com">youngleadersingovernance<br>@gmail.com</a></li>
                        <li><i class="icon-28"></i><a href="tel:+234 (802) 341 6380">+234 (802) 341 6380</a></li>
                    </ul>
                </div>
                
                <div class="single-item">
                    <h6> </h6>
                    <ul class="info-list clearfix">
                        <li><i class="icon-29"></i><a href="#">@Young Leaders In Government Initiative</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- contact-section end -->

 <!-- google-map-section -->
 <section class="google-map-section">
            <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.9732884794307!2d7.435587375019305!3d9.066197740996587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e74d4cd48dfb3%3A0xa3b382a73fd54f12!2sGod%20Is%20Good%20fct!5e0!3m2!1sen!2sng!4v1722030326017!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- google-map-section end -->
@endsection