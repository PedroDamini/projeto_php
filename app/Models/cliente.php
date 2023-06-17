<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use CrudTrait, HasFactory;

    protected $table = 'cliente';

    protected $fillable = [
        'nm_cliente',
        // outros campos preenchíveis, se houver
    ];
    
    public $timestamps = false;

    // Aqui você pode adicionar outros atributos e relacionamentos do modelo, se necessário
}
