<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contato';
    protected $fillable = [
        'email', 
        'ddd',
        'celular',
        'idUsuaria',
        'idGuardiao'
    ];
    public function usuaria(){
        return $this->belongsTo("App\UsuariaModel", 'idUsuaria');
    }
    public function guardiao(){
        return $this->belongsTo("App\Guardiao", 'idGuardiao');
    }

}
