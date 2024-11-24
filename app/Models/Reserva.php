<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id_reserva
 * @property $num_personas
 * @property $fecha_creacion
 * @property $activo
 * @property $tour_id_tour
 * @property $cliente_id_cliente
 * @property $deposito_id_deposito
 * @property $usuario_id_usuario
 *
 * @property Cliente $cliente
 * @property Deposito $deposito
 * @property Tour $tour
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    // Define la tabla en singular
    protected $table = 'reserva';

    // Define la clave primaria personalizada
    protected $primaryKey = 'id_reserva';

    // Desactivar los timestamps (created_at y updated_at)
    public $timestamps = false;

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_reserva',
        'num_personas',
        'fecha_creacion',
        'activo',
        'tour_id_tour',
        'cliente_id_cliente',
        'deposito_id_deposito',
        'usuario_id_usuario'
    ];

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
    public function deposito()
    {
        return $this->belongsTo(\App\Models\Deposito::class, 'deposito_id_deposito', 'id_deposito');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tour()
    {
        return $this->belongsTo(\App\Models\Tour::class, 'tour_id_tour', 'id_tour');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'usuario_id_usuario', 'id_usuario');
    }
}

