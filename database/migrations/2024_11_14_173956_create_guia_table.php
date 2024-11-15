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
        if (!Schema::hasTable('guia')) {
            Schema::create('guia', function (Blueprint $table) {
                $table->integer('id_guia', true);
                $table->string('nombre', 45);
                $table->integer('celular');
                $table->string('disponibilidad', 45);
                $table->boolean('activo');
                $table->integer('tour_id_tour')->index('fk_guia_tour1_idx');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guia');
    }
};
