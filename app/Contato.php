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
    ];
    public function usuaria(){
        return $this->belongsTo("App\UsuariaModel", 'idUsuaria');
    }

}
