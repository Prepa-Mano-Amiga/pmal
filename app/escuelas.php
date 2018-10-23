<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class escuelas extends Model{
    use softDeletes;
    protected $primaryKey   =   'ides';
<<<<<<< HEAD
    protected $fillable     =   ['ides','nombre','localidad','sostenimiento','fech_egreso','promedio','clave_sector','idm'];
=======
    protected $fillable     =   ['ides','nombre','localidad','sostenimiento','fec_engre','promedio','clave_sector','idm'];
>>>>>>> 3f4725755ea69d644e5d3bc6b730fcee4241d7b5
    protected $date=['deleted_at'];
    
}