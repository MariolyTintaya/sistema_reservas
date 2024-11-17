<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parada
 *
 * @property $id_parada
 * @property $nombre
 * @property $descripcion
 * @property $activo
 * @property $ruta_id_ruta
 *
 * @property Rutum $rutum
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Parada extends Model
{
    // Define la tabla en singular
    protected $table = 'parada';

    // Define la clave primaria personalizada
    protected $primaryKey = 'id_parada';

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_parada', 'nombre', 'descripcion', 'activo', 'ruta_id_ruta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rutum()
    {
        return $this->belongsTo(\App\Models\Rutum::class, 'ruta_id_ruta', 'id_ruta');
    }
    
}
