<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'ds_atendimento',
        'dt_atendimento'
    ];
}
