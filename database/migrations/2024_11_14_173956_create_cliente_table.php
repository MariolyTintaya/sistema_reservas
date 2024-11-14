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
        Schema::create('cliente', function (Blueprint $table) {
            $table->integer('id_cliente', true);
            $table->integer('nroDocumento');
            $table->integer('celular');
            $table->string('nombre', 45);
            $table->string('ape_paterno', 45);
            $table->string('ape_materno', 45);
            $table->date('fecha_nac');
            $table->boolean('activo');
            $table->integer('tipo_cliente_id_tipo')->index('fk_cliente_tipo_cliente_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
