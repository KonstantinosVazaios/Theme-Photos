@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Προσθήκη Φωτογραφιας - Gallery')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body mt-1 mb-3">
                  <form action="/admin/homu/content/gallery/create" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                      <label class="img-btn mb-1" for="image">Επιλογή Φωτογραφίας</label><br>
                      <input id="image" class="create-product-file mt-4 mb-4 @error('image') is-invalid @enderror" name="image" type="file">
                      @error('image')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Προσθήκη Φωτογραφίας</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
