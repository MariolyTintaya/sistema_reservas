<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paquete
 *
 * @property $id_paquete
 * @property $temporada
 * @property $tipo_paquete
 * @property $precio
 * @property $nombre
 * @property $fechaInicio
 * @property $fechaFin
 * @property $activo
 * @property $tour_id_tour
 *
 * @property Tour $tour
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paquete extends Model
{
    // Define la tabla en singular
    protected $table = 'paquete';

    // Define la clave primaria personalizada
    protected $primaryKey = 'id_paquete';

    protected $perPage = 20;

    // Desactivar los timestamps (created_at y updated_at)
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_paquete', 'temporada', 'tipo_paquete', 'precio', 'nombre', 'fechaInicio', 'fechaFin', 'activo', 'tour_id_tour'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tour()
    {
        return $this->belongsTo(\App\Models\Tour::class, 'tour_id_tour', 'id_tour');
    }
    
}
