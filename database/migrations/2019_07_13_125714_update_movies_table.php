<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMoviesTable extends Migration
{

    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
          // aggiungo colonna di relazione
          // chiave esterna NO autoincrement
          // aggiungo colonna "genre_id" (nullable perchè ho gia inserito dei film senza il riferimento) in questo modo evito di andare contro i vincoli della chiave esterna
          $table->unsignedBigInteger('genre_id')->nullable()->after('id');

          // specifico il fatto che sia una chiave esterna
          // che fa riferimento all'id della tabella genres
          $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
          // IN QUESTO ORDINE
          // per cancellare chiave
          // nomeTabella_nomeColonna_foreign
          $table->dropForeign('movies_genre_id_foreign'); // <-- prima elimino il vincolo (la chiave)

          // cancello la colonna creata
          $table->dropColumn('genre_id'); // <-- poi elimino la tebella
        });
    }
}
