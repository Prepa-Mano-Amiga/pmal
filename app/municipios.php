<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class municipios extends Model{
    use SoftDeletes;
    protected $primaryKey   =   'idm';
    protected $fillable     =   ['idm','nombre','ide'];
    protected $date=['deleted_at'];
    
}