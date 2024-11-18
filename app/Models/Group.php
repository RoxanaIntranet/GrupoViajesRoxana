<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'tr_group';
    protected $primaryKey = 'groupID';
    protected $fillable = [
        'travelID',
        'tipo_grupo',
        'nombre_grupo',
        'tipo_encargado',
        'nombre_encargado',
        'telefono_encargado',
        'grado',
        'seccion',
        'k_viaje'
    ];

}
