@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Επεξεργασια Stat')

@section('content')
  <div class="row justify-content-center">
    <a href="/admin/homu/about/stats"><button style="width: 250px; font-size: 20px;" class="btn btn-primary mt-5"type="button" name="button">Επιστροφή Πίσω</button></a>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body mt-1 mb-3">
                  <form action="/admin/homu/about/stats/{{$stat->id}}" method="post">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductCode"><b>Τίτλος</b></label>
                      <input style="height: 70px" type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="ProductCode" autocomplete="off" value="{{$stat->title}}">
                      @error('title')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductCode"><b>Κείμενο</b></label>
                      <input style="height: 70px" type="text" name="text" class="form-control @error('text') is-invalid @enderror" id="ProductCode" autocomplete="off" value="{{$stat->text}}">
                      @error('text')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Αποθήκευση Αλλαγών</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
