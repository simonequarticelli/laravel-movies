<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  // un genre ha tanti movies --> plurale
  public function movies() {
    // hasMany HA MOLTI
    return $this->hasMany('App\Movie');  // <-- RELAZIONE UNO A MOLTI
  }
}
