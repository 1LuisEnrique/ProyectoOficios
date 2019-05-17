<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    //
    protected $table = 'Municipios';
    protected $primaryKey='id_municipio';
    protected $fillable = ['descripcion','id_estado'];


    function  getEstado()
    {
        return $this->hasMany("App\Estados",'id_estado','id_estado');

    }

}
