<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Homu Sushi Bar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <!--<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">-->

        <!-- Normalize CSS -->
        <link rel="stylesheet" href="{{ asset('homu/css/normalize.css') }}">

        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('homu/css/main.css') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('homu/css/bootstrap.min.css') }}">

        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('homu/css/animate.min.css') }}">

        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="{{ asset('homu/css/font-awesome.min.css') }}">

        <!-- Flaticon CSS-->
        <!--<link rel="stylesheet" type="text/css" href="{{ asset('homu/css/font2/flaticon.css') }}">-->

        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="{{ asset('homu/vendor/OwlCarousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('homu/vendor/OwlCarousel/owl.theme.default.min.css') }}">

        <!-- Main Menu CSS -->
        <link rel="stylesheet" href="{{ asset('homu/css/meanmenu.min.css') }}">

        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="{{ asset('homu/vendor/slider/css/nivo-slider.css') }}" type="text/css" />
        <!--<link rel="stylesheet" href="{{ asset('homu/vendor/slider/css/preview.css') }}" type="text/css" media="screen" />-->

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('homu/style.css') }}">

        <!-- Modernizr Js -->
        <script src="{{ asset('homu/js/modernizr-2.8.3.min.js') }}"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="wrapper">
            <!-- Header Area Start Here -->
            <header>
                <div class="header2-area">
                    <div class="header-top-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-left">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:21 0111 1111"> 21 0111 1111 </a></li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto: email@email.com"> email@email.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-right">
                                        <ul>
                                            <li><a target="_blank"href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <!--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                                            <li><a target="_blank"href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <!--<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom-area" id="sticker">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="logo-area">
                                        <a href="/"><img class="img-responsive" src="/storage/demo/logo.jpg" alt="logo"></a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="main-menu-area">
                                        <nav>
                                            <ul>
                                                <li><a href="/">Home</a></li>
                                                <li><a href="/about">About</a></li>
                                                <li><a href="#">Food Menu</a>
                                                  <ul class="mega-menu-area">
                                                    @foreach($categories->chunk(6) as $chunk)
                                                      <li>
                                                          @foreach($chunk as $category)
                                                              <a href="/menu/{{$category->slug}}">{{$category->title}}</a>
                                                          @endforeach
                                                      </li>
                                                    @endforeach
                                                    </ul>
                                                </li>
                                                <li><a href="/contact">Contact</a></li>
                                                <li><a href="/contact" style="margin-left:1px;font-size: 20px; color: #FFB900; border-bottom: 1px solid #FFB900; padding-bottom: 1px; padding-left:1px;padding-right:1px">Order Online</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/about">About</a></li>
                                            <li><a>Food Menu</a>
                                              <ul>
                                                @foreach($categories as $category)
                                                    <li><a href="/menu/{{$category->slug}}">{{$category->title}}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <li><a href="/contact">Contact</a></li>
                                            <li><a style="font-size: 15px; color: #FFB900; border-bottom: 1px solid #FFB900;" href="/contact">Order Online</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End -->
            </header>

            <!--background photo title-->
            <style>
            .inner-page-banner-area {
              text-align: left;
              background: url("/storage/demo/background.jpg");
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;
              position: relative;
              display: block;
              padding: 86px 0 95px;
            }
            </style>
            <!--background photo title-->


            @yield('content')




            <footer>
                <div class="footer-area-top section-space">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-footer">About X Restaurant</h3>
                                    <div class="footer-about">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br><a href="/about"><span style="padding-top:5px;">Read More...</span></a> </p>
                                    </div>
                                    <ul class="footer-social">
                                        <li><a target="_blank"href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a target="_blank"href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <!--<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                                        <!--<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>-->
                                        <!--<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-footer">Περιεχομενο</h3>
                                    @foreach($posts as $post)
                                    <div class="footer-blog-post">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4><a href="{{$post->btnlink}}">{{$post->title}}</a></h4>
                                              <a href="{{$post->btnlink}}"><p>{{$post->btntext}}</p></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-box">
                                    <h3 class="title-bar-footer">Ωρες Λειτουργιας</h3>
                                    <ul class="opening-schedule">
                                        <li>Κυριακή<span> 1.00μ.μ - 12.30π.μ</span></li>
                                        <li>Δευτέρα<span> 1.00μ.μ - 12.30π.μ</span></li>
                                        <li>Τετάρτη<span> 1.00μ.μ - 12.30π.μ</span></li>
                                        <li>Τρίτη <span> 1.00μ.μ - 12.30π.μ</span></li>
                                        <li>Πέμπτη<span> 1.00μ.μ - 12.30π.μ</span></li>
                                        <li>Παρασκευή <span> 1.00μ.μ - 12.30π.μ</span></li>
                                        <li>Σάββατο<span> 1.00μ.μ - 12.30π.μ</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area-bottom">
                    <div class="container">
                        <p>&copy; 2020 Restaurant X All Rights Reserved. &nbsp; - &nbsp;&nbsp; Created by <a target="_blank" href="http://technopos.gr"> Technopos.gr</a></p>
                    </div>
                </div>
            </footer>
            <!-- Footer Area End Here -->
        </div>
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->

    </body>
    <!-- jquery-->
    <script src="{{ asset('homu/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>

    <!-- Plugins js -->
    <script src="{{ asset('homu/js/plugins.js') }}" type="text/javascript"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('homu/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!-- WOW JS -->
    <script src="{{ asset('homu/js/wow.min.js') }}"></script>

    <!-- Nivo slider js -->
    <script src="{{ asset('homu/vendor/slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('homu/vendor/slider/home.js') }}" type="text/javascript"></script>

    <!-- Owl Cauosel JS -->
    <script src="{{ asset('homu/vendor/OwlCarousel/owl.carousel.min.js') }}" type="text/javascript"></script>

    <!-- Meanmenu Js -->
    <script src="{{ asset('homu/js/jquery.meanmenu.min.js') }}" type="text/javascript"></script>

    <!-- Srollup js -->
    <script src="{{ asset('homu/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>

     <!-- jquery.counterup js -->
    <!--<script src="{{ asset('homu/js/waypoints.min.js') }}"></script>-->

    <!-- Custom Js -->
    <script src="{{ asset('homu/js/main.js') }}" type="text/javascript"></script>

</html>
