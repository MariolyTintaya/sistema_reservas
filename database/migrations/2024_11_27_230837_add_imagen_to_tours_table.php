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
        Schema::table('tour', function (Blueprint $table) {
            // Agregar columna para la imagen
            $table->string('imagen')->nullable(); // Puedes usar nullable si la imagen no es obligatoria
        });
    }
    
    public function down()
    {
        Schema::table('tour', function (Blueprint $table) {
            // Eliminar la columna si la migración se revierte
            $table->dropColumn('imagen');
        });
    }
};
