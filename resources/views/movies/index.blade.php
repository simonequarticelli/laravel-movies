@extends('layout/app')

@section('title_page')
  home
@endsection

@section('content')
  <div class="container mt-5">
    <h2>All Movies</h2>
    @foreach ($movies as $movie)
      <ul class="list-unstyled">
        <li>
          <strong>Title: </strong>{{ $movie->title }} <br>
          <strong>Plot: </strong>{{ $movie->plot ? $movie->plot : 'n.a.'}} <br>
          <strong>Release: </strong>{{ $movie->release }} <br>
          {{-- accedo alla tabella genere e leggo il suo nome --}}
          <strong>Genre: </strong>{{ $movie->genre ? $movie->genre->name : 'n.a.' }} <br>
        </li>
      </ul>
    @endforeach
    <a href="{{ route('movies.create')}}" class="btn btn-info">Add Movie</a>
  </div>
@endsection
