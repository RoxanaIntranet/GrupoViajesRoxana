<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthSheet extends Model
{
    use HasFactory;
    protected $table='tr_health_sheet';
    protected $primaryKey = 'health_sID';
    protected $fillable = [
        'userID',
        'grupo_sanguineo', 
        'factor_rh',
        'tratamiento', 
        'tratamiento_obs', 
        'tratamiento_rec', 
        'tratamiento_med', 
        'tratamiento_sum', 
        'tratamiento_dosis', 
        'enfermedad', 
        'enfermedad_obs', 
        'enfermedad_rec', 
        'enfermedad_med', 
        'enfermedad_sum', 
        'enfermedad_dosis', 
        'medicamento', 
        'medicamento_obs', 
        'medicamento_rec', 
        'medicamento_med', 
        'medicamento_sum', 
        'medicamento_dosis', 
        'alergia', 
        'alergia_obs', 
        'alergia_rec', 
        'alergia_med', 
        'alergia_sum', 
        'alergia_dosis',
        'alergia_ad', 
        'alergia_ad_obs', 
        'alergia_ad_rec', 
        'alergia_ad_med', 
        'alergia_ad_sum', 
        'alergia_ad_dosis', 
        'inmunizacion', 
        'vacunas_adicionales', 
        'vacunas_covid', 
        'efecto_secundarios', 
        'informacion_adicional_salud',
        'tarjeta_seguro_medico', 
        'tarjeta_seguro_privado',
        'hist_medico',
        'hist_med_em',
        'historial_medico_pdf',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }
}
