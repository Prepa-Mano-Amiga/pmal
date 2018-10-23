<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class tutores extends Model{
    use softDeletes;
    protected $primaryKey   =   'idt';
    protected $fillable     =   ['idt','nombre','ap_pat','ap_mat','fec_nac','ocupacion','compañia','curp','grado_estudios','email',
                                 'calle','num_int','num_ext','colonia','localidad','cp','idm','ida'];
    protected $date=['deleted_at'];
    
}