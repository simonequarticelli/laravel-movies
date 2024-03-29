<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{

    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            // proprità tabella
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('genres');
    }
}
