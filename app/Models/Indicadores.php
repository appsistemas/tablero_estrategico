<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicadores extends Model
{

    protected $table = 'indicadores';
    protected $primaryKey = 'idIndicador';
    public $timestamps = false;


    public function responsable()
    {
        return $this->belongsTo('App\Models\User', 'responsable');
    }
    public function meses()
    {
        return $this->belongsTo('App\Models\Meses', 'idMes');
    }
}
