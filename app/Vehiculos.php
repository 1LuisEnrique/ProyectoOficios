<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    //
    protected $table='vehiculos';
    protected $primaryKey='id_vehiculo';
    protected $fillable=['modelo','id_marca','placas'];

    function getMarca()
    {
        return $this->hasMany("App\Marcas", 'id_marca', 'id_marca');
    }
}
