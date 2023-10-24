<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetasFuturas extends Model
{

    protected $table = 'meta_futuras';
    protected $primaryKey = 'id_meta';
    public $timestamps = false;


    /*  public function usuarios()
    {
        return $this->hasMany('App\Models\tbUsuario', 'id_cargo');
    } */
}
