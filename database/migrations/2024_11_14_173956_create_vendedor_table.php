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
        Schema::create('vendedor', function (Blueprint $table) {
            $table->integer('id_vendedor', true);
            $table->decimal('sueldo', 5)->nullable();
            $table->date('fecha_contrato')->nullable();
            $table->string('turno', 25)->nullable();
            $table->integer('celular')->nullable();
            $table->boolean('activo');
            $table->integer('usuario_id_usuario')->index('fk_vendedor_usuario1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendedor');
    }
};
