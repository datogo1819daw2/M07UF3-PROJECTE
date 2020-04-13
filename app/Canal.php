<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    protected $fillable = ['nomCanal','logotipCanal'];
    
    public function programas()
    {
        return $this->hasMany('App\Programa');
    }  
}
