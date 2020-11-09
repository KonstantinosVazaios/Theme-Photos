@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Slider')

@section('content')
<div>
  <div class="col-lg-12 mt-5 mb-3">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Slider Posts</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Τίτλος</th>
                <th>Κειμένο</th>
              </tr>
            </thead>
            <tbody>
              @foreach($sliders as $slider)
              <tr>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px"><a href="/admin/homu/content/slider/{{$slider->id}}">{{$slider->title}}</a></td>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{Str::limit($slider->content, 30)}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
