<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class libros extends Model{
    use softDeletes;
    protected $primaryKey   =   'idl';
    protected $fillable     =   ['idl','nombre','autor','clasificacion','existencias','codigo','disponible'];
    protected $date=['deleted_at'];
    
}