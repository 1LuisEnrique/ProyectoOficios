<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personales extends Model
{
    //
    protected $table='Personal';
    protected $primaryKey='id_personal';
    protected $fillable=['nombre','ap','am','clave_personal','profesion'];

}
