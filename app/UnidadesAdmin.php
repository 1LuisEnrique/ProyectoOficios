<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadesAdmin extends Model
{
    //
    protected $table = 'unidades_admin';
    protected $primaryKey='id_unidad';
    protected $fillable = ['descripcion_unidad','id_jefe'];

    function  getPersonal()
    {
        return $this->hasMany("App\UnidadesAdmin",'id_jefe','id_personal');

    }
}
