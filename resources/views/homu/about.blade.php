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

                  <!--photo mobile-->
                  <div class="row no-gutters about-page2-inner">
                      <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                          <div class="about-page2-img-holder">
                              <img src="/storage/{{$about->image_path_second}}" class="img-responsive" alt="about-banner">
                          </div>
                      </div>
                  </div>
                  <!--photo mobile-->

                    <div class="row no-gutters about-page2-inner">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="about-page2-content">
                                <h2>{{ $about->title_first }}</h2>
                                <p>{{ $about->description_first }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="about-page2-img-holder">
                                <img src="/storage/{{$about->image_path_first}}" class="img-responsive" alt="about-banner">
                            </div>
                        </div>
                    </div>


                    <div class="row no-gutters about-page2-inner">
                        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                            <div class="about-page2-img-holder">
                                <img src="/storage/{{$about->image_path_second}}" class="img-responsive" alt="about-banner">
                            </div>
                        </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="about-page2-content">
                              <h2>{{$about->title_second}}</h2>
                              <p>{{$about->description_second}}</p>
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
                      @foreach($stats as $stat)
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="award1-area-box">
                          <i class="fa fa-heart-o" aria-hidden="true"></i>
                          <h2 class="about-counter" data-num="2030">{{$stat->text}}</h2>
                          <p>{{$stat->title}}</p>
                        </div>
                      </div>
                      @endforeach
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

                        @foreach($galleries as $gallery)
                        <div class="brand-area-box">
                            <a href=""><img loading="lazy" src="/storage/{{$gallery->image_path}}" alt=""></a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

@endsection
