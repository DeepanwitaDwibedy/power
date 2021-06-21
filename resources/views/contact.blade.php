@extends('frontend.master')

@section('content')
<div class="page-wrapper">
 	
    <!-- Preloader -->
    {{--<div class="preloader"></div>--}}
 	
    <!-- Main Header-->
    <header class="main-header style-two">
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="pull-left" >
                        <div class="logo" style="padding: 7px 10px 20px 10px;"><a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt="" title=""></a></div>
                    </div>
                    
                    
                        
                        <!--Info Box-->
                        <div class=" info-box" style="vertical-align: baseline;margin: 0px; padding-left: 84px">
                            <div class="icon-box" style="padding: 7px 10px 20px 10px"><span class="machinery-icon-map" style="font-size: 25px"></span></div>
                            <ul>
                                <li style="padding: 7px 0px 0px 0px;font-size: 12px">Plot no-2027,Ground floor</li>
                                <li><strong style="font-size: 12px;">BBSR,Khordha-751002,Odisha</strong></li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="info-box" style="vertical-align: baseline; margin: 0px; padding-left: 64px">
                            <div class="icon-box"><span class="machinery-icon-contact" style="font-size: 25px"></span></div>
                            <ul>
                                <li style="font-size: 12px;">+(91)-8128729003</li>
                                <li><strong style="font-size: 12px;">shreeganesh@gmail.com</strong></li>
                            </ul>
                        </div>
                        
                        <!--social Box-->
                        <div class=" info-box" style="vertical-align: baseline;margin: 0px; padding-left: 60px;text-align: right;">
                                <ul>
                                    <li style="text-align: right;">
                                        <a href="#"><span class="fa fa-sign-in"></span> Login </a>
                                    </li>
                                    <li>
                                        <div class="social-icons" style="text-align: right;">

                                           <a href="#" style="height: 25px; width: 25px; line-height: 25px;"><i class="fa fa-facebook-f"></i></a>
                                           <a href="#" style="height: 25px; width: 25px; line-height: 25px;"><i class="fa fa-twitter"></i></a>
                                           <a href="#" style="height: 25px; width: 25px; line-height: 25px;"><i class="fa fa-linkedin"></i></a>
                                           <a href="#" style="height: 25px; width: 25px; line-height: 25px;"><i class="fa fa-youtube"></i></a>
                                       </div>
                                    </li>
                                </ul>                               
                            </div><!-- /.social-icons -->                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Header Lower-->
        <div class="header-lower">
            
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li><a href="{{ url('about') }}">About Us</a>
                                </li>
                                <li><a href="{{ url('shop') }}">Shop</a>
                                </li>
                                <li><a href="{{ url('blog') }}">Blog</a>
                                </li>
                                <li><a href="{{ url('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
        <!--End Header Lower-->

    </header>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(frontend/assets/images/background/2.jpg)">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section three -->
    <section class="contact-section-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="info-column col-md-4 col-sm-6 col-xs-12 ">
                    <div class="branch-info-box">
                        <div class="image-box">
                            <div class="image"><a href="#"><img src="{{ asset('frontend/assets/images/resource/branch-3.jpg') }}" alt=""></a></div>
                        </div>
                        <div class="lower-content">
                            <ul>
                                <li>
                                    <span class="icon flaticon-place"></span>
                                    <h5>Plot no- 2027,Ground Floor,Samantarapur,</h5>
                                    <p>Bhubaneswar,Khordha-751002,Odisha,India</p>
                                </li>

                                <li>
                                    <span class="icon flaticon-support"></span>
                                    <h5>Call Us On</h5>
                                    <p><a href="#">+(91)-8128729003</a></p>
                                </li>

                                <li>
                                    <span class="icon flaticon-plane"></span>
                                    <h5>Mail Us at</h5>
                                    <p><a href="#">shreeganesh@gmail.com</a></p>
                                </li>

                                <li>
                                    <span class="icon flaticon-watch"></span>
                                    <h5>Working Hours</h5>
                                    <p>Mon-Satday: 09.00am to 10.00pm</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Send Message Us</h2>
                            <div class="text">You can reach any branch at your desk,our experts will help you 24/7.</div>
                        </div>
                        <!--Contact Form-->
                        <div class="contact-form style-three">
                            <form method="post" action="" id="contact-form">
                                <div class="row clearfix">
                                    <div class="left-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="username" value="" placeholder="Your Name" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" value="" placeholder="Email Address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" value="" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group border-left">
                                            <label>Massage</label>
                                            <textarea name="message" placeholder="Massage"></textarea>
                                        </div>
                                    </div>
                                    <div class="column col-md-12 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section three -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="frontend/assets/images/icons/map-marker-2.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='#'>shreeganesh@gmail.com</a>">
            </div>
        </div>
    </section>
    <!-- End Contact Map Section -->

</div>
@endsection