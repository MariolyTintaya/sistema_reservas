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
        $table->integer('num_personas')->default(1)->change();
    });
}

public function down()
{
    Schema::table('reserva', function (Blueprint $table) {
        $table->integer('num_personas')->default(null)->change();
    });
}
};
