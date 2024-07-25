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
        Schema::create('tr_sheet_nutritional', function (Blueprint $table) {
            $table->id('sheet_nID');
            $table->unsignedBigInteger('userID');
            $table->float('peso');
            $table->float('talla');
            $table->string('actividad');
            $table->string('alimentacion');
            $table->text('detalle_alimentacion');
            $table->text('no_consume');
            $table->text('detalles_consume');
            $table->string('tipo_dieta');
            $table->text('detalles_dieta');
            $table->string('habitos');
            $table->text('detalles_habitos');
            $table->timestamps();
            $table->foreign('userID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_sheet_nutritional');
    }
};
