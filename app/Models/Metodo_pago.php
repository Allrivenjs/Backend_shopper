<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metodo_pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_usuario',
        'proveedor',
        'num_cuenta',
        'expira',
        'cvv'
    ];
}
