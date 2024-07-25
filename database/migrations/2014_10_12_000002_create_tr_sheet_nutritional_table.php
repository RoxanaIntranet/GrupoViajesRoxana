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
            $table->float('peso')->nullable();
            $table->float('talla')->nullable();
            $table->string('actividad')->nullable();
            $table->string('alimentacion')->nullable();
            $table->text('detalle_alimentacion')->nullable();
            $table->text('alergias')->nullable();
            $table->text('detalles_alergias')->nullable();
            $table->text('no_consume')->nullable();
            $table->text('detalles_consume')->nullable();
            $table->string('habitos')->nullable();
            $table->text('detalles_habitos')->nullable();
            $table->text('pref_comida')->nullable();
            $table->text('detalles_pref_comida')->nullable();
            $table->string('tipo_dieta')->nullable();
            $table->text('detalles_dieta')->nullable();
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
