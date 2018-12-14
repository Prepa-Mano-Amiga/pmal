<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class libros extends Model{
    use SoftDeletes;
    protected $primaryKey   =   'idl';
    protected $fillable     =   ['idl','nombre','autor','clasificacion','existencias','codigo','disponible'];
    protected $date=['deleted_at'];
    
}