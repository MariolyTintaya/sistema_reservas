<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    protected $table = 'tipo_cliente'; 
    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'tipo_cliente_id_tipo', 'id_tipo');
    }
}