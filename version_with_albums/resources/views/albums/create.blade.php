@extends('layout.app')

@section('content')
  <div class="container mt-5">
    <h2>Add Album</h2>
    <form action="{{ route('albums.store') }}" method="post">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      @csrf
      <label for="title">Title</label><br>
      <input type="text" name="title" value="{{ old('title') }}"><br>

      <label for="artist">Artist</label><br>
      <input type="text" name="artist" value="{{ old('artist') }}"><br>

      <label for="year">Year</label><br>
      <input type="number" name="year" min="1900" max="2019" value="{{ old('year') }}"><br>

      <br>
      <select name="genre_id">
        <option value=" ">Genre</option>
        @foreach ($genres as $genre)
          <option value="{{ $genre->id }}">{{ $genre->name }}</option>
        @endforeach
      </select><br>
      <br>
      <input type="submit" value="Add">
    </form>
  </div>
@endsection
