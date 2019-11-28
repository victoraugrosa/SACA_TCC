<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariaModel extends Model
{
    protected $table = 'usuaria';
    protected $fillable = [
        'id',
        'nome', 
        'CPF',
        'estado_civil',
        'foto',
        'raca',
        'data_nasc'
    ];
    public function login(){
        return $this->hasOne("App\User", 'idUsuaria');

    }
    public function contato(){
        return $this->hasOne("App\Contato", 'idUsuaria');

    }
}
