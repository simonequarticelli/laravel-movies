<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $fillable = ['title', 'plot', 'release', 'genre_id'];
  // un movie ha un genre --> singolare
  public function genre() {
    // belongTo APPARTIENE A
    return $this->belongsTo('App\Genre');
  }
}
