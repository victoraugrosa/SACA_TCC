<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    protected $table = 'localizacao';
    protected $fillable = [
        'id', 
        'lat_inic',
        'lat_fim',
        'long_inic',
        'long_fim',
        'idDenuncia'
    ];
    public function denuncia(){
        return $this->belongsTo("App\Denuncia", 'idDenuncia');
    }
}
