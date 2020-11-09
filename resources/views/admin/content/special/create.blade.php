@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Δημιουργία Δημοφιλέστερoυ Πιάτου')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body mt-1 mb-3">
                  <form action="/admin/homu/content/special/create" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductCode"><b>Τίτλος</b></label>
                      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="ProductCode" autocomplete="off" placeholder="Εισάγετε τον τίτλο του προϊόντος . . .">
                      @error('title')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductDesc"><b>Περιγραφή</b></label>
                      <textarea style="height: 180px" name="description" class="form-control @error('description') is-invalid @enderror" id="ProductDesc" placeholder="Εισάγετε την περιγραφή του προϊόντος . . ." autocomplete="off"></textarea>
                      @error('description')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductPrice"><b>Τιμή</b></label>
                      <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="ProductPrice" autocomplete="off" placeholder="Εισάγετε την τιμη του προϊόντος . . .">
                      @error('price')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input class="create-product-file mt-4 @error('image') is-invalid @enderror" name="image" type="file">
                      @error('image')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Δημιουργία</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
