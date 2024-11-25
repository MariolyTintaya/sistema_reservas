<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    protected $table = 'vendedor';
    protected $primaryKey = 'id_vendedor';
    
    // Deshabilitamos el incremento automático si es necesario
    public $incrementing = true;
    
    // Hacemos que estas columnas sean asignables masivamente
    protected $fillable = [
        'sueldo',
        'fecha_contrato',
        'turno',
        'celular',
        'activo',
        'usuario_id_usuario'
    ];
    public $timestamps = false;
    // Relación con el modelo de Usuario (suponiendo que hay un modelo 'Usuario')
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id_usuario', 'id_usuario');
    }
}

