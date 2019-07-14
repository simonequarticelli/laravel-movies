<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  protected $fillable = ['title', 'artist', 'year', 'genre_id'];

  public function genre() {
    // belongTo APPARTIENE A
    return $this->belongsTo('App\Genre');
  }
}
