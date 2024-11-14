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
        Schema::create('ruta', function (Blueprint $table) {
            $table->integer('id_ruta', true);
            $table->integer('distancia')->nullable();
            $table->string('estadoRuta', 45);
            $table->boolean('activo');
            $table->integer('destino_id_destino')->index('fk_ruta_destino_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruta');
    }
};
