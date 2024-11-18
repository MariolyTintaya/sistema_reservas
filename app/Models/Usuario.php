<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
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
    protected $hidden = [
        'contraseña',
    ];

    public $timestamps = false;
     
    public function setContraseñaAttribute($value)
    {
           $this->attributes['contraseña'] = Hash::make($value);
    }
     // Define la relación con Rol
     public function rol()
     {
         return $this->belongsTo(Rol::class, 'rol_id_rol', 'id_rol');
     }
         // Especifica el nombre del campo de autenticación
    public function getAuthPassword()
    {
        return $this->contraseña;
    }

}
