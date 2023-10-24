<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchivoCompromiso extends Model
{

    protected $table = 'archivo_compromiso';
    protected $primaryKey = 'idArchComp';
    public $timestamps = false;


    /*  public function usuarios()
    {
        return $this->hasMany('App\Models\tbUsuario', 'id_cargo');
    } */
}
