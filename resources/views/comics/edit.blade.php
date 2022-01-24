@extends("layouts.default")

@section("page_title", "Comics Edit")


@section("content")
<div class="container">
  <h2 class="fw-bold pb-4">Comics Edit</h2>

  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li> {{$error}} </li>
      @endforeach
    </ul>
  </div>
  @endif

<form action="{{ route('comics.update', $comic->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label for="field_title" class="form-label is-invalid">Title</label>
    <input type="text" name="title" class="form-control" id="field_title" value="{{ $comic->title }}">
  </div>

  <div class="mb-3">
    <label for="field_description" class="form-label">Description</label>
    <textarea  rows="5" type="text" name="description" class="form-control" id="exampleFormControlTextarea1">{{ $comic->description }}</textarea>
  </div>
  
  <div class="mb-3">
    <label for="field_thumb" class="form-label">Image</label>
    <input type="text" name="thumb" class="form-control" id="field_thumb" value="{{ $comic->thumb }}">
  </div>

  <div class="mb-3">
    <label for="field_price" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" id="field_price" value="{{ $comic->price }}">
  </div>

  <div class="mb-3">
    <label for="field_series" class="form-label">Series</label>
    <input type="text" name="series" class="form-control" id="field_series" value="{{ $comic->series }}">
  </div>

  <div class="mb-3">
    <label for="field_sale_date" class="form-label">Date</label>
    <input type="text" name="sale_date" class="form-control" id="field_sale_date" value="{{ $comic->sale_date }}">
  </div>
  
  <div class="mb-3">
    <label for="field_type" class="form-label">Type</label>
    <input type="text" name="type" class="form-control" id="field_type" value="{{ $comic->type }}">
  </div>

  <div>
    <button class="btn btn-link" type="reset">Reset</button>
    <button class="btn btn-primary" type="submit">Aggiorna</button>
  </div>
</form>




</div>

@endsection