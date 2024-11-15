<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Deposito
 *
 * @property $id_deposito
 * @property $fecha
 * @property $activo
 * @property $pago_id_pago
 * @property $cliente_id_cliente
 *
 * @property Cliente $cliente
 * @property Pago $pago
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Deposito extends Model
{
     // Define la tabla en singular
     protected $table = 'deposito';

     // Define la clave primaria personalizada
     protected $primaryKey = 'id_deposito';
 
    

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_deposito', 'fecha', 'activo', 'pago_id_pago', 'cliente_id_cliente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id_cliente', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pago()
    {
        return $this->belongsTo(\App\Models\Pago::class, 'pago_id_pago', 'id_pago');
    }
    
}
