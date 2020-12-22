@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Stats')

@section('content')
<div>
  <div class="col-lg-12 mt-5 mb-3">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Stats</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Τίτλος</th>
                <th>Αριθμός Προϊόντων</th>
              </tr>
            </thead>
            <tbody>
              @foreach($stats as $stat)
              <tr>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px"><a href="/admin/homu/about/stats/{{$stat->id}}">{{$stat->title}}</a></td>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{$stat->text}}</td>
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
