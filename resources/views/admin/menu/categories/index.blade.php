@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Menu')

@section('content')
<div>
  <div class="row">
    <a href="/admin/homu/category/create"><button class="btn btn-primary ml-5 mt-4 mb-4 " name="button">Δημιουργία Κατηγορίας</button></a>
    <a href="/admin/homu/product/create"><button class="btn btn-primary ml-5 mt-4 mb-4 " name="button">Δημιουργία Προϊόντος</button></a>
    </div>
  <div class="col-lg-12 mt-2 mb-3">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Κατηγορίες</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Τίτλος</th>
                <th>Αριθμός Προϊόντων</th>
                <th>Σείρα</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px"><a href="/admin/homu/category/{{$category->slug}}">{{$category->title}}</a></td>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{$category->products->count()}}</td>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{$category->position}}</td>
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
