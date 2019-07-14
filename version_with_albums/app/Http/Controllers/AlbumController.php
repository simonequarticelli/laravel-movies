<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Genre;

class AlbumController extends Controller
{

  public function index(){
    $albums = Album::all();
    return view('albums.index', compact('albums'));
  }

  public function create() {
    //passo tutti i generi alla pagina "create"
    $genres = Genre::all();
    return view('albums.create', compact('genres'));
  }

  public function store(Request $request) {
    // validazione dati
    $validatedData = $request->validate([
      'title' => 'required|max:255',
      'artist' => 'required|max:255',
      'year' => 'required|numeric|between:1900, 2019',
      'genre_id' => 'required',
    ]);

    $dati = $request->all();
    $new_album = new Album();
    $new_album->fill($dati);
    $new_album->save();

    return redirect()->route('albums.index');
  }

}
