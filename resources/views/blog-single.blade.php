@extends('frontend.master')

@section('content')
<div class="page-wrapper">
 	
    <!-- Main Header-->
    <header class="main-header">
        
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
            <h1>Single Post</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{ url('blog') }}">Blog</a></li>
                <li>Single Post</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side / Our Blog-->
                <div class="content-side col-md-12 col-sm-12 col-xs-12">
                    <!--Our Classic-->
                    <div class="blog-single padding-right">
                        <div class="inner-box">
                            <div class="top-box clearfix">
                                <div class="image-box">
                                    <img src="{{ asset('frontend/assets/images/testimonials/1.png')}}" alt="Awesome Image"/>
                                    <h4>Perry Milton</h4>
                                    <p>Posted On 21st July, 2018</p>
                                </div><!-- /.image-box -->
                                <div class="text-box">
                                    <h2>Top 10 reason why should choose our industry by expert.</h2>
                                </div><!-- /.text-box -->
                            </div><!-- /.top-box -->
                            <div class="image"><img src="{{ asset('frontend/assets/images/resource/blog-1.jpg') }}" alt="" />
                            </div>
                            <div class="lower-content clearfix">
                                <br>
                                <p>How all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness take a trivial example.</p>
                                <p>Desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure account of system. </p>
                                <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that all are extremely.</p>
                                <blockquote>
                                    <div class="quote-icon"><span class="icon fa fa-quote-right"></span></div>
                                    <div class="blockquote-text">  There anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which  can procure him some great pleasure. </div>
                                    <div class="quote-info">
                                        <h4>Richard Venanda</h4>
                                        <div class="quote-designation">CEO/Founder</div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Sidebar Page Container-->

@endsection