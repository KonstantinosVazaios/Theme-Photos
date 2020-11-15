@extends('layouts.homu')

@section('content')


<!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area">
                <div class="container">
                    <div class="pagination-area">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="#">Home -</a> /</li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
<!-- Inner Page Banner Area End Here -->
            <!-- About Page 2 Area Start Here -->
            <div class="about-page2-area section-space">

                <div class="container">
                    <div class="row no-gutters about-page2-inner">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="about-page2-content">
                                <h2>Σχετικα με εμας</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries<br><br>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="about-page2-img-holder">
                                <img src="/storage/demo/about.jpg" class="img-responsive" alt="about-banner">
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters about-page2-inner">
                        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                            <div class="about-page2-img-holder">
                                <img src="/storage/demo/about.jpg" class="img-responsive" alt="about-banner">
                            </div>
                        </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="about-page2-content">
                                <h2>Αναπτυσσομαστε</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Page 2 Area End Here -->
            <!-- Award Area Start Here -->
            <div class="award1-area">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="award1-area-box">
                          <i class="fa fa-heart-o" aria-hidden="true"></i>
                          <h2 class="about-counter" data-num="2030">4</h2>
                          <p>Χρόνια Λειτουργίας</p>
                        </div>
                      </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="award1-area-box">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                                <h2 class="about-counter" data-num="5030">10.000+</h2>
                                <p>Ικανοποιημένοι πελάτες</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="award1-area-box">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <h2 class="about-counter" data-num="5030">5</h2>
                                <p>Καταστήματα</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                          <div class="award1-area-box">
                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                            <h2 class="about-counter" data-num="3030">100+</h2>
                            <p>Διαφορετικές Γεύσεις</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Award Area End Here -->

            <div class="brand-area">
                <div class="container">
                    <div class="rc-carousel"
                        data-loop="true"
                        data-items="5"
                        data-margin="25"
                        data-autoplay="true"
                        data-autoplay-timeout="1000"
                        data-smart-speed="7000"
                        data-dots="false"
                        data-nav="true"
                        data-nav-speed="false"
                        data-r-x-small="1"
                        data-r-x-small-nav="false"
                        data-r-x-small-dots="true"
                        data-r-x-medium="1"
                        data-r-x-medium-nav="false"
                        data-r-x-medium-dots="true"
                        data-r-small="2"
                        data-r-small-nav="true"
                        data-r-small-dots="false"
                        data-r-medium="3"
                        data-r-medium-nav="true"
                        data-r-medium-dots="false">

                        <div class="brand-area-box">
                            <a href="/storage/demo/gallery.jpg"><img loading="lazy" src="/storage/demo/gallery.jpg" alt=""></a>
                        </div>
                        <div class="brand-area-box">
                            <a href="/storage/demo/gallery.jpg"><img loading="lazy" src="/storage/demo/gallery.jpg" alt=""></a>
                        </div>
                        <div class="brand-area-box">
                            <a href="/storage/demo/gallery.jpg"><img loading="lazy" src="/storage/demo/gallery.jpg" alt=""></a>
                        </div>
                        <div class="brand-area-box">
                            <a href="/storage/demo/gallery.jpg"><img loading="lazy" src="/storage/demo/gallery.jpg" alt=""></a>
                        </div>
                        <div class="brand-area-box">
                            <a href="/storage/demo/gallery.jpg"><img loading="lazy" src="/storage/demo/gallery.jpg" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>

@endsection
