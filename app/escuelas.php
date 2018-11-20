<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class escuelas extends Model{
    use SoftDeletes;
    protected $primaryKey   =   'ides';
    protected $fillable     =   ['ides','nombre','localidad','sostenimiento','fec_engre','promedio','clave_sector','idm'];
    protected $date=['deleted_at'];
    
}