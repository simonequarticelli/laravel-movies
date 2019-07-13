<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      // lanciare il metodo run della tabella Genres
      $this->call(GenresTableSeeder::class);

      // lanciare il metodo run della tabella Movies
      $this->call(MoviesTableSeeder::class);

      // per richiamare un'altra tabella
      // $this->call(<<nomeTabella>>TableSeeder::class);

    }
}
