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
        Schema::create('deposito', function (Blueprint $table) {
            $table->integer('id_deposito', true);
            $table->date('fecha');
            $table->boolean('activo');
            $table->integer('pago_id_pago')->index('fk_deposito_pago_idx');
            $table->integer('cliente_id_cliente')->index('fk_deposito_cliente1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposito');
    }
};
