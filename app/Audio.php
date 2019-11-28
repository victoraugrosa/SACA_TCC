<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $table = 'audio';
    protected $fillable = [
        'id', 
        'arquivo',
        'idDenuncia'
    ];
    public function denuncia(){
        return $this->belongsTo("App\Denuncia", 'idDenuncia');
    }
}
