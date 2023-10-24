<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{

    protected $table = 'historial';
    protected $primaryKey = 'id_historial';
    public $timestamps = false;


    /*  public function usuarios()
    {
        return $this->hasMany('App\Models\tbUsuario', 'id_cargo');
    } */
}
