<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dirrecion_usuario extends Model
{
    use HasFactory;
//    public $timestamps = false;

//    protected $fillable= [
//        'direccion',
//        'direccion_2',
//        'ciudad',
//        'codigo_postal',
//        'pais',
//        'numero_telefono',
//        'user_id',
//    ];

    protected $guarded = [
        'id',
    ];

}
