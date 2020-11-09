@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title',  $slider->title)

@section('content')
  <div class="row justify-content-center">
    <a href="/admin/homu/content/slider"><button style="width: 250px; font-size: 20px;" class="btn btn-primary mt-5"type="button" name="button">Επιστροφή Πίσω</button></a>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body mt-1 mb-3">
                  <form action="/admin/homu/content/slider/{{$slider->id}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductCode"><b>Τίτλος Slider</b></label>
                      <input style="height: 70px" type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="ProductCode" autocomplete="off" value="{{$slider->title}}">
                      @error('title')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductDesc"><b>Κείμενο</b></label>
                      <textarea style="height: 180px" type="text" name="content" class="form-control @error('content') is-invalid @enderror" id="ProductDesc" autocomplete="off">{{$slider->content}}</textarea>
                      @error('content')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductPrice"><b>Κειμένο Κουμπιού</b></label>
                      <input style="height: 70px" type="text" name="btntext" class="form-control @error('btntext') is-invalid @enderror" id="ProductPrice" autocomplete="off" value="{{$slider->btntext}}">
                      @error('btntext')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductPrice"><b>Σύνδεσμος Κουμπιού</b></label>
                      <input style="height: 70px" type="text" name="btnlink" class="form-control @error('btnlink') is-invalid @enderror" id="ProductPrice" autocomplete="off" value="{{$slider->btnlink}}">
                      @error('btnlink')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    @if($slider->image_path)
                    <div class="form-group">
                      <img style="width: 70%" class="mt-3" src="/storage/{{$slider->image_path}}" alt="">
                    </div>
                    @endif

                    <div class="form-group">
                      <input class="create-product-file mt-4 mb-4 @error('image') is-invalid @enderror" name="image" type="file">
                      @error('image')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3 mb-2">Αποθήκευση Αλλαγών</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
