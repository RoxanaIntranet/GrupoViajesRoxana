<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_group', function (Blueprint $table) {
            $table->id('groupID');
            $table->unsignedBigInteger('travelID');
            $table->string('tipo_grupo');
            $table->string('nombre_grupo');
            $table->string('tipo_encargado');
            $table->string('nombre_encargado');
            $table->string('telefono_encargado');
            $table->string('grado');
            $table->string('seccion');
            $table->timestamps();
            $table->foreign('travelID')->references('travelID')->on('tr_travels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_group');
    }
};
