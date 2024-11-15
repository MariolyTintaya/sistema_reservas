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
        if (!Schema::hasTable('ruta')) {
            Schema::table('ruta', function (Blueprint $table) {
                $table->foreign(['destino_id_destino'], 'fk_ruta_destino')->references(['id_destino'])->on('destino')->onUpdate('no action')->onDelete('no action');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ruta', function (Blueprint $table) {
            $table->dropForeign('fk_ruta_destino');
        });
    }
};
