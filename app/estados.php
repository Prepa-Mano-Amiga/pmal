<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class estados extends Model{
    use softDeletes;
    protected $primaryKey   =   'ide';
    protected $fillable     =   ['ide','nombre'];
    protected $date=['deleted_at'];
    
}