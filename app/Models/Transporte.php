<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transporte
 *
 * @property $num_placa
 * @property $num_asientos
 * @property $tipo_transporte
 * @property $activo
 *
 * @property Tour[] $tours
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transporte extends Model
{
        // Define la tabla en singular
        protected $table = 'transporte';

        // Define la clave primaria personalizada
        protected $primaryKey = 'num_placa';

        public $timestamps = false; // Deshabilita `created_at` y `updated_at`

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['num_placa', 'num_asientos', 'tipo_transporte', 'activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tours()
    {
        return $this->hasMany(\App\Models\Tour::class, 'num_placa', 'transporte_num_placa');
    }
    
}
