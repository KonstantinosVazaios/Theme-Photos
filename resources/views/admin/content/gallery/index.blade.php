@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Gallery πιάτα')

@section('content')
<div class="row">
  <a style="margin-left:5px "href="/admin/homu/content/gallery/create"><button class="btn btn-primary ml-4 mt-4 mb-3 " name="button">Προσθήκη Φωτογραφίας στην Gallery</button></a>
</div>
<div>
  <div class="col-lg-12 mt-4 mb-3">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Gallery Φωτογραφιών - ({{$galleries->count()}})</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Φωτογραφία</th>
                <th>Διαγραφή</th>
              </tr>
            </thead>
            <tbody>
              @foreach($galleries as $gallery)
              <tr>
                <td style="height: 300px; text-align: left; vertical-align: middle; font-size: 18px"><a href="/storage/{{$gallery->image_path}}"><img style="width: 300px;"src="/storage/{{$gallery->image_path}}"></a></td>
                <td style="height: 300px; text-align: left; vertical-align: middle; font-size: 18px">
                  <form class="mt-5"style="text-align: left" action="/admin/homu/content/gallery/{{$gallery->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Διαγραφή Φωτογραφίας</button>
                  </form>
                </td>

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
