<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{

    protected $table = 'resultado';
    protected $primaryKey = 'idresultado';
    public $timestamps = false;

    public function meses()
    {
        return $this->belongsTo('App\Models\Meses', 'idMes');
    }
}
