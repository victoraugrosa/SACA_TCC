<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardiao extends Model
{
    protected $table = 'guardiao';
    protected $fillable = [
        'id', 
        'nome',
        'idUsuaria'
    ];
    public function usuaria(){
        return $this->belongsTo("App\Usuaria", 'idUsuaria');
    }
}
