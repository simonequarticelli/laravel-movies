<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

  public function run()
  {
    $this->call(albumsTableSeeder::class);
    $this->call(genresTableSeeder::class);
  }
}
