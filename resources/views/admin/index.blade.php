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
                    <div class="icon bg-violet"><i class="icon-mail"></i></div>
                    <div class="title"><span><a href="/admin/homu/mail">Mails</a></span>
                    </div>
                    <div class="number"><strong>{{$messages}}</strong></div>
                  </div>
                </div>

                <!-- Item -->
                <div class="mt-3 col-l-3 col-sm-12">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-bill"></i></div>
                    <div class="title"><span><a href="/admin/homu/menu">Menu</a></span>
                    </div>
                  </div>
                </div>
                <!-- Item -->

                <!-- Item -->
                <div class="mt-3 col-l-3 col-sm-12">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-screen"></i></div>
                    <div class="title"><span><a href="/admin/homu/background/1">Φόντο</a></span>
                    </div>
                  </div>
                </div>

                <!-- Item -->
                <div class="mt-3 col-l-3 col-sm-12">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-screen"></i></div>
                    <div class="title"><span><a href="/admin/homu/content">Περιεχόμενο / Αρχική</a></span>
                    </div>
                  </div>
                </div>

                <!-- Item -->
                <div class="mt-3 col-l-3 col-sm-12">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-screen"></i></div>
                    <div class="title"><span><a href="/admin/homu/about">Περιεχόμενο / About</a></span>
                    </div>
                  </div>
                </div>

              </div>
            </div>


          </section>
@endsection
