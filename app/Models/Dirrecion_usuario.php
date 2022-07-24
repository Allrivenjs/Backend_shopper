<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dirrecion_usuario extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable= [
        'id',
        'id_usuario',
       'direccion',
        'ciudad',
        'codigo_postal',
       'pais',
       'telefono',

    ];

}
