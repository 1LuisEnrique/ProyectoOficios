<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    //
    protected $table = 'Estados';
    protected $primaryKey='id_estado';
    protected $fillable = ['descripcion'];
}
