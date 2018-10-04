<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMochilaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mochila', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mochila');
            $table->integer('contenidos_curso_id')->unsigned();
            $table->foreign('contenidos_curso_id')->references('id')->on('contenidos_curso')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mochila');
    }
}
