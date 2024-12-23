<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Rol extends Model
{
    use HasFactory;

    protected $table = 'rol';

    protected $primaryKey = 'id_rol';

    protected $fillable = [
        'nombre_rol'
    ];

    public $timestamps = false;
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'rol_id_rol', 'id_rol');
    }
}
