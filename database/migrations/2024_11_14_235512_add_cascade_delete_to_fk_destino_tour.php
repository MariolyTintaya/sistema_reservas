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
        // Asegurarse de que la tabla 'destino' existe antes de proceder
        Schema::table('destino', function (Blueprint $table) {
            // Eliminar la clave foránea existente si está presente
            $table->dropForeign(['tour_id_tour']);
            
            // Añadir la nueva clave foránea con eliminación en cascada
            $table->foreign('tour_id_tour')->references('id_tour')->on('tour')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('destino', function (Blueprint $table) {
            // Eliminar la clave foránea
            $table->dropForeign(['tour_id_tour']);
            
            // Restaurar la clave foránea sin eliminación en cascada
            $table->foreign('tour_id_tour')->references('id_tour')->on('tour');
        });
    }
};
