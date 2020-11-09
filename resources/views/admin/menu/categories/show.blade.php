@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Επεξεργασία Κατηγορίας')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-left">


      <div class="col-md-5 mt-3 mb-3">
          <div class="card">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleFormControlSelect1"><b>Επιλογή Kατηγορίας</b></label>
                  <select onchange="location = this.value;" name="position"class="form-control" id="exampleFormControlSelect1">
                    <option selected disabled>Επιλέξτε Κατηγορία Για Επεξεργασία</option>
                    @foreach($cats as $cat)
                    <option value="/admin/homu/category/{{$cat->slug}}">{{$cat->title}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
          </div>
      </div>


        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-body mt-3 mb-3">
                  <form action="/admin/homu/category/{{$category->slug}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                      <label class="mb-4"for="ProductCode"><b>Τίτλος Κατηγορίας</b></label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="ProductCode" autocomplete="off" value="{{$category->title}}">
                      @error('name')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1"><b>Επιλογή Σειράς</b></label>
                      <select name="position"class="form-control @error('position') is-invalid @enderror" id="exampleFormControlSelect1">
                        <option selected>{{$category->position}}</option>
                        @foreach($cats as $cat)
                        <option value="{{$cat->position}}">{{$cat->position}}</option>
                        @endforeach
                      </select>
                      @error('position')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Ενημέρωση Κατηγορίας</button>
                  </form>
                  <form style="text-align: right" action="/admin/homu/category/{{$category->slug}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Διαγραφή Κατηγορίας</button>
                    <small id="emailHelp" class="form-text text-muted mt-3">Τα προϊόντα που βρίσκονται σε αυτή την κατηγορία θα διαγραφούν!</small>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 mt-2 mb-5">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">Προϊόντα:  ( {{$category->products->count()}} )</h3>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Τίτλος</th>
              <th>Περιγραφή</th>
              <th>Τιμή</th>
              <th>Σειρά</th>
            </tr>
          </thead>
          <tbody>
            @foreach($category->products as $product)
            <tr>
              <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px"><a href="/admin/homu/product/{{$product->slug}}">{{$product->title}}</a></td>
              <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{Str::limit($product->description, 45)}}</td>
              <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{$product->price}} € </td>
              <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{$product->position}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
@endsection
