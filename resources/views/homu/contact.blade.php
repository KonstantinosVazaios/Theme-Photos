@extends('layouts.homu')

@section('content')

<!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area">
                <div class="container">
                    <div class="pagination-area">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="#">Home -</a> /</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Inner Page Banner Area End Here -->
            <!-- Contact Us Page Area Start Here -->
            <div class="contact-us-page-area">
              <div class="google-map-area">
                    <div id="googleMap" style="height:0px;"></div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-us-left">
                                <h2 style="color:#fff"class="title-bar-medium-left inner-sub-title">ΠΛΗΡΟΦΟΡΙΕΣ</h2>
                                <ul>
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h3>Τηλέφωνο</h3>
                                        <p>Γλυφάδα: 2109630042</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <h3>Διεύθυνση</h3>
                                        <p>Γλυφάδα - Γούναρη 135</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <h3>E-mail</h3>
                                        <p>homusushibar@gmail.com</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        <h3>Follow Us</h3>
                                        <ul class="contact-social">
                                            <li><a target="_blank"href="https://el-gr.facebook.com/homusushibar"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a target="_blank"href="https://www.instagram.com/homusushibar/?hl=el"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="contact-us-right">
                                <a name="contact"></a><h2 style="color:#fff"class="title-bar-medium-left inner-sub-title">Στειλε Μας Μηνυμα</h2>
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
                                                        <input type="text" placeholder="'Ονομα*" class="form-control @error('name') is-invalid @enderror" name="name"   required>
                                                    </div>
                                                    @error('name')
                                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-group">
                                                    <input type="number" placeholder="Τηλέφωνο*" class="form-control @error('telephone') is-invalid @enderror " name="telephone" autocomplete="off" autofocus   required>
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
                                                        <button type="submit" class="ghost-on-hover-btn">Αποστολη</button>
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
            <!-- Contact Us Page Area End Here -->

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
