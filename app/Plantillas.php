<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantillas extends Model
{
    //
    protected $table = 'JefesPersonales';
    protected $primaryKey='id_jefepersonal';
    protected $fillable = ['jefe','id_personal'];
}
