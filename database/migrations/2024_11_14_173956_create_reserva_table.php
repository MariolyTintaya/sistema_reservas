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
        if (!Schema::hasTable('reserva')) {
            Schema::create('reserva', function (Blueprint $table) {
                $table->integer('id_reserva', true);
                $table->integer('monto_total');
                $table->integer('num_personas');
                $table->date('fecha_creacion');
                $table->boolean('activo');
                $table->integer('tour_id_tour')->index('fk_reserva_tour_idx');
                $table->integer('cliente_id_cliente')->index('fk_reserva_cliente_idx');
                $table->integer('deposito_id_deposito')->index('fk_reserva_deposito_idx');
                $table->integer('usuario_id_usuario')->index('fk_reserva_usuario_idx');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};
