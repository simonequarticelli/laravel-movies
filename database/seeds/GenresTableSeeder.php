<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    public function run()
    {
      // creo array o array associatico popolato dai generi
      $genres = ['Action', 'Triller', 'Horror', 'Animation', 'Comedy', 'Dramatic', 'Adventure'];
      // eseguo un ciclo foreach per scorrere i generi
      // ad ogni genere istanzio la classe Genre e salvo il nome del genere
      foreach ($genres as $genre) {
        $new_genre = new Genre();
        $new_genre->name = $genre;
        $new_genre->save();
      }
    }
}
