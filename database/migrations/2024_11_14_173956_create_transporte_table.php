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
        if (!Schema::hasTable('transporte')) {
            Schema::create('transporte', function (Blueprint $table) {
                $table->string('num_placa', 25)->primary();
                $table->integer('num_asientos');
                $table->string('tipo_transporte', 45);
                $table->boolean('activo');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transporte');
    }
};
