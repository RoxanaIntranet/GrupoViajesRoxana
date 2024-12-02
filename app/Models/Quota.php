<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    use HasFactory;

    protected $table = 'tr_quota';
    protected $primaryKey = 'id';
    protected $fillable = [
        'group_user',
        'codigo',
        'quota',
        'amount',
        'date',
        'status_pay',
        'valid_status',
        'resume'
    ];
}
