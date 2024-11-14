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
        Schema::table('destino', function (Blueprint $table) {
            $table->foreign(['tour_id_tour'], 'fk_destino_tour')->references(['id_tour'])->on('tour')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('destino', function (Blueprint $table) {
            $table->dropForeign('fk_destino_tour');
        });
    }
};
