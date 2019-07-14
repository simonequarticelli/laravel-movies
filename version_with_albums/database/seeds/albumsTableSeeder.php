<?php

use Illuminate\Database\Seeder;
use App\Album;

class albumsTableSeeder extends Seeder
{

  public function run()
  {
    $albums = [
      [
        'title' => 'californication',
        'artist' => 'Red Hot Chili Peppers',
        'year' => '1999'
      ],
      [
        'title' => 'The Number of the Beast',
        'artist' => 'Iron Maiden',
        'year' => '1982'
      ],
      [
        'title' => 'Shadows',
        'artist' => 'Shawn James',
        'year' => '2012'
      ],
      [
        'title' => 'The Dark Side of the Moon',
        'artist' => 'Pink Floyd',
        'year' => '1973'
      ],
      [
        'title' => 'Nevermind',
        'artist' => 'Nirvana',
        'year' => '1991'
      ],
      [
        'title' => 'Kill \'Em All',
        'artist' => 'Metallica',
        'year' => '1983'
      ],
      [
        'title' => 'Led Zeppelin II',
        'artist' => 'Led Zeppelin',
        'year' => '1969'
      ],
      [
        'title' => 'Ten',
        'artist' => 'Pearl Jam',
        'year' => '1991'
      ],
      [
        'title' => 'Live at Benaroya Hall',
        'artist' => 'Pearl Jam',
        'year' => '2004'
      ],
      [
        'title' => 'Conspiracy of One',
        'artist' => 'The Offspring',
        'year' => '2000'
      ],
      [
        'title' => 'Mother\'s Milk',
        'artist' => 'Red Hot Chili Peppers',
        'year' => '1989'
      ],
      [
        'title' => 'Blood Sugar Sex Magik',
        'artist' => 'Red Hot Chili Peppers',
        'year' => '1991'
      ],
      [
        'title' => '...And Justice for All',
        'artist' => 'Metallica',
        'year' => '1988'
      ],
      [
        'title' => 'ReLoad',
        'artist' => 'Metallica',
        'year' => '1997'
      ],
      [
        'title' => 'Splinter',
        'artist' => 'The Offspring',
        'year' => '2003'
      ],
      [
        'title' => 'Renegades',
        'artist' => 'Rage Against the Machine',
        'year' => '2000'
      ],
      [
        'title' => 'The Battle of Los Angeles',
        'artist' => 'Rage Against the Machine',
        'year' => '1999'
      ],
      [
        'title' => 'Audioslave',
        'artist' => 'Audioslave',
        'year' => '2002'
      ],
      [
        'title' => 'Enema of the State',
        'artist' => 'Blink-182',
        'year' => '1999'
      ],
      [
        'title' => 'Take Off Your Pants and Jacket',
        'artist' => 'Blink-182',
        'year' => '2001'
      ],
    ];

    foreach ($albums as $album) {
      $new_album = new Album();
      $new_album->fill($album);
      $new_album->save();
    }
  }
}
