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
        Schema::table('parada', function (Blueprint $table) {
            $table->foreign(['ruta_id_ruta'], 'fk_parada_ruta')->references(['id_ruta'])->on('ruta')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parada', function (Blueprint $table) {
            $table->dropForeign('fk_parada_ruta');
        });
    }
};
