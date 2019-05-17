<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinos extends Model
{
    //
    protected $table = 'Destinos';
    protected $primaryKey='id_destino';
    protected $fillable = ['descripcion'];
}
