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
        Schema::create('dirrecion_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('direccion');
            $table->string('direccion_2');
            $table->string('ciudad');
            $table->string('codigo_postal');
            $table->string('pais');
            $table->integer('numero_telefono');

            $table->foreignIdFor(\App\Models\User::class)->constrained();

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
        Schema::dropIfExists('dirrecion_usuarios');
    }
};
