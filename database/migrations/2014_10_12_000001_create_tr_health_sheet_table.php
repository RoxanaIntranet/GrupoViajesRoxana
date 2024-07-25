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
        Schema::create('tr_health_sheet', function (Blueprint $table) {
            $table->id('health_sID');
            $table->unsignedBigInteger('userID');
            $table->string('grupo_sanguineo');
            $table->string('factor_rh');
            $table->text('tratamiento')->nullable();
            $table->text('tratamiento_obs')->nullable();
            $table->text('tratamiento_rec')->nullable();
            $table->text('tratamiento_med')->nullable();
            $table->text('tratamiento_sum')->nullable();
            $table->text('tratamiento_dosis')->nullable();
            $table->text('enfermedad')->nullable();
            $table->text('enfermedad_obs')->nullable();
            $table->text('enfermedad_rec')->nullable();
            $table->text('enfermedad_med')->nullable();
            $table->text('enfermedad_sum')->nullable();
            $table->text('enfermedad_dosis')->nullable();
            $table->text('alergia')->nullable();
            $table->text('alergia_obs')->nullable();
            $table->text('alergia_rec')->nullable();
            $table->text('alergia_med')->nullable();
            $table->text('alergia_sum')->nullable();
            $table->text('alergia_dosis')->nullable();
            $table->text('alergia_ad')->nullable();
            $table->text('alergia_ad_obs')->nullable();
            $table->text('alergia_ad_rec')->nullable();
            $table->text('alergia_ad_med')->nullable();
            $table->text('alergia_ad_sum')->nullable();
            $table->text('alergia_ad_dosis')->nullable();
            $table->text('inmunizacion')->nullable();
            $table->text('vacunas_adicionales')->nullable();
            $table->text('vacunas_covid')->nullable();
            $table->text('efecto_secundarios')->nullable();
            $table->text('informacion_adicional_salud')->nullable();
            $table->text('tarjeta_seguro_medico')->nullable();
            $table->text('tarjeta_seguro_privado')->nullable();
            $table->text('hist_medico')->nullable();
            $table->text('hist_med_em')->nullable();
            $table->string('historial_medico_pdf')->nullable();
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
        Schema::dropIfExists('tr_health_sheet');
    }
};
