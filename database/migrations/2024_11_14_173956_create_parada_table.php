<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parada', function (Blueprint $table) {
            $table->integer('id_parada', true);
            $table->string('nombre', 45);
            $table->string('descripcion', 1000);
            $table->boolean('activo');
            $table->integer('ruta_id_ruta')->index('fk_parada_ruta_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parada');
    }
};
