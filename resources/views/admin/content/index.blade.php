@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Περιεχόμενο')

@section('content')
<section class="dashboard-counts no-padding-bottom">
            <div class="container">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-l-3 col-sm-12">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-bill"></i></div>
                    <div class="title">
                      <a href="/admin/homu/content/slider"><span>Slider</span></a>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-yellow"><i class="icon-padnote"></i></div>
                    <div class="title">
                      <a href="/admin/homu/content/daily/1"><span>Daily</span></a>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title">
                      <a href="/admin/homu/content/special"><span>Specials</span></a>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-padnote"></i></div>
                    <div class="title">
                      <a href="/admin/homu/content/photokitchen/1"><span>Φωτογραφία / Κουζίνα</span></a>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-bill"></i></div>
                    <div class="title">
                    <a href="/admin/homu/content/gallery"><span>Gallery</span></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>
@endsection
