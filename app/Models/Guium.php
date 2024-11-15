<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guium
 *
 * @property $id_guia
 * @property $nombre
 * @property $celular
 * @property $disponibilidad
 * @property $activo
 * @property $tour_id_tour
 *
 * @property Tour $tour
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Guium extends Model
{
    // Define la tabla en singular
    protected $table = 'guia';

    // Define la clave primaria personalizada
    protected $primaryKey = 'id_guia';

    protected $perPage = 20;

    // Deshabilitar el uso de created_at y updated_at
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_guia', 'nombre', 'celular', 'disponibilidad', 'activo', 'tour_id_tour'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tour()
    {
        return $this->belongsTo(\App\Models\Tour::class, 'tour_id_tour', 'id_tour');
    }
    
}
