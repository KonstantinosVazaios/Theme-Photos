@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Φωτογραφία / Η ΚΟΥΖΙΝΑ ΜΑΣ')

@section('content')
<div>
  <div class="col-md-12 mt-3 mb-3">
      <div class="card">
          <div class="card-body">
            <form method="post" action="/admin/homu/content/photokitchen/{{$kitchen->id}}" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <label class="mt-4 mb-4"for="ProductCode"><b>Τίτλος</b></label>
                <input style="height: 70px" type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="ProductCode" autocomplete="off" value="{{$kitchen->title}}">
                @error('title')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label class="mt-4 mb-4"for="ProductDesc"><b>Περιγραφή</b></label>
                <textarea style="height: 180px" name="description" class="form-control @error('description') is-invalid @enderror" id="ProductDesc" autocomplete="off">{{$kitchen->description}}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="imageLabel"><b>Επιλογή Φωτογραφίας</b></label>
                <input class="form-control-file mt-4 mb-4 @error('image') is-invalid @enderror"id="imageLabel" name="image" type="file">
                @error('image')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
              </div>
              <div class="mt-3 mb-3">
                <img src="/storage/{{ $kitchen->image_path }}" alt="">
              </div>
              <button type="submit" class="btn btn-primary mt-3">Αποθήκευση Αλλαγών</button>
            </form>
          </div>
      </div>
  </div>
</div>
@endsection
