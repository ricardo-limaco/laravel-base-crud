@extends("layouts.default")

@section("page_title", "Comics Home")


@section("content")
<div class="container">    
  <h2 class="fw-bold pb-4">Home</h2>

  
  <ul class="row gap-3">
    @foreach ($comics as $comic)

    <div class="card" style="width: 18rem;">
      <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $comic->series }}</h5>
        <p class="card-text">{{ $comic->title }}</p>
        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-sm btn-primary">Info</a>
        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-sm btn-outline-primary">Aggiorna</a>

        <form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="mt-1">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn btn-sm btn-outline-danger" value="Cancella">
        </form>

      </div>
    </div>

    @endforeach
  </ul>

  {{-- <form action="{{ route('comics.destroy', ['id' => $comic->id])}}" method="POST">
    @csrf

    @method('delete')

    <input type="submit" value="cancella">
  </form> --}}
</div>
@endsection