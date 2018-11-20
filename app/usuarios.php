<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarios extends Model{
    use SoftDeletes;
    protected $primaryKey   =   'idu';
    protected $fillable     =   ['idu','usuario','password','tipo_usu','nombre','ap_pat','ap_mat'];
    protected $date=['deleted_at'];
    
}