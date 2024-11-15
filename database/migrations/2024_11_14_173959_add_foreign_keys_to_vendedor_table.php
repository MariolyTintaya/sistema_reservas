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
        if (!Schema::hasTable('vendedor')) {
            Schema::table('vendedor', function (Blueprint $table) {
                $table->foreign(['usuario_id_usuario'], 'fk_vendedor_usuario1')->references(['id_usuario'])->on('usuario')->onUpdate('no action')->onDelete('no action');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vendedor', function (Blueprint $table) {
            $table->dropForeign('fk_vendedor_usuario1');
        });
    }
};
