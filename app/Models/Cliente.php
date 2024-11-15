<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id_cliente
 * @property $nroDocumento
 * @property $celular
 * @property $nombre
 * @property $ape_paterno
 * @property $ape_materno
 * @property $fecha_nac
 * @property $activo
 * @property $tipo_cliente_id_tipo
 *
 * @property TipoCliente $tipoCliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
     // Define la tabla en singular
     protected $table = 'cliente';

     // Define la clave primaria personalizada
     protected $primaryKey = 'id_cliente';
 
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_cliente', 'nroDocumento', 'celular', 'nombre', 'ape_paterno', 'ape_materno', 'fecha_nac', 'activo', 'tipo_cliente_id_tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoCliente()
    {
        return $this->belongsTo(\App\Models\TipoCliente::class, 'tipo_cliente_id_tipo', 'id_tipo');
    }
    
}
