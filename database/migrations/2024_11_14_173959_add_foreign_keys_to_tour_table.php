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
        Schema::table('tour', function (Blueprint $table) {
            $table->foreign(['transporte_num_placa'], 'fk_tour_transporte1')->references(['num_placa'])->on('transporte')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tour', function (Blueprint $table) {
            $table->dropForeign('fk_tour_transporte1');
        });
    }
};
