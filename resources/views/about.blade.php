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
            <h1>About Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Us -->
    <section class="about-section-two">
        <div class="auto-container">
            <div class="outer-box clearfix" style="background-image:url(frontend/assets/images/background/4.jpg);">
                <div class="highlight-box">
                    <div class="info-carousel owl-carousel owl-theme">
                        <!-- About Block -->
                        <div class="about-block-two">
                            <div class="icon-box"><span class="icon flaticon-house"></span></div>
                            <h3>ISO Cerfitied Company</h3>
                            <div class="text">Explain to you how this mistaken denouncing pleasure and praising pain was born & will give complete account of the system.</div>
                        </div>

                        <!-- About Block -->
                        <div class="about-block-two">
                            <div class="icon-box"><span class="icon flaticon-house"></span></div>
                            <h3>Smart Technology</h3>
                            <div class="text">Explain to you how this mistaken denouncing pleasure and praising pain was born & will give complete account of the system.</div>
                        </div>

                        <!-- About Block -->
                        <div class="about-block-two">
                            <div class="icon-box"><span class="icon flaticon-house"></span></div>
                            <h3>Team of Professionals</h3>
                            <div class="text">Explain to you how this mistaken denouncing pleasure and praising pain was born & will give complete account of the system.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!-- Story Section -->
    <section class="story-section">
        <div class="auto-container">
            <div class="sec-title">
                 <h2>Story About SHREE GANESH</h2>
            </div>
            <div class="row clearfix">
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h3>"SHREE GANESH ENTERPRISES, is the fastest growing manufacturing, trading and importing company. </h3>
                        <div class="text">
                            <p>Our offered products find its applications in diverse business verticals, ranging from industrial, construction, and logistics to heavy engineering segments. And, owing to the client-centric approach We are able to make better decisions when it comes to product plan and development.</p>
                            <p>Our leader and mentor<b> "Mr. L Patra"</b>, is backed by industrial knowledge and a keen approach towards innovation that guides us to integrate quality with cost efficiency.</p>
                            <p>Established in the year <b>2017</b> as a Sole Proprietorship firm, in <b>Bhubaneswar(Odisha, India)</b>, we <b>SHREE GANESH ENTERPRISES</b> are the leading manufacturer of a qualitative gamut of  Machinery Equipment <b> Disposal Machinery, Paper  And Sanitation Machinery, Agriculture Machinery, Food Processing Machinery, Packaging Machinery Many more  Sector Machinery  Like- Manual Slipper/ Hawai Chappal Sole Cutting Machine, Hydraulic Clicker Slipper/Hawai Chappal Sole Cutting Machine, Hydraulic Slipper/ Hawai Chappal Sole Cutting Machine, Hydraulic Single Station Scrubber Packing Machine, Hydraulic Double Station Scrubber Packing Machine Oil Extract Machine, agarbatti Machinery, paper plate making Machine  Fly Ash Making machine</b> and much more. These machines are manufactured using best quality components and widely known for their high performance, hassle-free operation and long service life.</p>
                            <p>Leveraging on our latest infrastructure facilities, we are able to offer the best quality grade products. In this aspect, we have developed a fully equipped manufacturing facility. Being a quality conscious organization, we take care of product development processes to ensure that zero defect products passes through our end.</p>
                        </div>
                        {{--x--}}
                    </div>
                </div>

                <!--Verticle Carousel Column-->
                <div class="carousel-column col-md-6 col-sm-12 col-xs-12">
                    <div class="verticle-slider-one">
                        <div class="verticle-carousel">
                            <!--Featured Block Two-->
                            <div class="story-block">
                                <div class="inner-box">
                                    <span class="date">Nov 1984</span>
                                    <div class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-1.jpg') }}" alt=""></div>
                                    <h3><a href="#">Started at Newyork City</a></h3>
                                    <div class="text">The great explorer of the truth, the master-builder of human happiness one rejects dislikes, or avoids pleasure itself.</div>
                                </div>
                            </div>

                            <!--Featured Block Two-->
                            <div class="story-block">
                                <div class="inner-box">
                                    <span class="date">Nov 1984</span>
                                    <div class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-2.jpg') }}" alt=""></div>
                                    <h3><a href="#">8 New Branches Opened</a></h3>
                                    <div class="text">The great explorer of the truth, the master-builder of human happiness one rejects dislikes, or avoids pleasure itself.</div>
                                </div>
                            </div>

                            <!--Featured Block Two-->
                            <div class="story-block">
                                <div class="inner-box">
                                    <span class="date">Nov 1984</span>
                                    <div class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-1.jpg') }}" alt=""></div>
                                    <h3><a href="#">Started at Newyork City</a></h3>
                                    <div class="text">The great explorer of the truth, the master-builder of human happiness one rejects dislikes, or avoids pleasure itself.</div>
                                </div>
                            </div>

                            <!--Featured Block Two-->
                            <div class="story-block">
                                <div class="inner-box">
                                    <span class="date">Nov 1984</span>
                                    <div class="image-box"><img src="{{ asset('frontend/assets/images/resource/feature-2.jpg') }}" alt=""></div>
                                    <h3><a href="#">8 New Branches Opened</a></h3>
                                    <div class="text">The great explorer of the truth, the master-builder of human happiness one rejects dislikes, or avoids pleasure itself.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Story Section -->
