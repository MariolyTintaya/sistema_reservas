<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'nombre',
        'correo',
        'contraseña',
        'activo',
        'rol_id_rol'
    ];

    public $timestamps = false;
     // Define la relación con Rol
     public function rol()
     {
         return $this->belongsTo(Rol::class, 'rol_id_rol', 'id_rol');
     }
}
