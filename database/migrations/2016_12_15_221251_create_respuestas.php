<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('Respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_empresa');
            $table->string('id_licitacion');
            $table->text('body');
            $table->string('moneda');
            $table->string('precio');

        });
    }

    /**
     * Reverse the migrations.     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('Respuestas');

    }
}
