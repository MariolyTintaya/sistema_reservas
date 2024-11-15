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
        if (!Schema::hasTable('deposito')) {
            Schema::table('deposito', function (Blueprint $table) {
                $table->foreign(['cliente_id_cliente'], 'fk_deposito_cliente1')->references(['id_cliente'])->on('cliente')->onUpdate('no action')->onDelete('no action');
                $table->foreign(['pago_id_pago'], 'fk_deposito_pago')->references(['id_pago'])->on('pago')->onUpdate('no action')->onDelete('no action');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('deposito', function (Blueprint $table) {
            $table->dropForeign('fk_deposito_cliente1');
            $table->dropForeign('fk_deposito_pago');
        });
    }
};
