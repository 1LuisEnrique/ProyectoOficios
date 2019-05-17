<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origenes extends Model
{
    //
    protected $table = 'Origenes';
    protected $primaryKey='id_origen';
    protected $fillable = ['descripcion'];
}
