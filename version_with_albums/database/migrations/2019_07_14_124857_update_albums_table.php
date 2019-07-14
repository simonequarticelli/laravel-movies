<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAlbumsTable extends Migration
{

    public function up()
    {
        Schema::table('albums', function (Blueprint $table) {
          // genre_id no utoincrement NULL aggiungi dopo colonna id
          $table->unsignedBigInteger('genre_id')->nullable()->after('id');
          // chiave genre_id che fa riferimento all'id della tabella genres
          $table->foreign('genre_id')->references('id')->on('genres');
        });
    }


    public function down()
    {
        Schema::table('albums', function (Blueprint $table) {
          // prima elimino la relazione
          $table->dropForeign('albums_genre_id_foreign');
          // poi la tebella
          $table->dropColumn('genre_id');
        });
    }
}
