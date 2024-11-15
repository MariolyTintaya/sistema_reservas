<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    // Define la tabla en singular
    protected $table = 'tour';

    // Define la clave primaria personalizada
    protected $primaryKey = 'id_tour';

    // Configura el paginado
    protected $perPage = 20;

    // Define los atributos que pueden ser asignados masivamente
    protected $fillable = ['id_tour', 'informe', 'fecha', 'activo', 'transporte_num_placa'];

    // Desactivar los timestamps (created_at y updated_at)
    public $timestamps = false;

    /**
     * Relación con Transporte
     */
    public function transporte()
    {
        return $this->belongsTo(\App\Models\Transporte::class, 'transporte_num_placa', 'num_placa');
    }

    /**
     * Relación con Destinos
     */
    public function destinos()
    {
        return $this->hasMany(\App\Models\Destino::class, 'id_tour', 'id_tour');
    }

    /**
     * Relación con Guias
     */
    public function guias()
    {
        return $this->hasMany(\App\Models\Guium::class, 'id_tour', 'id_tour');
    }

    /**
     * Relación con Paquetes
     */
    public function paquetes()
    {
        return $this->hasMany(\App\Models\Paquete::class, 'id_tour', 'id_tour');
    }

    /**
     * Relación con Reservas
     */
    public function reservas()
    {
        return $this->hasMany(\App\Models\Reserva::class, 'id_tour', 'id_tour');
    }
}
