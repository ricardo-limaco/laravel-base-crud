@extends("layouts.default")

@section("page_title", "Comics Show | ".$comic->title)


@section("content")
<div class="container">
  <h2 class="fw-bold pb-4">{{ $comic->title }}</h3>

  <img src="{{ $comic->thumb }}" alt="..." class="">

  <h5 class="pt-2">{{ $comic->series }}</h5>
  <p class="m-0">{{ $comic->type }}</p>
  <p class="m-0">${{ $comic->price }}</p>
  <hr>
  <p class="m-0">{{ $comic->description }}</p>


    {{-- <div class="card" style="width: 18rem;">
      <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $comic->series }}</h5>
        <p class="card-text">{{ $comic->title }}</p>
        <a href="#" class="btn btn-primary">{{ $comic->type }}</a>
      </div>
    </div> --}}
</div>
@endsection