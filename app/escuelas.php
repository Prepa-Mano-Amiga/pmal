<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class escuelas extends Model{
    use softDeletes;
    protected $primaryKey   =   'ides';
    protected $fillable     =   ['ides','nombre','localidad','sostenimiento','fech_egreso','promedio','clave_sector','idm'];
    protected $date=['deleted_at'];
    
}