<br>
        <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(frontend/assets/images/background/3.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="text-box"><p>Innovative products and service for construction projects and Automative service.</p></div>
                <div class="btn-box"><a href="#" class="theme-btn btn-style-one">Our Latest Projects</a></div>
            </div>
        </div>
    </section>
    <!--End Call To Action -->

    <!-- Industry Section -->
    <div class="industry-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Shree Ganesh Specials</h2>
            </div>
        </div>
        <div class="industry-carousel owl-carousel owl-theme">
            <!-- Industry Block -->
            <div class="industry-block">
                <div class="image-box">
                    <div class="image"><a href="#"><img src="{{ asset('frontend/assets/images/resource/industry-1.jpg') }}" alt=""></a></div>
                </div>
                <div class="lower-content">
                     <div class="icon-box"><span class="icon flaticon-man-welding"></span></div>
                     <h3><a href="#">High-quality machines</a></h3>
                     <div class="text">There anyone who loves or pursues sed desires obtain pain of itself.</div>
                     {{--<div class="link-box"><a href="#"><i class="fa fa-hand-o-right"></i>Read More</a></div>--}}
                </div>
            </div>

            <!-- Industry Block -->
            <div class="industry-block bg-gray">
                <div class="image-box">
                    <div class="image"><a href="#"><img src="{{ asset('frontend/assets/images/resource/industry-2.jpg') }}" alt=""></a></div>
                </div>
                <div class="lower-content">
                     <div class="icon-box"><span class="icon flaticon-robot-arm"></span></div>
                     <h3><a href="#">Well-equipped infrastructural unit</a></h3>
                     <div class="text">Any right to find fault with a man ut who chooses to enjoy a pleasure.</div>
                     {{--<div class="link-box"><a href="#"><i class="fa fa-hand-o-right"></i>Read More</a></div>--}}
                </div>
            </div>

            <!-- Industry Block -->
            <div class="industry-block">
                <div class="image-box">
                    <div class="image"><a href="#"><img src="{{ asset('frontend/assets/images/resource/industry-3.jpg') }}" alt=""></a></div>
                </div>
                <div class="lower-content">
                     <div class="icon-box"><span class="icon flaticon-industry"></span></div>
                     <h3><a href="#">Transparent dealings</a></h3>
                     <div class="text">Expound the actual teaching of the great explorer of the truth, the master.</div>
                     {{--<div class="link-box"><a href="#"><i class="fa fa-hand-o-right"></i>Read More</a></div>--}}
                </div>
            </div>

            <!-- Industry Block -->
            <div class="industry-block bg-gray">
                <div class="image-box">
                    <div class="image"><a href="#"><img src="{{ asset('frontend/assets/images/resource/industry-4.jpg') }}" alt=""></a></div>
                </div>
                <div class="lower-content">
                     <div class="icon-box"><span class="icon flaticon-list"></span></div>
                     <h3><a href="#">Skilled team of professionals</a></h3>
                     <div class="text">Occur in which toil and pain can procure him some great pleasure.</div>
                     {{--<div class="link-box"><a href="#"><i class="fa fa-hand-o-right"></i>Read More</a></div>--}}
                </div>
            </div>

            <!-- Industry Block -->
            <div class="industry-block">
                <div class="image-box">
                    <div class="image"><a href="#"><img src="{{ asset('frontend/assets/images/resource/industry-5.jp') }}g" alt=""></a></div>
                </div>
                <div class="lower-content">
                     <div class="icon-box"><span class="icon flaticon-gear"></span></div>
                     <h3><a href="#">Ontime Delivery</a></h3>
                     <div class="text">Expound the actual teaching of the great explorer of the truth, the master.</div>
                     {{--<div class="link-box"><a href="#"><i class="fa fa-hand-o-right"></i>Read More</a></div>--}}
                </div>
            </div>

            <!-- Industry Block -->
            <div class="industry-block bg-gray">
                <div class="image-box">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/resource/industry-2.jpg')}}" alt=""></a></div>
                </div>
                <div class="lower-content">
                     <div class="icon-box"><span class="icon flaticon-robot-arm"></span></div>
                     <h3><a href="#">Easy payment modes</a></h3>
                     <div class="text">Any right to find fault with a man ut who chooses to enjoy a pleasure.</div>
                     {{--<div class="link-box"><a href="#"><i class="fa fa-hand-o-right"></i>Read More</a></div>--}}
                </div>
            </div>

            <!-- Industry Block -->
            <div class="industry-block bg-gray">
                <div class="image-box">
                    <div class="image"><a href="#"><img src="{{asset('frontend/assets/images/resource/industry-2.jpg')}}" alt=""></a></div>
                </div>
                <div class="lower-content">
                    <div class="icon-box"><span class="icon flaticon-robot-arm"></span></div>
                    <h3><a href="#">Reasonable pricing structure</a></h3>
                    <div class="text">Any right to find fault with a man ut who chooses to enjoy a pleasure.</div>
                    {{--<div class="link-box"><a href="#"><i class="fa fa-hand-o-right"></i>Read More</a></div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- Industry Section -->
</div>
@endsection