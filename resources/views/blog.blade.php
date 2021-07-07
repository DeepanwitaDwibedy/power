@extends('frontend.master')

@section('content')
<div class="page-wrapper">
 	
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
            <h1>Blog Default</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('blog') }}">Blog</a></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            @foreach($blog as $blog)
            <div class="row clearfix">
                <!-- News Block -->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                            <img src="{{ asset('/images/upload_image/'.$blog -> image) }}" alt="">
                        <div class="lower-content clearfix">
                            <div class="info">
                                <ul>
                                    <li><a href="#">{{ strtoupper(strtolower($blog ->tag))  }}</a>, </li>
                                    <!-- <li><a href="#">June 06, 2019</a></li> -->
                                </ul>  
                            </div>
                            <h3>{{ strtoupper(strtolower($blog->title)) }}</h3>
                            
                            <div class="text">{{ strtoupper(strtolower($blog->short_description)) }}</div>
                            <div class="more-box clearfix">
                                <div class="author-box">
                                   <!--  <img src="{{ asset('/images/upload_image/'.$blog -> image) }}" alt="Awesome Image"/> -->
                                    <span class="author-name">{{ strtoupper(strtolower($blog->name)) }}</span>
                                </div><!-- /.author-box -->
                                <div class="link-box"><a href="{{ url('blog-single')}}">Read More</a> <span class="icon icon-aroow-right"></span></div>
                            </div>
                            <!-- /.more-box -->
                        </div>
                    </div>
                </div>
            </div>
@endforeach
            <!-- Styled Pagination -->
            <div class="styled-pagination text-center">
                <ul class="clearfix">
                    <li class="prev"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="next"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End About Us -->
</div>
@endsection