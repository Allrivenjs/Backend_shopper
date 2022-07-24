<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos_compra extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'id_producto',
        'id_detalle_pago',
        'cantidad'
    ];
}
