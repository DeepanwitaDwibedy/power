<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Shree Ganesh </title>
        <!-- Stylesheets -->
        <link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">


        <!--Favicon-->
        <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo.png') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('frontend/assets/images/logo.png') }}" type="image/x-icon">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="{{ asset('frontend/assets/js/respond.js') }}"></script><![endif]-->
    </head>
    <body>
         @yield('content')

        <!-- Main Footer -->
        <footer class="main-footer padding-top">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></div>
                            <div class="footer-widget subscribe-widget">
                                <div class="widget-content">
                                    <div class="text">
                                        <h4>Let’s join & create something together</h4>
                                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you completed.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget contact-widget">
                                <div class="single-contact-widget">
                                    <div class="icon-box">
                                        <i class="machinery-icon-telephone"></i>
                                    </div><!-- /.icon-box -->
                                    <div class="text-box">
                                        <h3>For Business Dealing:</h3>
                                        <span>+(91)-8128729003</span>
                                        <p>Available 9:00 - 7:00 all days.</p>
                                    </div><!-- /.text-box -->
                                </div><!-- /.single-contact-widget -->
                                <div class="single-contact-widget">
                                    <div class="icon-box">
                                        <i class="machinery-icon-map"></i>
                                    </div><!-- /.icon-box -->
                                    <div class="text-box">
                                        <p>Plot no- 2027,<br>Ground Floor,Samantarapur,Bhubaneswar,<br>Khordha-751002,Odisha,India</p>
                                    </div><!-- /.text-box -->
                                </div><!-- /.single-contact-widget -->
                                <div class="single-contact-widget">
                                    <div class="icon-box">
                                        <i class="machinery-icon-send"></i>
                                    </div><!-- /.icon-box -->
                                    <div class="text-box">
                                        <h3>Mail Us at</h3>
                                        <p>shreeganesh@gmail.com</p>
                                    </div><!-- /.text-box -->
                                </div><!-- /.single-contact-widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container clearfix">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="copyright-text">&copy; 2020 All Rights Reserved by <a href="{{ url('/') }}">The Wega</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Main Footer -->

        </div>    
        <!--End pagewrapper-->
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-arrow-up"></span></div>

        <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/owl.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

    </body>

</html>