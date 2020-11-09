@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Φόντο')

@section('content')
<div>
  <div class="col-md-12 mt-3 mb-3">
      <div class="card">
          <div class="card-body">
            <form method="post" action="/admin/homu/background/{{$background->id}}" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <label for="imageLabel"><b>Επιλογή Φωτογραφίας Φόντου</b></label>
                <input class="form-control-file mt-4 mb-4 @error('image') is-invalid @enderror"id="imageLabel" name="image" type="file">
                @error('image')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary mt-3">Αποθήκευση Αλλαγών</button>
            </form>
          </div>
      </div>
  </div>

  <div class="col-lg-12 mt-4 mb-3">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Φόντο</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Φωτογραφία</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align: left; vertical-align: middle; font-size: 18px"><a href="/storage/{{$background->image_path}}"><img src="/storage/{{$background->image_path}}" style="width: 100%; height: 100%;"src=""></a></td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
