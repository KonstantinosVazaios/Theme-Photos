@extends('layouts.homu')

@section('content')

<!-- Slider Area Start Here -->
            <div class="slider1-area">
                <div class="bend niceties preview-1">
                    <div id="ensign-nivoslider-3" class="slides">
                      @foreach($sliders as $slider)
                        <img src="storage/demo/slider.jpg" title="#slider-direction-{{$slider->id}}"/>
                      @endforeach
                    </div>
                    @foreach($sliders as $slider)
                    <div id="slider-direction-{{$slider->id}}" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-{{$slider->id}}">
                            <div class="title-container s-tb-c">
                                <h1 class="title1">{{$slider->title}}</h1>
                                <p>{{$slider->content}}</p>
                                @if($slider->btntext)
                                <div class="slider-btn-area">
                                    <a href="{{$slider->btnlink}}" class="ghost-btn">{{$slider->btntext}}</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
<!-- Slider Area End Here -->

<!-- About 1 Area Start Here -->
            <div class="about1-area section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
                           <a href="/storage/{{$daily->image_path}}"><img loading="lazy" class="img-responsive" src="/storage/demo/daily.jpg" alt=""></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
                            <div class="about1-area-top">
                                <h2>{{$daily->titleBig}}</h2>
                            </div>
                           <h3 class="title-bar-big-left">{{$daily->titleSmall}}</h3>
                           <p style="color: #FFF">{{$daily->description}}</p>
                           <a href="{{$daily->btnlink}}" class="ghost-color-btn">{{$daily->btntext}}<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
<!-- About 1 Area End Here -->

<!-- Special Dish Area Start Here -->
            <div class="special-dish-area">
                <div class="container">
                    <h2 class="title">Δημοφιλεστερα Πιατα</h2>
                    <span style="color: #fff"class="subtitle-color">Let’s Discover Food</span>
                    <div class="row">
                        <div class="rc-carousel"
                            data-loop="true"
                            data-items="4"
                            data-margin="15"
                            data-autoplay="true"
                            data-autoplay-timeout="0"
                            data-smart-speed="6000"
                            data-dots="false"
                            data-nav="true"
                            data-nav-speed="false"
                            data-r-x-small="1"
                            data-r-x-small-nav="false"
                            data-r-x-small-dots="true"
                            data-r-x-medium="2"
                            data-r-x-medium-nav="false"
                            data-r-x-medium-dots="true"
                            data-r-small="3"
                            data-r-small-nav="true"
                            data-r-small-dots="false"
                            data-r-medium="3"
                            data-r-medium-nav="true"
                            data-r-medium-dots="false">
                            @foreach($specials as $special)
                            <div class="special-dish-box">
                                <a href="/storage/{{$special->image_path}}"><img loading="lazy" src="/storage/demo/special.jpg"></a>
                                <h3 class="title-small title-bar-small-center"><a>{{$special->title}}</a></h3>
                                <p>{{$special->description}}</p>
                                <a class="ghost-semi-color-btn">{{$special->price}} €</a>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
<!-- Special Dish Area End Here -->

<div class="about1-area">
  <div class="container">
    <div class="row">
      <div class="row no-gutters about-page2-inner">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="about-page2-content">
            <h2>Η κουζινα μας</h2>
            <p>Κάθε μας πιάτο φτιάχνεται με επιμέλεια και με υψηλής ποιότητας πρώτες ύλες. Το εκπαιδευμένο μας προσωπικό κουζίνας με γνώσεις και εμπειρία πάνω στην Ασιατική κουζίνα σας εγγυάται όχι μόνο υπέροχα πιάτα αλλά και παραδοσιακές τεχνικές και γεύσεις αναμειγμένες με μοντέρνες πινελιές.</p>
            <p>Συχνά μας αρέσει βέβαια να πειραματιζόμαστε με συνδυασμούς και γεύσεις και να δημιουργούμε νέα πιάτα ώστε να δίνουμε επιπλέον επιλογές στους πελάτες μας.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="about-page2-img-holder">
            <img loading="lazy" src="/storage/demo/kitchen.jpg" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Form Area Starts Here -->
