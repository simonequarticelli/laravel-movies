@extends('layout.app')

@section('content')
  <div class="container mt-4 p-0">
    <div class="row justify-content-center">
      <h2>All Albums</h2>
    </div>
    <div class="row justify-content-center">
      <a href="{{ route('albums.create') }}" class="btn btn-info text-white">Add Album</a>
    </div>
    <div class="row justify-content-center mt-3">
      @foreach ($albums as $album)
        <div class="card m-2" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $album->title }}</h5>
            <p class="card-text">{{ $album->artist }}</p>
            <p class="card-text">{{ $album->year }}</p>
            <p class="card-text">{{ $album->genre ? $album->genre['name'] : 'n.a.' }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
