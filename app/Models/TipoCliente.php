<?php
// TipoCliente.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    protected $table = 'tipo_cliente';
    protected $primaryKey = 'id_tipo';
    public $timestamps = false;

    protected $fillable = ['descripcion'];
}
