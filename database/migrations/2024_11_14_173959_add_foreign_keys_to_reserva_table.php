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
            Schema::table('reserva', function (Blueprint $table) {
                $table->foreign(['cliente_id_cliente'], 'fk_reserva_cliente')->references(['id_cliente'])->on('cliente')->onUpdate('no action')->onDelete('no action');
                $table->foreign(['deposito_id_deposito'], 'fk_reserva_deposito')->references(['id_deposito'])->on('deposito')->onUpdate('no action')->onDelete('no action');
                $table->foreign(['tour_id_tour'], 'fk_reserva_tour')->references(['id_tour'])->on('tour')->onUpdate('no action')->onDelete('no action');
                $table->foreign(['usuario_id_usuario'], 'fk_reserva_usuario')->references(['id_usuario'])->on('usuario')->onUpdate('no action')->onDelete('no action');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reserva', function (Blueprint $table) {
            $table->dropForeign('fk_reserva_cliente');
            $table->dropForeign('fk_reserva_deposito');
            $table->dropForeign('fk_reserva_tour');
            $table->dropForeign('fk_reserva_usuario');
        });
    }
};
