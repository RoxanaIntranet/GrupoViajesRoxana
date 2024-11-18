<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'tr_package';
    protected $primaryKey = 'packageID';
    protected $fillable = [
        'nombre_package',
        'codigo_package',
        'hoteles',
        'doble/triple',
        'tour',
        'alojamiento',
        'traslado',
        'L_asistencia',
        'k_viaje'
    ];

}
