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
            <div class="contact-us-page-area section-space-bottom">
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
                                        <!--<p>Αθήνα: 2114025030</p>
                                        <p>Βάρη: 2108970650</p>
                                        <p>Ρόδος: 22411 81244</p>
                                        <p>Χαλάνδρι: 211 4117016</p>-->
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <h3>Διεύθυνση</h3>
                                        <p>Γλυφάδα - Γούναρη 135</p>
                                        <!--<p>Αθήνα - Σινώπης 3 </p>
                                        <p>Βάρη - Λ.Βάρης - Κορωπίου 12</p>
                                        <p>Ρόδος - Ερυθρού Σταυρού 7</p>
                                        <p>Χαλάνδρι - Επιδαύρου 53</p>-->
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

@endsection
