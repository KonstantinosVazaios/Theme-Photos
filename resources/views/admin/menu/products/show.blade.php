@extends('layouts.admin')

@section('styles')
<!--none-->
@endsection

@section('title', 'Επεξεργασια Προϊόντος / '. $product->title)

@section('content')
  <div class="row justify-content-center">
    <a href="/admin/homu/category/{{$product->category->slug}}"><button style="width: 250px; font-size: 20px;" class="btn btn-primary mt-5"type="button" name="button">Επιστροφή Πίσω</button></a>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body mt-1 mb-3">
                  <form action="/admin/homu/product/{{$product->slug}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductCode"><b>Τίτλος Προϊόντος</b></label>
                      <input style="height: 70px" type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="ProductCode" autocomplete="off" value="{{$product->title}}">
                      @error('title')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductDesc"><b>Περιγραφή</b></label>
                      <textarea style="height: 180px" name="description" class="form-control @error('description') is-invalid @enderror" id="ProductDesc" autocomplete="off">{{$product->description}}</textarea>
                      @error('description')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4"for="ProductPrice"><b>Τιμή</b></label>
                      <input style="height: 70px" type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="ProductPrice" autocomplete="off" value="{{$product->price}}">
                      @error('price')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="mt-4 mb-4" for="exampleFormControlSelect1"><b>Επιλογή Σειράς</b></label>
                      <select name="position"class="form-control @error('position') is-invalid @enderror" id="exampleFormControlSelect1">
                        <option style="display: none" selected>{{$product->position}}</option>
                        @foreach($products as $prod)
                        <option value="{{$prod->position}}">{{$prod->position}}</option>
                        @endforeach
                      </select>
                      @error('position')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    @if($product->image_path)
                    <div class="form-group">
                      <img class="mt-3" src="/storage/{{$product->image_path}}" alt="">
                    </div>
                    @endif

                    <div class="form-group">
                      <input class="create-product-file mt-4 mb-4 @error('image') is-invalid @enderror" name="image" type="file">
                      @error('image')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Αποθήκευση Αλλαγών</button>
                  </form>

                  <form class="mt-5"style="text-align: right" action="/admin/homu/product/{{$product->slug}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Διαγραφή Προϊόντος</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
