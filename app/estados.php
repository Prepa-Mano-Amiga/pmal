<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estados extends Model{
    use SoftDeletes;
    protected $primaryKey   =   'ide';
    protected $fillable     =   ['ide','nombre'];
    protected $date=['deleted_at'];
    
}