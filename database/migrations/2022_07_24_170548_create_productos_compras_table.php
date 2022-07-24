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
        Schema::create('productos_compras', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Producto::class)->constrained();
            $table->foreignIdFor(\App\Models\Detalles_pago::class)->constrained();
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_compras');
    }
};
