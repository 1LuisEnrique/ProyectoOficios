<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesiones extends Model
{
    //
    protected $table = 'Profesiones';
    protected $primaryKey='id_profesion';
    protected $fillable = ['descripcion'];
}
