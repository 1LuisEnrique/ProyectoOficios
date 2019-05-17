<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    //
    protected $table = 'Marcas';
    protected $primaryKey='id_marca';
    protected $fillable = ['descripcion'];
}
