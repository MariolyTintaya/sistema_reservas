<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Destino
 *
 * @property $id_destino
 * @property $nombre
 * @property $pais
 * @property $cuidad
 * @property $activo
 * @property $tour_id_tour
 *
 * @property Tour $tour
 * @property Rutum[] $rutas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Destino extends Model
{
    // Define la tabla en singular
    protected $table = 'destino';

    // Define la clave primaria personalizada
    protected $primaryKey = 'id_destino';

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_destino', 'nombre', 'pais', 'cuidad', 'activo', 'tour_id_tour'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tour()
    {
        return $this->belongsTo(\App\Models\Tour::class, 'tour_id_tour', 'id_tour');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rutas()
    {
        return $this->hasMany(\App\Models\Rutum::class, 'id_destino', 'destino_id_destino');
    }
    
}
