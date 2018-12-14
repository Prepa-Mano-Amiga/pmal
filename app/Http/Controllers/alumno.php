<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\alumnos; 
use App\escuelas;
use App\municipios;
use App\rmedicos;

class alumno extends Controller
{
 	public function altaAlum()
	{	
        $rmedicos = rmedicos::OrderBy('responsable','asc')->get();
        $escuelas = escuelas::OrderBy('nombre','asc')->get();
        $municipios = municipios::OrderBy('nombre','asc')->get();
		$clavesig = alumnos::orderBy('ida','desc')->take(1)->get();
		$idal	  = $clavesig[0]->ida+1;
        return view ('sistema.altaAlumno')
                    ->with('municipios',$municipios)
                    ->with('escuelas',$escuelas)
                    ->with('rmedicos',$rmedicos)
                    ->with('idal',$idal);
    }
    
    //alta Alumno
	public function guardaAlum(Request $request)
	{
		$nombre     = $request->nombre;
        $ap_pat     = $request->ap_pat;
        $ap_mat     = $request->ap_mat;
		$edad       = $request->edad;
		$sexo       = $request->sexo;
        $curp       = $request->curp;
        $email      = $request->email;
        $grado      = $request->grado;
        $semestre   = $request->semestre;
        $telefono   = $request->telefono;
        $calle      = $request->calle;
        $num_int    = $request->num_int;
        $num_ext    = $request->num_ext;
        $colonia    = $request->colonia;
        $localidad  = $request->localidad;
        $cp         = $request->cp;
        $lugar_nac  = $request->lugar_nac;
        $dia        = $request->dia;
        $mes        = $request->mes;
        $año        = $request->año;
        $ciclo_escolar   = $request->ciclo_escolar;
		
		$this->validate($request,[
			'ida'		=>'required|numeric',
            'nombre'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'ap_pat'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'ap_mat'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'edad'		=>'required|integer|min:14|max:25',
            'curp'	    =>'required|regex:/^[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}$/',
            'email'	    =>'required|email',
            'grado'	    =>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'semestre'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'telefono'	=>'required|regex:/^[0-9]{10}$/',
            'calle'	    =>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'num_int'	=>'required|integer',
            'num_ext'	=>'required|integer',
            'colonia'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'localidad'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
			'cp'		=>'required|regex:/^[0-9]{5}$/',
            'lugar_nac'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'dia'		=>'required|regex:/^[0-9]{2}$/|max:31',
            'mes'		=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'año'		=>'required|regex:/^[0-9]{4}$/',
            'ciclo_escolar'		=>'required|regex:/^[0-9]{4}+[-][0-9]{4}$/',
            'act_nac'	=>'image|mimes:jpg,jpeg,png,gif',
            'fich_pago'	=>'image|mimes:jpg,jpeg,png,gif',
            'foto'	=>'image|mimes:jpg,jpeg,png,gif',
            'cert_sec'	=>'image|mimes:jpg,jpeg,png,gif'
		]);
		
		$file	= $request->file('act_nac');
		if($file!=""){
		$ldate	= date('Ymd_His_');
		$img	= $file->getClientOriginalName();
		$img2	= $ldate.$img;
		\Storage::disk('local')->put($img2,\File::get($file));
		}
		else {
			$img2	= 'sin_foto.jpg';
        }
        
        $file	= $request->file('fich_pago');
		if($file!=""){
		$ldate	= date('Ymd_His_');
		$imgf	= $file->getClientOriginalName();
		$imgf2	= $ldate.$imgf;
		\Storage::disk('local')->put($imgf2,\File::get($file));
		}
		else {
			$imgf2	= 'sin_foto.jpg';
        }
        
        $file	= $request->file('foto');
		if($file!=""){
		$ldate	= date('Ymd_His_');
		$imgfo	= $file->getClientOriginalName();
		$imgfo2	= $ldate.$imgfo;
		\Storage::disk('local')->put($imgfo2,\File::get($file));
		}
		else {
			$imgfo2	= 'sin_foto.jpg';
        }
        
        $file	= $request->file('cert_sec');
		if($file!=""){
		$ldate	= date('Ymd_His_');
		$imgc	= $file->getClientOriginalName();
		$imgc2	= $ldate.$imgc;
		\Storage::disk('local')->put($imgc2,\File::get($file));
		}
		else {
			$imgc2	= 'sin_foto.jpg';
		}
		

		$alum	=	new alumnos;
		$alum->ida		    =	$request->ida;
        $alum->nombre	    =	$request->nombre;
        $alum->ap_mat       = $request->ap_mat;
        $alum->ap_pat       = $request->ap_pat;
		$alum->edad	        =	$request->edad;
        $alum->sexo	        =	$request->sexo;
        $alum->curp         = $request->curp;
        $alum->email        = $request->email;
        $alum->grado        = $request->grado;
        $alum->semestre     = $request->semestre;
        $alum->telefono     = $request->telefono;
        $alum->calle        = $request->calle;
        $alum->num_int      = $request->num_int;
        $alum->num_ext      = $request->num_ext;
        $alum->colonia      = $request->colonia;
        $alum->localidad    = $request->localidad;
        $alum->cp		    =	$request->cp;
        $alum->lugar_nac    = $request->lugar_nac;
        $alum->dia          = $request->dia;
        $alum->mes          = $request->mes;
        $alum->año          = $request->año;
        $alum->ciclo_escolar   = $request->ciclo_escolar;
        $alum->ides		    =	$request->ides;
        $alum->idrm		    =	$request->idrm;
        $alum->idm		    =	$request->idm;
        $alum->act_nac	    =	$img2;
        $alum->fich_pago	=	$imgf2;
        $alum->foto	        =	$imgfo2;
        $alum->cert_sec	    =	$imgc2;
		$alum->save();
		 
		$proceso ="ALTA DE ALUMNO";
		$mensaje= "Registro guardado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }

    //consulta Alumno
	public function reportealum(){
		$alumnos=\DB::select("SELECT a.ida,a.nombre,a.ap_pat,a.ap_mat,a.edad,a.sexo,a.curp,a.email,a.grado,a.semestre,a.telefono,a.calle,a.num_int,a.num_ext,
        a.colonia,a.localidad,a.cp,a.lugar_nac,a.dia,a.mes,a.año,a.ciclo_escolar,a.act_nac,a.fich_pago,a.foto,a.cert_sec,a.deleted_at,
        e.nombre AS estado,m.nombre AS municipio,r.responsable AS responsable
        FROM alumnos AS a
        INNER JOIN escuelas AS e ON e.ides = a.ides
        INNER JOIN municipios AS m ON m.idm = a.idm
        INNER JOIN rmedicos AS r ON r.idrm = a.idrm");
		return view ('sistema.reportealumno')->with('alumnos',$alumnos);
    }

    //Elimina logica Alumno
    public function eliminaalum($ida)
	{
		    alumnos::find($ida)->delete();
		    $proceso = "ELIMINAR ALUMNO";
			$mensaje = "El alumno ha sido borrado Correctamente";
            return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }

    //elimina fisica 
    public function efisicaA($ida)
    {
        alumnos::withTrashed()->where('ida',$ida)->forceDelete();
        $proceso = "ELIMINAR ALUMNO";
        $mensaje = "El alumno ha sido borrado Correctamente";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

    }
    
    //Restaura Alumno
	public function restauraalum($ida)
	{
		alumnos::withTrashed()->where('ida',$ida)->restore();
		$proceso = "RESTAURACION DE ALUMNO";	
	    $mensaje="Registro restaurado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);	
    }
    
    //modifica Alumno
	public function modificaAl($ida){
		$alum = alumnos::where('ida','=',$ida)->get();
		$idrm = $alum[0]->idrm;
		$rm = rmedicos::where('idrm','=',$idrm)->get();
        $allrm = rmedicos::where('idrm','!=',$idrm)->get();
        $ides = $alum[0]->ides;
        $esc = escuelas::where('ides','=',$ides)->get();
        $allesc = escuelas::where('ides','!=',$ides)->get();
        $idm = $alum[0]->idm;
        $mun = municipios::where('idm','=',$idm)->get();
        $allmun = municipios::where('idm','!=',$idm)->get();
		return view('sistema.guardaAlum')->with('alum',$alum[0])
                                         ->with('idrm',$idrm)
                                         ->with('rm',$rm[0]->responsable)
                                         ->with('allrm',$allrm)
                                         ->with('ides',$ides)
                                         ->with('esc',$esc[0]->nombre)
                                         ->with('allesc',$allesc)
                                         ->with('idm',$idm)
                                         ->with('mun',$mun[0]->nombre)
                                         ->with('allmun',$allmun);
    }
    //guarda datos modificacion
    public function editAlum(Request $request){
        $ida 	    = $request->ida;
		$nombre     = $request->nombre;
        $ap_pat     = $request->ap_pat;
        $ap_mat     = $request->ap_mat;
		$edad       = $request->edad;
		$sexo       = $request->sexo;
        $curp       = $request->curp;
        $email      = $request->email;
        $grado      = $request->grado;
        $semestre   = $request->semestre;
        $telefono   = $request->telefono;
        $calle      = $request->calle;
        $num_int    = $request->num_int;
        $num_ext    = $request->num_ext;
        $colonia    = $request->colonia;
        $localidad  = $request->localidad;
        $cp         = $request->cp;
        $lugar_nac  = $request->lugar_nac;
        $dia        = $request->dia;
        $mes        = $request->mes;
        $año        = $request->año;
        $ciclo_escolar   = $request->ciclo_escolar;
		//nunca se reciben los archivos
		
		$this->validate($request,[
			'ida'		=>'required|numeric',
            'nombre'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'ap_pat'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'ap_mat'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'edad'		=>'required|integer|min:14|max:25',
            'curp'	    =>'required|regex:/^[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}$/',
            'email'	    =>'required|email',
            'grado'	    =>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'semestre'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'telefono'	=>'regex:/^[0-9]{13}$/',
            'calle'	    =>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'num_int'	=>'required|integer',
            'num_ext'	=>'required|integer',
            'colonia'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'localidad'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
			'cp'		=>'required|regex:/^[0-9]{5}$/',
            'lugar_nac'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'dia'		=>'required|regex:/^[0-9]{2}$/|max:31',
            'mes'		=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
            'año'		=>'required|regex:/^[0-9]{4}$/',
            'ciclo_escolar'		=>'required|regex:/^[0-9]{4}+[-][0-9]{4}$/',
            'act_nac'	=>'image|mimes:jpg,jpeg,png,gif',
            'fich_pago'	=>'image|mimes:jpg,jpeg,png,gif',
            'foto'	=>'image|mimes:jpg,jpeg,png,gif',
            'cert_sec'	=>'image|mimes:jpg,jpeg,png,gif'
		]);
        // recibe acta de nacimiento
        $file	= $request->file('act_nac');
		if($file!=""){
		$ldate	= date('Ymd_His_');
		$img	= $file->getClientOriginalName();
		$img2	= $ldate.$img;
		\Storage::disk('local')->put($img2,\File::get($file));
		}
        //recibe ficha de pago
        $filef	= $request->file('fich_pago');
		if($filef!=""){
		$ldate	= date('Ymd_His_');
		$imgf	= $filef->getClientOriginalName();
		$imgf2	= $ldate.$imgf;
		\Storage::disk('local')->put($imgf2,\File::get($filef));
        }
        //recibe foto     
        $filefo	= $request->file('foto');
		if($filefo!=""){
		$ldate	= date('Ymd_His_');
		$imgfo	= $filefo->getClientOriginalName();
		$imgfo2	= $ldate.$imgfo;
		\Storage::disk('local')->put($imgfo2,\File::get($filefo));
        }
        //recibe certificado secundaria
        $filesec	= $request->file('cert_sec');
		if($filesec!=""){
		$ldate	= date('Ymd_His_');
		$imgc	= $filesec->getClientOriginalName();
		$imgc2	= $ldate.$imgc;
		\Storage::disk('local')->put($imgc2,\File::get($filesec));
        }
        
        $alum	            =alumnos::find($ida);
		$alum->ida		    = $request->ida;
        $alum->nombre	    = $request->nombre;
        $alum->ap_mat       = $request->ap_mat;
        $alum->ap_pat       = $request->ap_pat;
		$alum->edad	        = $request->edad;
        $alum->sexo	        = $request->sexo;
        $alum->curp         = $request->curp;
        $alum->email        = $request->email;
        $alum->grado        = $request->grado;
        $alum->semestre     = $request->semestre;
        $alum->telefono     = $request->telefono;
        $alum->calle        = $request->calle;
        $alum->num_int      = $request->num_int;
        $alum->num_ext      = $request->num_ext;
        $alum->colonia      = $request->colonia;
        $alum->localidad    = $request->localidad;
        $alum->cp		    = $request->cp;
        $alum->lugar_nac    = $request->lugar_nac;
        $alum->dia          = $request->dia;
        $alum->mes          = $request->mes;
        $alum->año          = $request->año;
        $alum->ciclo_escolar   = $request->ciclo_escolar;
        $alum->ides		    = $request->ides;
        $alum->idrm		    = $request->idrm;
        $alum->idm		    = $request->idm;
        if($file!=''){
            $alum->act_nac  	=	$img2;
           
        }
        if($filef!=''){
            $alum->fich_pago	=	$imgf2;
           
        }
        if($filefo!=''){
            $alum->foto	        =	$imgfo2;
           
        }
        if($filesec!=''){
            $alum->cert_sec	    =	$imgc2;
           
		}
        $alum->save();
        
		$proceso ="MODIFICACION DE ALUMNO";
		$mensaje= "Registro modificado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}

}
