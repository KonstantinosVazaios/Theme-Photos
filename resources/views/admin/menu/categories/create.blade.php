@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Δημιουργία Κατηγορίας')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body mt-3 mb-3">
                  <form action="/admin/homu/category/create" method="post">
                    @csrf
                    <div class="form-group">
                      <label class="mb-4"for="ProductCode"><b>Τίτλος Κατηγορίας</b></label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="ProductCode" autocomplete="off" placeholder="Εισάγετε τον τίτλο της κατηγορίας . . .">
                      @error('name')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Δημιουργία Κατηγορίας</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
