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
        if (!Schema::hasTable('paquete')) {
            Schema::create('paquete', function (Blueprint $table) {
                $table->integer('id_paquete', true);
                $table->string('temporada', 45);
                $table->string('tipo_paquete', 45);
                $table->integer('precio');
                $table->string('nombre', 45);
                $table->date('fechaInicio');
                $table->date('fechaFin');
                $table->boolean('activo');
                $table->integer('tour_id_tour')->index('fk_paquete_tour1_idx');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paquete');
    }
};