<a name="contact"></a><div style="margin-top: 50px;" class="contact-us-page-area">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="contact-us-right">
                  <h2 style="color:#fff"class="title-bar-medium-left inner-sub-title">Στειλε Μας Μηνυμα</h2>
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
                <div class="contact-form">
              <form action="/contact" method="POST">
                    @csrf
                      <fieldset>
                          <div class="row">
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <input type="text" placeholder="'Ονομα*" class="form-control @error('name') is-invalid @enderror" name="name"  required>
                                  </div>
                                  @error('name')
                                  <div class="alert alert-danger mt-3">{{ $message }}</div>
                                  @enderror
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input type="number" placeholder="Τηλέφωνο*" class="form-control @error('telephone') is-invalid @enderror " name="telephone"   required>
                                </div>
                                @error('telephone')
                                <div class="alert alert-danger mt-5">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <input type="email" placeholder="Email*" class="form-control @error('email') is-invalid @enderror" name="email"  required>
                                  </div>
                                  @error('email')
                                  <div class="alert alert-danger mt-5">{{ $message }}</div>
                                  @enderror
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <textarea placeholder="Μήνυμα*" class="textarea form-control @error('message') is-invalid @enderror" name="message"  rows="7" cols="20" required></textarea>
                                  </div>
                                  @error('message')
                                  <div class="alert alert-danger mt-5">{{ $message }}</div>
                                  @enderror
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                  <div class="form-group margin-bottom-none">
                                      <button type="submit" class="ghost-on-hover-btn">ΑΠΟΣΤΟΛΗ</button>
                                  </div>
                              </div>
                          </div>
                      </fieldset>
                  </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
<!-- Contact Form Area End Here -->

<!-- Brand Area Start Here -->
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
<!-- Brand Area End Here -->
<style media="screen">

/*
.client-area {
  background: url(/storage/{{$review->image_path}});
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
*/
</style>
<div class="client-area section-space">
                <div class="container">
                    <div class="row">
                        <div class="rc-carousel"
                            data-loop="true"
                            data-items="1"
                            data-margin="30"
                            data-autoplay="true"
                            data-autoplay-timeout="10000"
                            data-smart-speed="2000"
                            data-dots="false"
                            data-nav="true"
                            data-nav-speed="false"
                            data-r-x-small="1"
                            data-r-x-small-nav="false"
                            data-r-x-small-dots="true"
                            data-r-x-medium="1"
                            data-r-x-medium-nav="false"
                            data-r-x-medium-dots="true"
                            data-r-small="1"
                            data-r-small-nav="false"
                            data-r-small-dots="true"
                            data-r-medium="1"
                            data-r-medium-nav="false"
                            data-r-medium-dots="true">
                            <div class="client-box">
                                <a href="#"><img src="/storage/demo/client.png" class="img-responsive" alt="client"></a>
                                <ul class="rating">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <p>Atetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <br> make a type specimen boonot only five centuries.</p>
                                <h3 class="title-bar-big-center"><a href="#">Daina Rose</a></h3>
                            </div>
                            <div class="client-box">
                                <a href="#"><img src="/storage/demo/client.png" class="img-responsive" alt="client"></a>
                                <ul class="rating">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>

                                </ul>
                                <p>Atetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <br> make a type specimen boonot only five centuries.</p>
                                <h3 class="title-bar-big-center"><a href="#">Daina Rose</a></h3>
                            </div>
                            <div class="client-box">
                                <a href="#"><img src="/storage/demo/client.png" class="img-responsive" alt="client"></a>
                                <ul class="rating">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <p>Atetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua <br> make a type specimen boonot only five centuries.</p>
                                <h3 class="title-bar-big-center"><a href="#">Daina Rose</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
