@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Δημοφιλέστερα πιάτα')

@section('content')
<div class="row">
  <a style="margin-left:5px "href="/admin/homu/content/special/create"><button class="btn btn-primary ml-4 mt-4 mb-3 " name="button">Δημιουργία Δημοφιλέστερoυ Πιάτος</button></a>
</div>
<div>
  <div class="col-lg-12 mt-4 mb-3">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Δημοφιλέστερα πιάτα - ({{$specials->count()}})</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Τίτλος</th>
                <th>Περιγραφή</th>
                <th>Τιμή</th>
              </tr>
            </thead>
            <tbody>
              @foreach($specials as $special)
              <tr>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px"><a href="/admin/homu/content/special/{{$special->id}}">{{$special->title}}</a></td>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{Str::limit($special->description, 30)}}</td>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{$special->price}} €</td>
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
