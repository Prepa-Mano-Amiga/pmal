<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class alumnos extends Model{
    use SoftDeletes;
    protected $primaryKey   =   'ida';
    protected $fillable     =   ['ida','nombre','ap_pat','ap_mat','edad','sexo','curp','email','grado','semestre','telefono','calle',
                                 'num_int','num_ext','colonia','localidad','cp','lugar_nac','dia','mes','año','ciclo_escolar','act_nac',
                                 'fich_pago','foto','cert_sec','ides','idrm','idm'];
    protected $date=['deleted_at'];
    
}  