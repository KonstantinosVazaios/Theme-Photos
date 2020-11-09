@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Περιεχόμενο Daily')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body mt-1 mb-3">
                  <form action="/admin/homu/content/daily/{{$daily->id}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductCode"><b>Τίτλος Μεγάλος</b></label>
                      <input style="height: 70px" type="text" name="titleBig" class="form-control @error('titleBig') is-invalid @enderror" id="ProductCode" autocomplete="off" value="{{$daily->titleBig}}">
                      @error('titleBig')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductCode"><b>Τίτλος Μικρός</b></label>
                      <input style="height: 70px" type="text" name="titleSmall" class="form-control @error('titleSmall') is-invalid @enderror" id="ProductCode" autocomplete="off" value="{{$daily->titleSmall}}">
                      @error('titleSmall')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductDesc"><b>Κείμενο</b></label>
                      <textarea style="height: 180px" type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="ProductDesc" autocomplete="off">{{$daily->description}}</textarea>
                      @error('description')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductPrice"><b>Κειμένο Κουμπιού</b></label>
                      <input style="height: 70px" type="text" name="btntext" class="form-control @error('btntext') is-invalid @enderror" id="ProductPrice" autocomplete="off" value="{{$daily->btntext}}">
                      @error('btntext')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductPrice"><b>Σύνδεσμος Κουμπιού</b></label>
                      <input style="height: 70px" type="text" name="btnlink" class="form-control @error('btnlink') is-invalid @enderror" id="ProductPrice" autocomplete="off" value="{{$daily->btnlink}}">
                      @error('btnlink')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    @if($daily->image_path)
                    <div class="form-group">
                      <img class="mt-3" src="/storage/{{$daily->image_path}}" alt="">
                    </div>
                    @endif

                    <div class="form-group">
                      <input class="create-product-file mt-4 mb-4 @error('image') is-invalid @enderror" name="image" type="file" aria-describedby="image">
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
