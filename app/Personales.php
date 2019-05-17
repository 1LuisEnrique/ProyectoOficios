<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personales extends Model
{
    //
    protected $table='Personales';
    protected $primaryKey='id_personal';
    protected $fillable=['nombre','ap','am','clave_personal','id_profesion'];

    function getProfesion()
    {
        return $this->hasMany("App\Profesiones", 'id_profesion', 'id_profesion');
    }
}
