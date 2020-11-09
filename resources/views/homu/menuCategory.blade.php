@extends('layouts.homu')

@section('content')
<div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>{{$category->title}}</h2>
            <ul>
                <li><a href="#">Home -</a> /</li>
                <li>Menu</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Food Menu 1 Area Start Here -->

<div class="food-menu1-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="food-menu1-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="food-menu-title">
                      <a name="{{$category->title}}"><h3 style="color: #fff">{{$category->title}}</h3></a>
                        <span><i class="flaticon-technology"></i></span>
                    </div>
                    <ul>
                      @foreach($category->products as $product)
                        <li>
                            <div class="media">
                              @if($product->image_path)
                                <a href="/storage/{{$product->image_path}}" class="pull-left">
                                    <img loading="lazy" src="/storage/{{$product->image_path}}" class="img-responsive">
                                </a>
                              @endif

                                <div class="media-body">
                                    <h4><a>{{$product->title}}</a></h4>
                                    <p>{{$product->description}}</p>
                                    <span>{{$product->price}} €</span>
                                </div>
                            </div>
                        </li>
                      @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Food Menu 1 Area End Here -->
<!-- Footer Area Start Here -->

@endsection
