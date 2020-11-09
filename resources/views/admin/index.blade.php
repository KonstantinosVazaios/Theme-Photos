@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Αρχική')

@section('content')
<section class="dashboard-counts no-padding-bottom">
            <div class="container">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-l-3 col-sm-12">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-yellow"><i class="icon-user"></i></div>
                    <div class="title"><span><a href="/admin/homu/mail">Mails</a></span>

                    </div>
                    <div class="number"><strong>{{$messages}}</strong></div>
                  </div>
                </div>
                <!---->
                <!-- Item -->
                <div class="col-l-3 col-sm-12  mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-bill"></i></div>
                    <div class="title"><span><a href="/admin/homu/menu">Κατηγορίες</a></span>

                    </div>

                  </div>
                </div>
                <!-- Item -->
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span><a href="/admin/homu/menu">Προϊόντα</a></span>

                    </div>

                  </div>
                </div>
                <!-- Item -->
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-interface-windows"></i></div>
                    <div class="title"><span><a href="/admin/homu/background/1">Φόντο</a></span>

                    </div>

                  </div>
                </div>
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span><a href="/admin/homu/content/slider">Slider</a></span>

                    </div>

                  </div>
                </div>
                <!-- Item -->
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-yellow"><i class="icon-bill"></i></div>
                    <div class="title"><span><a href="/admin/homu/content/daily/1">Daily</a></span>

                    </div>

                  </div>
                </div>
                <!-- Item -->
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span><a href="/admin/homu/content/special">Specials</a></span>

                    </div>

                  </div>
                </div>
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-check"></i></div>
                    <div class="title"><span><a href="/admin/homu/content/photokitchen/1">Φωτογραφία / Κουζίνα</a></span>

                    </div>

                  </div>
                </div>
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-check"></i></div>
                    <div class="title"><span><a href="/admin/homu/content/gallery">Gallery</a></span>

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection
