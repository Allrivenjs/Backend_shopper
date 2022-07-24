<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_sesion',
        'id_producto',
        'cantidad'
    ];
}
