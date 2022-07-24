<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sesion extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'id_usuario',
        'total',
        'fecha_inicio',
        'fecha_final'
    ];
}
