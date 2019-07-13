@extends('layout.app')

@section('title_page')
  create
@endsection

@section('content')
  <div class="container">
    <h2 class="mt-5">Add Movie</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('movies.store')}}" method="post"><br>

      @csrf

      <label for="title">Title Movie</label><br>
      <input type="text" name="title" value="{{ old('title')}}"><br>

      <label for="plot">Plot Movie</label><br>
      <textarea name="plot" rows="8" cols="80">{{ old('plot')}}</textarea><br>

      <div class="form-group w-25">
        {{-- name = al nome della colonna  --}}
        <select name="genre_id" class="form-control">
          {{-- imposto il value vuoto per permettere il controllo  --}}
          <option  value=" ">Choose Genre</option>
          @foreach ($genres as $genre)
            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
          @endforeach
        </select>
      </div>

      <label for="release">Release Movie</label><br>
      <input type="number" name="release" value="{{ old('release')}}"min="1990" max="2019" ><br>

      <br><input type="submit" class="btn btn-info" value="Add Movie">

    </form>
  </div>
@endsection
