<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graella extends Model
{
    protected $fillable = ["hora","dia"];


    public function programas()
    {
        return $this->belongsToMany('App\Programa');
    }  
}
