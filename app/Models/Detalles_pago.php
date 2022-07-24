<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_pago extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'monto',
        'proveedor',
        'estado',
        'fecha_pago'
    ];
}
