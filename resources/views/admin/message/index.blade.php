@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Mails')

@section('content')
<div class="container">
  <div class="col-lg-12 mt-5 mb-3">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Mails</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Όνομα</th>
                <th>Τηλέφωνο</th>
                <th>Εmail</th>
                <th>Μήνυμα</th>
                <th>Ημ/νια</th>
              </tr>
            </thead>
            <tbody>
              @foreach($messages as $message)
              <tr>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px"><a href="/admin/homu/mail/{{$message->id}}">{{$message->name}}</a></td>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{$message->telephone}}</td>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{$message->email}}</td>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{Str::limit($message->message, 10)}}</td>
                <td style="height: 90px; text-align: left; vertical-align: middle; font-size: 18px">{{$message->created_at->format('d-m / G:i')}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$messages->links()}}

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
