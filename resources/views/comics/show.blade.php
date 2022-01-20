@extends("layouts.default")

@section("page_title", "Comics Show")


@section("content")
<div class="container">
  <h2 class="fw-bold py-4">Comics Show</h3>

  <div class="card" style="width: 18rem;">
    <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $comic->series }}</h5>
      <p class="card-text">{{ $comic->title }}</p>
      <a href="#" class="btn btn-primary">{{ $comic->type }}</a>
    </div>
  </div>
  
@endsection