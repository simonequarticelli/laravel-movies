<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    public function run()
    {
      // array associativo di movies
      $movies = [
        [
          'title' => 'Pulp Fiction',
          'plot' => 'lorem ipsum',
          'release' => '1994',
        ],
        [
          'title' => 'Guerre Stellari',
          'plot' => 'lorem ipsum',
          'release' => '1977',
        ],
        [
          'title' => 'E.T. - L\'extra-terrestre',
          'plot' => 'lorem ipsum',
          'release' => '1982',
        ],
      ];

      foreach ($movies as $movie) {
        $new_movie = new Movie();
        $new_movie->fill($movie);
        $new_movie->save();
      }

    }
}
