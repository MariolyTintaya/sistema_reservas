<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reserva', function (Blueprint $table) {
            $table->timestamp('fecha_creacion')->default(DB::raw('CURRENT_TIMESTAMP'))->change();
        });
    }
    
    public function down()
    {
        Schema::table('reserva', function (Blueprint $table) {
            $table->timestamp('fecha_creacion')->default(null)->change();
        });
    }
};
