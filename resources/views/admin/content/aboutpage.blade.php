@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Περιεχόμενο / About')

@section('content')
<section class="dashboard-counts no-padding-bottom">
            <div class="container">
              <div class="row bg-white has-shadow">


                <!-- Item -->
                <div class="col-l-3 col-sm-12">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-interface-windows"></i></div>
                    <div class="title">
                      <a href="/admin/homu/about/story"><span>About - Story</span></a>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-l-3 col-sm-12 mt-5">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-form"></i></div>
                    <div class="title">
                      <a href="/admin/homu/about/stats"><span>About - Stats</span></a>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </section>
@endsection
