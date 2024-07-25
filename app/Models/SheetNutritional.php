<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheetNutritional extends Model
{
    use HasFactory;
    protected $table='tr_sheet_nutritional';
    protected $primaryKey = 'sheet_nID';
    protected $fillable = [
        'sheet_nID',
        'userID',
        'peso',
        'talla',
        'actividad', 
        'alimentacion', 
        'detalle_alimentacion', 
        'alergias',
        'detalles_alergias',
        'no_consume',
        'detalles_consume', 
        'habitos',
        'detalles_habitos',
        'pref_comida',
        'detalles_pref_comida',
        'tipo_dieta',
        'detalles_dieta',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }
}
