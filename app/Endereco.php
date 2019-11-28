<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'endereco';
    protected $fillable = [
        'id', 
        'CEP',
        'complemento',
        'rua',
        'cidade',
        'estado',
        'pais',
        'bairro',
        'idUsuaria'
    ];
    public function usuaria(){
        return $this->belongsTo("App\UsuariaModel", 'idDenuncia');
    }
}
