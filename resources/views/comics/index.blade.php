@extends("layouts.default")

@section("page_title", "Comics Home")


@section("content")
<div class="container">    
  <h2 class="fw-bold py-4">Comics Home</h2>
  
  <ul class="row gap-3">
    @foreach ($comics as $item)

    <div class="card" style="width: 18rem;">
      <img src="{{ $item->thumb }}" class="card-img-top img-fluid" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $item->series }}</h5>
        <p class="card-text">{{ $item->title }}</p>
        <a href="" class="btn btn-primary">{{ $item->type }}</a>
        {{-- <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">{{ $item->type }}</a> --}}
      </div>
    </div>

    @endforeach
  </ul>

</div>
@endsection