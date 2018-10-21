<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maestros extends Model
{
    protected $primaryKey = 'idm';
    protected $fillable   = ['idm', 'nombre', 'edad', 'cp', 'sexo', 'beca', 'activo', 'idc'];
}
