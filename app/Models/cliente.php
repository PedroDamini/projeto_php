<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'cliente';

    public function updateCliente($cd_cliente, $nm_cliente)
    {
        $cliente = cliente::find($cd_cliente);
        $cliente->name = $nm_cliente;
        $cliente->save();
    }
}
