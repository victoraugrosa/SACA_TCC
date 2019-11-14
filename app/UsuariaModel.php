<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariaModel extends Model
{
    protected $table = 'usuaria';
    protected $fillable = [
        'nome', 
        'CPF',
        'estado_civil',
        'foto',
        'raca',
        'data_nasc'
    ];
}
