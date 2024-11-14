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
        Schema::create('destino', function (Blueprint $table) {
            $table->integer('id_destino', true);
            $table->string('nombre', 45);
            $table->string('pais', 45);
            $table->string('cuidad', 45);
            $table->boolean('activo');
            $table->integer('tour_id_tour')->index('fk_destino_tour1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destino');
    }
};
