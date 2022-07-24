<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_usuario',
        'id_pago',
        'total',
        'fecha_compra'
    ];
}
