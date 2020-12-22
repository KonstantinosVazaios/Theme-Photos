@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'About Page')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body mt-1 mb-3">
                <form action="/admin/homu/about/{{$about->id}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PATCH')


                    <!-- First Section-->
                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductCode"><b>Τίτλος - Πρώτος</b></label>
                      <input style="height: 70px" type="text" name="title_first" class="form-control @error('title') is-invalid @enderror" id="ProductCode" autocomplete="off" value="{{$about->title_first}}">
                      @error('title')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductDesc"><b>Περιγραφή - Πρώτη</b></label>
                      <textarea style="height: 180px" name="description_first" class="form-control @error('description') is-invalid @enderror" id="ProductDesc" autocomplete="off">{{$about->description_first}}</textarea>
                      @error('description')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group mb-2">
                      <label class="mt-4 mb-4" for="exampleFormControlFile1"><b>Φωτογραφία - Πρώτη</b></label>
                      <input name="image_path_first" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    @if($about->image_path_first)
                    <div class="form-group mb-5">
                      <img class="mt-3" src="/storage/{{$about->image_path_first}}">
                    </div>
                    @endif

                    <hr>
                    <!--Second Section-->
                    <div class="form-group mt-5">
                      <label class="mt-4 mb-4"for="ProductCode"><b>Τίτλος - Δεύτερος</b></label>
                      <input style="height: 70px" type="text" name="title_second" class="form-control @error('title') is-invalid @enderror" id="ProductCode" autocomplete="off" value="{{$about->title_second}}">
                      @error('title')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductDesc"><b>Περιγραφή - Δεύτερη</b></label>
                      <textarea style="height: 180px" name="description_second" class="form-control @error('description') is-invalid @enderror" id="ProductDesc" autocomplete="off">{{$about->description_first}}</textarea>
                      @error('description')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4" for="exampleFormControlFile1"><b>Φωτογραφία - Δεύτερη</b></label>
                      <input name="image_path_second" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    @if($about->image_path_second)
                    <div class="form-group mb-5">
                      <img class="mt-3" src="/storage/{{$about->image_path_second}}">
                    </div>
                    @endif


                    <button type="submit" class="btn btn-primary mt-3">Αποθήκευση Αλλαγών</button>
                  </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
