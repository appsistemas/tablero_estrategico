<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{

    protected $table = 'rol';
    protected $primaryKey = 'idrol';
    public $timestamps = false;


    /*  public function usuarios()
    {
        return $this->hasMany('App\Models\tbUsuario', 'id_cargo');
    } */
}
