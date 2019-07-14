<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  // un genre ha tanti albums --> plurale
  public function albums() {
    // hasMany HA MOLTI
    return $this->hasMany('App\Album');  // <-- RELAZIONE UNO A MOLTI
  }
}
