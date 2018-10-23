<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class rmedicos extends Model{
    use softDeletes;
    protected $primaryKey   =   'idrm';
    protected $fillable     =   ['idrm','responsable','num_hermanos','nom_hermanos','edad','tipo_sangre','contacto1','tel1','contacto2',
                                 'tel2','contacto3','tel3'];
    protected $date=['deleted_at'];
    
}