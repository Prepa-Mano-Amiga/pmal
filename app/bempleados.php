<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class bempleados extends Model{
    use SoftDeletes;
    protected $primaryKey   =   'idbe';
    protected $fillable     =   ['idbe','nombre','ap_pat','ap_mat','turno','correo','telefono'];
    protected $date=['deleted_at'];
    
}