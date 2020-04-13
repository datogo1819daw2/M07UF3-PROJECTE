<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = ['nomPrograma','descPrograma','tipoPrograma','clasPrograma','idCanal'];

    public function canal()
    {
        return $this->belongsTo('App\Canal');
    }  

    public function graelles()
    {
        return $this->belongsToMany('App\Grealla');
    }  
}
