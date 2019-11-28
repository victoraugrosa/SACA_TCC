<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $table = 'denuncia';
    protected $fillable = [
        'id', 
        'tipo_violencia',
        'date_time_fim',
        'idUsers'
    ];
    public function audio(){
        return $this->hasMany("App\Audio", 'idDenuncia');
    }
    public function login(){
        return $this->belongsTo("App\User", 'idUsers');
    }
    public function localizacao(){
        return $this->hasOne("App\Localizacao", 'idDenuncia');
    }
}
