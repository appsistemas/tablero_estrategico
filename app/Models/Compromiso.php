<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compromiso extends Model
{

    protected $table = 'compromiso';
    protected $primaryKey = 'id_compromiso';
    public $timestamps = false;


    /*  public function usuarios()
    {
        return $this->hasMany('App\Models\tbUsuario', 'id_cargo');
    } */
}
