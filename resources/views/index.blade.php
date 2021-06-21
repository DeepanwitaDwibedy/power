@extends('frontend.master')

@section('content')

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

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
                                <li class="@yield('index')"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="@yield('about')"><a href="{{ url('about') }}">About Us</a>
                                </li>
                                <li class="@yield('shop')"><a href="{{ url('shop') }}">Shop</a>
                                </li>
                                <li><a href="{{ url('blog') }}">Blog</a>
                                </li>
                                <li class="@yield('contact')"><a href="{{ url('contact') }}">Contact Us</a>
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

    <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active slide-1" style="background-image: url(frontend/assets/images/main-slider/banner-1-1.jpg);background-position: center center;">
                
                <div class="carousel-caption">
                    <div class="container">
                        <div class="box valign-middle">
                            <div class="content">
                                <div class="main-banner-content" data-animation="animated fadeInUp">
                                    <h3 class="title" > Welcome to</h3>
                                    <h2 style="color: black; font-size: 80px;">Shree Ganesh</h2>
                                    <p class="text">Year of Establishment is 2017</p>
                                    <a href="{{ url('about') }}" class="theme-btn btn-style-one">Read More</a>
                                    <a href="{{ url('shop') }}" class="theme-btn btn-style-two">Market Sectors</a>
                                </div><!-- /.main-banner-content -->
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="item slide-2" style="background-image: url(frontend/assets/images/main-slider/banner-1-2.jpg);background-position: center center;">
                
                <div class="carousel-caption">
                    <div class="container">
                        <div class="box valign-middle">
                            <div class="content pull-right ">
                                <div class="main-banner-content light" data-animation="animated fadeInUp">
                                    <h3 class="title" >Industry materials for</h3>
                                    <h2 style="font-size: 80px">Shree Ganesh</h2>
                                    <a href="{{ url('about') }}" class="theme-btn btn-style-one">Read More</a>
                                    <a href="{{ url('shop') }}" class="theme-btn btn-style-two">Market Sectors</a>
                                </div><!-- /.main-banner-content -->
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="item slide-3" style="background-image: url(frontend/assets/images/main-slider/banner-1-3.jpg);background-position: center center;">
                
                <div class="carousel-caption">
                    <div class="container">
                        <div class="box valign-middle">
                            <div class="content ">
                                <div class="main-banner-content" data-animation="animated fadeInUp">
                                    <h3 class="title" >Provide best industrial</h3>
                                    <h1>Solutions</h1>
                                    <p class="text">Additional Business Trader, Buyer-Company,Buyer-Individual,<br>Supplier,Exporter, Wholesaler,Retailer,Non-Profit,<br> Organization,Importer</p>
                                    <a href="{{ url('about') }}" class="theme-btn btn-style-one">Read More</a>
                                    <a href="{{ url('shop') }}" class="theme-btn btn-style-two">Market Sectors</a>
                                </div><!-- /.main-banner-content -->
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>

        <ul class="carousel-indicators list-inline custom-navigation">
            <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--
            --><li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li><!--
            --><li data-target="#minimal-bootstrap-carousel" data-slide-to="2"></li>
        </ul>
    </div>
        

    <!-- Highlights -->
    <div class="highlights dark-bg">
        <div class="auto-container">        
            <div class="highlight-carousel owl-carousel owl-theme">
                <!-- Highlight Block -->
                <div class="highlight-block">
                    <div class="inner-box">
                        <div class="icon-box"><span class="machinery-icon-factory"></span></div>
                        <div class="text">We are <span> ISO 9001:2005</span> certified company, It is a long established  fact that a reader.</div>
                    </div>
                </div>

                <!-- Highlight Block -->
                <div class="highlight-block">
                    <div class="inner-box">
                        <div class="icon-box"><span class="machinery-icon-factory"></span></div>
                        <div class="text">We are <span> ISO 9001:2005</span> certified company, It is a long established  fact that a reader.</div>
                    </div>
                </div>

                <!-- Highlight Block -->
                <div class="highlight-block">
                    <div class="inner-box">
                        <div class="icon-box"><span class="machinery-icon-factory"></span></div>
                        <div class="text">We are <span> ISO 9001:2005</span> certified company, It is a long established  fact that a reader.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Highlights -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h4>Our Services</h4>
                <h2>Our Market Sectors</h2>
            </div>

            <div class="services-carousel owl-carousel owl-theme">

                <!-- Services Block -->
                <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{ asset('frontend/assets/images/resource/service-1.jpg') }}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Construction Products</h3> <i class="icon flaticon-user-1"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{ asset('frontend/assets/images/resource/service-2.jpg ') }}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Aero Space Services</h3> <i class="icon flaticon-departures-1"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{ asset('frontend/assets/images/resource/service-3.jpg') }}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Railway Infrastructure</h3> <i class="icon flaticon-railway-1"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{ asset('frontend/assets/images/resource/service-1.jpg') }}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Construction Products</h3> <i class="icon flaticon-user-1"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{ asset('frontend/assets/images/resource/service-2.jpg') }}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Aero Space Services</h3> <i class="icon flaticon-departures-1"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{ asset('frontend/assets/images/resource/service-3.jpg') }}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="btn-box">
                                    <a href="#"><i class="icon arrow-top-right"></i>Read More</a>
                                </div>
                            </div>
                            <div class="title"><h3>Railway Infrastructure</h3> <i class="icon flaticon-railway-1"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- info box -->
            <div class="info-box">
                <h3>Since 2019, We provide best solutions for our valuable customers.</h3>
                <a href="#"><i class="icon flaticon-email"></i>Shree Ganesh@gmail.com</a>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- What We Do -->
    <section class="what-we-do">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content -->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <h4>Fun facts</h4>
                            <h2>What We Achived?</h2>
                            <h5>Strength and growth comes only through continuous effort & struggle.</h5>
                        </div>

                        <div class="info-box clearfix">
                            <span class="icon machinery-icon-worldwide"></span>
                            <span class="count">148 <span class="plus">+</span></span>
                            <span class="title"><span>Branches Worldwide</span></span>
                        </div>

                        <div class="text">Over 148+ branches  indignation & dislike men who beguiled demoralized <br> by the charms of pleasure of the moment, so blinded by desire, that they <br> cannot foresee the pain and over all trouble.</div>
                        <a href="#" class="more-btn"><i class="machinery-icon-next"></i> Locate Our Branches</a>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <figure class="image"><img src="{{ asset('frontend/assets/images/resource/video-img.jpg') }}" alt="">
                            <a href="#" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play-circle"></span></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End What We Do -->

    <!-- About Us -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Info Column -->
                <div class="info-column col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h4>Company</h4>
                        <h2>About Our Company</h2>
                    </div>
                    <div class="about-company">
                        <h4>We are leading manufacturing company in european <br> countries, serving sice 2019.</h4>
                        <div class="info-tabs tabs-box">
                            <ul class="tab-buttons">
                                <li data-tab="#info-tab-1" class="tab-btn active-btn">About Company</li>
                                <li data-tab="#info-tab-2" class="tab-btn ">Our Mission</li>
                                <li data-tab="#info-tab-3" class="tab-btn ">Our Vission</li>
                            </ul>

                            <div class="tabs-content">
                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="info-tab-1">                         
                                    <h3>We are Reliable & Experienced manufacturing Company.</h3>
                                    <div class="text">"<b>SHREE GANESH ENTERPRISES</b>, is the fastest growing manufacturing, trading and importing company. Its technological excellence in developing a matchless range of modern-day Hydraulic Equipment since <b>2017</b>.</div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="info-tab-2">                         
                                    <h3>We are Reliable & Experienced manufacturing Company.</h3>
                                    <div class="text">We Dedicate And Commit Ourselves To Achieve, Sustain And Foster Unmatched Excellence. To This End, We Will Pursue Continuous Research Of Our Products And Enhance Art Equipment To Provide Our Customers Up-To-Date And Intellectually Inspiring Environment Of Moral Values.</div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="info-tab-3">                         
                                    <h3>We are Reliable & Experienced manufacturing Company.</h3>
                                    <div class="text">We Dedicate And Committed Our Clients To Help Him  To Start Own Business With Minimum Investment And we Fully Supported Our Customers   To Provide update Many More </div>
                                </div>
                            </div>
                        </div>
                        <div class="link-box"><a href="{{ url('about') }}"><i class="machinery-icon-next"></i> Read More</a></div>
                    </div>
                </div>

                <!-- List Column -->
                <div class="list-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <!-- About Block -->
                        <div class="about-block">
                            <div class="inner-box">
                                <span class="icon icon-gear"></span>
                                <h4><a href="{{ url('shop') }}">Smart Technology</a></h4>
                                <div class="text">The quality of the machines that are been manufactured at <b>Shree Ganesh Enterprises</b> are at the top among all the machines manufacturing companies.</div>
                            </div>
                        </div>

                        <!-- About Block -->
                        <div class="about-block">
                            <div class="inner-box">
                                <span class="icon icon-clock"></span>
                                <h4><a href="{{ url('shop') }}">Punctual Delivery Time</a></h4>
                                <div class="text"> The main aim of <b>Shree Ganesh Enterprises</b> is<b>"Deliver the Best Quality in Cheap Rate";</b> this is the main reason why we are at the top in this field..</div>
                            </div>
                        </div>

                        <!-- About Block -->
                        <div class="about-block">
                            <div class="inner-box">
                                <span class="icon icon-worker"></span>
                                <h4><a href="{{ url('shop') }}">Team of Professionals</a></h4>
                                <div class="text">In the process of manufacturing the Hawai Chappal Sole Cutting machine or any other related machines, we take utmost care of the quality by choosing the best Raw materials, providing it at the cheapest cost and many other factors.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!-- Project Section -->
    <section class="project-section" style="background-image: url(frontend/assets/images/background/1.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <h4>Our Works</h4>
                <h2>Latest Projects</h2>
            </div>
            
            <!--Carousel Box-->
            <div class="carousel-box">
                <div class="project-carousel owl-carousel owl-theme">
                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="{{ asset('frontend/assets/images/resource/project-1.jpg') }}" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-1.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="#">Rail Engine Manufacture</a></h3>
                                <span class="tag">Engineering</span>
                            </div>
                        </div>
                    </div>
    
                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="{{ asset('frontend/assets/images/resource/project-2.jpg') }}" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-2.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="#">Rail Engine Manufacture</a></h3>
                                <span class="tag">Construction</span>
                            </div>
                        </div>
                    </div>
    
                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="{{ asset('frontend/assets/images/resource/project-3.jpg') }}" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-3.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="#">Generate Natural Power</a></h3>
                                <span class="tag">Power & Energy</span>
                            </div>
                        </div>
                    </div>
    
                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="{{ asset('frontend/assets/images/resource/project-1.jpg') }}" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-1.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="#">Rail Engine Manufacture</a></h3>
                                <span class="tag">Engineering</span>
                            </div>
                        </div>
                    </div>
    
                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="{{ asset('frontend/assets/images/resource/project-2.jpg') }}" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-2.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="#">Rail Engine Manufacture</a></h3>
                                <span class="tag">Construction</span>
                            </div>
                        </div>
                    </div>
    
                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure><a href="{{ asset('frontend/assets/images/resource/project-3.jpg') }}" class="ligtbox-image" data-fancybox="gallery"><img src="images/resource/project-3.jpg" alt=""></a></figure>
                            <div class="title-box">
                                <h3><a href="#">Generate Natural Power</a></h3>
                                <span class="tag">Power & Energy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Project Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h4>Testimonials</h4>
                <h2>Words From Our Customers</h2>
            </div><!-- /.sec-title -->
            <div class="testimonials-carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="signle-testimonial-style-one">
                        <div class="inner-box">
                            <img src={{ asset('frontend/assets/"images/testimonials/1.png') }}" alt="Awesome Image" class="client-image"/>
                            <h3>Aaron Orlando</h3>
                            <span>Manger, Genologics</span>
                            <p>“Idea of denouncing and serve praising pain was born I will give completes accounts of systems anyone loves work pursues or indications desires ”.</p>
                            <img src="{{ asset('frontend/assets/images/testimonials/c-1.png') }}" class="company-logo" alt="Awesome Image"/>
                        </div><!-- /.inner-box -->
                    </div><!-- /.signle-testimonial-style-one -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="signle-testimonial-style-one">
                        <div class="inner-box">
                            <img src="{{ asset('frontend/assets/images/testimonials/2.png') }}" alt="Awesome Image" class="client-image"/>
                            <h3>Trista Mons</h3>
                            <span>Manger, Nalashaa</span>
                            <p>"On the other hands, we gives denounced with sed righterours indignations all dislike men who are beguiled charms of pleasure moment of the day”.</p>
                            <img src="{{ asset('frontend/assets/images/testimonials/c-2.png') }}" class="company-logo" alt="Awesome Image"/>
                        </div><!-- /.inner-box -->
                    </div><!-- /.signle-testimonial-style-one -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="signle-testimonial-style-one">
                        <div class="inner-box">
                            <img src="{{ asset('frontend/assets/images/testimonials/3.png') }}" alt="Awesome Image" class="client-image"/>
                            <h3>Latrisha Deberg</h3>
                            <span>Manger, Chargity</span>
                            <p>“Prevents our being blame done what we likes best ever every pleasures is to be ut welcomes and every pains all works owing change the field”.</p>
                            <img src="{{ asset('frontend/assets/images/testimonials/c-3.png') }}" class="company-logo" alt="Awesome Image"/>
                        </div><!-- /.inner-box -->
                    </div><!-- /.signle-testimonial-style-one -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="signle-testimonial-style-one">
                        <div class="inner-box">
                            <img src="{{ asset('frontend/assets/images/testimonials/1.png') }}" alt="Awesome Image" class="client-image"/>
                            <h3>Ellis Strausser</h3>
                            <span>Manger, Genologics</span>
                            <p>“Idea of denouncing and serve praising pain was born I will give completes accounts of systems anyone loves work pursues or indications desires ”.</p>
                            <img src="{{ asset('frontend/assets/images/testimonials/c-1.png') }}" class="company-logo" alt="Awesome Image"/>
                        </div><!-- /.inner-box -->
                    </div><!-- /.signle-testimonial-style-one -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="signle-testimonial-style-one">
                        <div class="inner-box">
                            <img src="{{ asset('frontend/assets/images/testimonials/2.png') }}" alt="Awesome Image" class="client-image"/>
                            <h3>Vanita Scheve</h3>
                            <span>Manger, Nalashaa</span>
                            <p>"On the other hands, we gives denounced with sed righterours indignations all dislike men who are beguiled charms of pleasure moment of the day”.</p>
                            <img src="{{ asset('frontend/assets/images/testimonials/c-2.png') }}" class="company-logo" alt="Awesome Image"/>
                        </div><!-- /.inner-box -->
                    </div><!-- /.signle-testimonial-style-one -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="signle-testimonial-style-one">
                        <div class="inner-box">
                            <img src="{{ asset('frontend/assets/images/testimonials/3.png') }}" alt="Awesome Image" class="client-image"/>
                            <h3>Isaias Gencarelli</h3>
                            <span>Manger, Chargity</span>
                            <p>“Prevents our being blame done what we likes best ever every pleasures is to be ut welcomes and every pains all works owing change the field”.</p>
                            <img src="{{ asset('frontend/assets/images/testimonials/c-3.png') }}" class="company-logo" alt="Awesome Image"/>
                        </div><!-- /.inner-box -->
                    </div><!-- /.signle-testimonial-style-one -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="signle-testimonial-style-one">
                        <div class="inner-box">
                            <img src="{{ asset('frontend/assets/images/testimonials/1.png') }}" alt="Awesome Image" class="client-image"/>
                            <h3>Justin Sweeny</h3>
                            <span>Manger, Genologics</span>
                            <p>“Idea of denouncing and serve praising pain was born I will give completes accounts of systems anyone loves work pursues or indications desires ”.</p>
                            <img src="{{ asset('frontend/assets/images/testimonials/c-1.png') }}" class="company-logo" alt="Awesome Image"/>
                        </div><!-- /.inner-box -->
                    </div><!-- /.signle-testimonial-style-one -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="signle-testimonial-style-one">
                        <div class="inner-box">
                            <img src="{{ asset('frontend/assets/images/testimonials/2.png') }}" alt="Awesome Image" class="client-image"/>
                            <h3>Sierra Littmann</h3>
                            <span>Manger, Nalashaa</span>
                            <p>"On the other hands, we gives denounced with sed righterours indignations all dislike men who are beguiled charms of pleasure moment of the day”.</p>
                            <img src="{{ asset('frontend/assets/images/testimonials/c-2.png') }}" class="company-logo" alt="Awesome Image"/>
                        </div><!-- /.inner-box -->
                    </div><!-- /.signle-testimonial-style-one -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="signle-testimonial-style-one">
                        <div class="inner-box">
                            <img src="{{ asset('frontend/assets/images/testimonials/3.png') }}" alt="Awesome Image" class="client-image"/>
                            <h3>Ariane Lisker</h3>
                            <span>Manger, Chargity</span>
                            <p>“Prevents our being blame done what we likes best ever every pleasures is to be ut welcomes and every pains all works owing change the field”.</p>
                            <img src="{{ asset('frontend/assets/images/testimonials/c-3.png') }}" class="company-logo" alt="Awesome Image"/>
                        </div><!-- /.inner-box -->
                    </div><!-- /.signle-testimonial-style-one -->
                </div><!-- /.item -->
            </div><!-- /.testimonials-carousel owl-carousel owl-theme -->
        </div>
    </section>
    <!-- End Testimonial Section -->
    
    <section class="request-qoute-title-block bg-gray">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h4>Ask Our Expert</h4>
                <h2>Request For Free Quote</h2>
                <div class="text">Your details are kept strictly confidential as per our company privacy policy, Pleasure & praising <br> was we will give you a complete.</div><!-- /.text -->
            </div><!-- /.sec-title -->
        </div><!-- /.auto-container -->
    </section><!-- /.request-qoute-block -->

        <!-- Contact Section -->
    <section class="contact-section request-qoute-content-block">
        <div class="auto-container">
            <div class="row clearfix no-gutters">
                <!-- Title Column -->
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <img src="{{ asset('frontend/assets/images/resource/rqa-offer-box.jpg') }}" alt="Awesome Image"/>
                        <div class="overlay-box">
                            <div class="inner-box">
                                <div class="content">
                                    <h3>50% Off For Popular Machines</h3>
                                    <a href="{{ url('shop') }}" class="theme-btn btn-style-one">Buy Now</a>
                                </div><!-- /.content -->
                            </div><!-- /.inner-box -->
                        </div><!-- /.overlay-box -->
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="text">For Business: For Business inquiry fill our feedback form and Troll Free Number: +(91)-8128729003, our team will help you with in 24 hours.</div>
                        <!--Contact Form-->
                        <div class="contact-form">
                            <form method="post" action="#">
                                <div class="row clearfix">
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="username" value="" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Email Address" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Select Service</option>
                                                <option>Select Service</option>
                                                <option>Select Service</option>
                                                <option>Select Service</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Massage"></textarea>
                                        </div>

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
    <!--End Contact Section -->
<br><br>
    <section class="client-carousel-wrapper">
        <div class="auto-container">
            <div class="clients-carousel owl-theme owl-carousel">
                <div class="item">
                    <img src="{{ asset('frontend/assets/images/clients/1-1.png') }}" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('frontend/assets/images/clients/1-2.png') }}" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('frontend/assets/images/clients/1-3.png') }}" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('frontend/assets/images/clients/1-4.png') }}" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-1.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-2.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-3.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-4.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-1.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-2.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-3.png" alt="Awesome Image"/>
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/clients/1-4.png" alt="Awesome Image"/>
                </div><!-- /.item -->
            </div><!-- /.clien-carousel -->
        </div><!-- /.auto-container -->
    </section><!-- /.client-carousel-wrapper -->



</div>
<!--End pagewrapper-->



@endsection
