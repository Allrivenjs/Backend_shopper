<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario_producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cantidad',
        'creacion'
    ];
}
