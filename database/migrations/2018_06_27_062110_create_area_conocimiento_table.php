<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaConocimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_conocimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('area_conocimiento');
            $table->string('informacion_general');
            $table->string('video_general');
            $table->string('imagen_general');
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
        Schema::dropIfExists('area_conocimiento');
    }
}
