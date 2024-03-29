<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{

    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('artist');
            $table->year('year');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
