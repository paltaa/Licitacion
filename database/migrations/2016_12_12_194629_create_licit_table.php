<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licit', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('name')
            $table->timestamps();
            $table->text('body');
            $table->integer('Makerid');
            $table->timestamp('Caduca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licit');
    }
}
