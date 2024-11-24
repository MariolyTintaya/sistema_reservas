<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuario';

    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'nombre',
        'apellido', // Agrega el nuevo campo aquí
        'correo',
        'contraseña',
        'activo',
        'rol_id_rol'
    ];
    // Asegúrate de que remember_token no esté en el array de $fillable
    protected $guarded = ['remember_token']; // Opcional, si no necesitas remember_token
    protected $hidden = [
        'contraseña',
    ];

    public $timestamps = false;
     
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
