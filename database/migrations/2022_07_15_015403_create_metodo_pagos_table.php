<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodo_pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Usuario::class)->constrained();
            $table->string('tipo_pago');
            $table->string('proveedor');
            $table->double('num_cuenta');
            $table->time('expira');
            $table->tinyInteger('cvv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodo_pagos');
    }
};
