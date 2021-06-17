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
                                <li><strong style="font-size: 12px;">shreeganeh@gmail.com</strong></li>
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
            <h1>Shop Products</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Shop</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--Shop Single-->
                    <div class="shop-section">
                        
                        <!--Sort By-->
                        <div class="items-sorting">
                            <div class="row clearfix">
                                <div class="results-column col-md-6 col-sm-6 col-xs-12">
                                    <h4>Showing 1-9 of 12 results</h4>
                                </div>
                                <div class="select-column pull-right col-md-3 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <select name="sort-by">
                                            <option>Default Sorting</option>
                                            <option>By Order</option>
                                            <option>By Price</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row clearfix">
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{ asset('frontend/assets/images/resource/products/1.jpg') }}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><span class="tool-tip">Add to cart</span><a href="#"><span class="flaticon-supermarket"></span></a></li>
                                                    <li><span class="tool-tip">Add to Whishlist</span><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    <li><span class="tool-tip">View</span><a href="#"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="#">The Innovators</a></h3>
                                            <div class="price">$34.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{ asset('frontend/assets/images/resource/products/2.jpg') }}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><span class="tool-tip">Add to cart</span><a href="#"><span class="flaticon-supermarket"></span></a></li>
                                                    <li><span class="tool-tip">Add to Whishlist</span><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    <li><span class="tool-tip">View</span><a href="#"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="#">Win Your Friends</a></h3>
                                            <div class="price">$29.00</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{ asset('frontend/assets/images/resource/products/3.jpg') }}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><span class="tool-tip">Add to cart</span><a href="#"><span class="flaticon-supermarket"></span></a></li>
                                                    <li><span class="tool-tip">Add to Whishlist</span><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    <li><span class="tool-tip">View</span><a href="#"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="#">Business Adventures</a></h3>
                                            <div class="price">$24.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src=" {{ asset('frontend/assets/images/resource/products/4.jpg') }}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><span class="tool-tip">Add to cart</span><a href="#"><span class="flaticon-supermarket"></span></a></li>
                                                    <li><span class="tool-tip">Add to Whishlist</span><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    <li><span class="tool-tip">View</span><a href="#"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="#">Win Your Friends</a></h3>
                                            <div class="price">$29.00</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{ asset('frontend/assets/images/resource/products/5.jpg') }}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><span class="tool-tip">Add to cart</span><a href="#"><span class="flaticon-supermarket"></span></a></li>
                                                    <li><span class="tool-tip">Add to Whishlist</span><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    <li><span class="tool-tip">View</span><a href="#"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="#">Business Adventures</a></h3>
                                            <div class="price">$24.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{ asset('frontend/assets/images/resource/products/6.jpg') }}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><span class="tool-tip">Add to cart</span><a href="#"><span class="flaticon-supermarket"></span></a></li>
                                                    <li><span class="tool-tip">Add to Whishlist</span><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    <li><span class="tool-tip">View</span><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="shop-single.html">The Innovators</a></h3>
                                            <div class="price">$34.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{ asset('frontend/assets/images/resource/products/7.jpg') }}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><span class="tool-tip">Add to cart</span><a href="#"><span class="flaticon-supermarket"></span></a></li>
                                                    <li><span class="tool-tip">Add to Whishlist</span><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    <li><span class="tool-tip">View</span><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="shop-single.html">The Innovators</a></h3>
                                            <div class="price">$34.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="images/resource/products/8.jpg" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><span class="tool-tip">Add to cart</span><a href="#"><span class="flaticon-supermarket"></span></a></li>
                                                    <li><span class="tool-tip">Add to Whishlist</span><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    <li><span class="tool-tip">View</span><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="shop-single.html">Win Your Friends</a></h3>
                                            <div class="price">$29.00</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Shop Item-->
                            <div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="{{ asset('frontend/assets/images/resource/products/9.jpg') }}" alt="" />
                                            <div class="overlay-box">
                                                <ul class="cart-option">
                                                    <li><span class="tool-tip">Add to cart</span><a href="#"><span class="flaticon-supermarket"></span></a></li>
                                                    <li><span class="tool-tip">Add to Whishlist</span><a href="#"><span class="flaticon-heart"></span></a></li>
                                                    <li><span class="tool-tip">View</span><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="price-box">
                                            <h3><a href="shop-single.html">Business Adventures</a></h3>
                                            <div class="price">$24.99</div>
                                        </div>
                                        <!--Rating-->
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-empty"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    
                        <!--Styled Pagination-->
                        <ul class="styled-pagination text-center">
                            <li class="prev"><a href="#"><span class="fa fa-chevron-left"></span></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="next"><a href="#"><span class="fa fa-chevron-right"></span></a></li>
                        </ul>                
                        <!--End Styled Pagination-->
                    
                    </div>
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar shop-sidebar">
                        
                        
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="blog-cat">
                                <li><a href="#">Business Growth </a></li>
                                <li class="active"><a href="#">Consulting </a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Customer Insights</a></li>
                                <li><a href="#">Organization</a></li>
                            </ul>
                        </div>
                        
                        
                        <!-- Top Related Posts -->
                        <div class="sidebar-widget related-posts">
                            <div class="sidebar-title">
                                <h2>Popular Products</h2>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="shop-single.html"><img src="{{ asset('frontend/assets/images/resource/products/prod-thumb-1.jpg') }}" alt=""></a></figure>
                                <h4><a href="shop-single.html">The Innovators</a></h4>
                                <div class="price">$34.99</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half-o light"></span></div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="shop-single.html"><img src="{{ asset('frontend/assets/images/resource/products/prod-thumb-2.jpg') }}" alt=""></a></figure>
                                <h4><a href="shop-single.html">Good to Great</a></h4>
                                <div class="price">$29.00</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="shop-single.html"><img src="{{ asset('frontend/assets/images/resource/products/prod-thumb-3.jpg') }}" alt=""></a></figure>
                                <h4><a href="shop-single.html">Built to Last</a></h4>
                                <div class="price">$24.99</div>
                                <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o light"></span></div>
                            </div>
                        </div>
                    </aside>
                </div>
                
            </div>
        </div>
    </div>

</div>
@endsection()