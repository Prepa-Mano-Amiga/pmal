<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class usuarios extends Model{
    use softDeletes;
    protected $primaryKey   =   'idu';
    protected $fillable     =   ['idu','usuario','password','tipo_usu','nombre','ap_pat','ap_mat'];
    protected $date=['deleted_at'];
    
}