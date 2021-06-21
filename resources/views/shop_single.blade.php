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
            <h1>Product Single</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Shop</li>
                <li>Product Single</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->
                <div class="content-side pull-right col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <!--Shop Single-->
                    <div class="shop-single">
                        <div class="product-details">
                            
                            <!--Basic Details-->
                            <div class="basic-details">
                                <div class="row clearfix">
                                    <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                        <figure class="image-box"><a href="{{ asset('frontend/assets/images/resource/products/news-12.jpg') }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('frontend/assets/images/resource/products/news-12.jpg') }}" alt=""></a></figure>
                                    </div>
                                    <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="details-header">
                                            <h4>Hydraulic Single Die Panel Operated Machine</h4>
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star-half-empty"></span>
                                            </div>
                                            <div class="item-price">$29.00</div>
                                        </div>

                                        <div class="text">
                                            <p>Working from home meant we couldsnack and coffee breaks change our desks or view, good, drink on the job, even spend the weather started getting roughday.</p>
                                        </div>
                                        <div class="location">Check Delivery Option at Your Location:</div>
                                        <!-- Pincode Form -->
                                        <div class="pincode-form">
                                            <form method="post" action="#">
                                                <div class="form-group">
                                                    <input type="text" name="text" value="" placeholder="Pincode" required>
                                                    <button type="submit">Check</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="expired">Expected Delivery in 4-10 Days</div>
                                        <div class="other-options clearfix">
                                            <div class="item-quantity"><input class="quantity-spinner" type="text" value="2" name="quantity"></div>
                                            <button type="button" class="theme-btn btn-style-one add-to-cart">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Basic Details-->
                            
                            <!--Product Info Tabs-->
                            <div class="product-info-tabs">
                                <!--Product Tabs-->
                                <div class="prod-tabs tabs-box">
                                
                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-details" class="tab-btn">Description</li>
                                        <li data-tab="#prod-reviews" class="tab-btn active-btn">Reviews (2)</li>
                                    </ul>
                                    
                                    <!--Tabs Container-->
                                    <div class="tabs-content">
                                        
                                        <!--Tab -->
                                        <div class="tab" id="prod-details">
                                            <div class="content">
                                                <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.Bring to the table win-win survival strategies to ensure proactive domination. runway heading towards a streamlined cloud solution.</p>
                                                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence. </p>
                                            </div>
                                        </div>
                                        
                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="prod-reviews">
                                            <h2 class="title">2 Reviews For win Your Friends</h2>
                                            <!--Reviews Container-->
                                            <div class="comments-area">
                                                <!--Comment Box-->
                                                <div class="comment-box">
                                                    <div class="comment">
                                                        <div class="author-thumb"><img src="{{ asset('frontend/assets/images/resource/author-1.jpg') }}" alt=""></div>
                                                        <div class="comment-inner">
                                                            <div class="comment-info clearfix">Steven Rich – Sep 17, 2016:</div>
                                                            <div class="rating">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star light"></span>
                                                            </div>
                                                            <div class="text">How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Comment Box-->
                                                <div class="comment-box">
                                                    <div class="comment">
                                                        <div class="author-thumb"><img src="{{ asset('frontend/assets/images/resource/author-2.jpg')}}" alt=""></div>
                                                        <div class="comment-inner">
                                                            <div class="comment-info clearfix">William Cobus – Aug 21, 2016:</div>
                                                            <div class="rating">
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star-half-empty"></span>
                                                            </div>
                                                            <div class="text">Working from home meant we couldsnack & coffee breaks change our desks or view good, drink on the job even spend  getting roughday in pajamas consequences.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Comment Form -->
                                            <div class="shop-comment-form"> 
                                                <h2>Add Your Reviews</h2>
                                                <div class="rating-box">
                                                    <div class="text"> Your Rating:</div>
                                                    <div class="rating">
                                                        <a href="#">
                                                            <span class="fa fa-star"></span>
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <a href="#">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <a href="#">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <a href="#">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </a>
                                                    </div>
                                                    <div class="rating">
                                                        <a href="#">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <form method="post" action="#">
                                                    <div class="row clearfix">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                            <label>First Name *</label>
                                                            <input type="text" name="username" placeholder="" required>
                                                        </div>
                                                        
                                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                            <label>Last Name*</label>
                                                            <input type="email" name="email" placeholder="" required>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                                            <label>Email*</label>
                                                            <input type="text" name="number" placeholder="" required>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                            <label>Your Comments*</label>
                                                            <textarea name="message" placeholder=""></textarea>
                                                        </div>
                                                        
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit now</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Info Tabs-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection