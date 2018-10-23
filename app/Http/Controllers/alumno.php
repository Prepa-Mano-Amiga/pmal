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
            'nombre'	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'ap_pat'	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'ap_mat'	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'edad'		=>'required|integer|min:14|max:25',
            'curp'	    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú][0-9]+$/'],
            'email'	    =>'required|email',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'grado'	    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'semestre'	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'telefono'	=>'required',['regex:/^[0-9]{13}$/'],
            'calle'	    =>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'num_int'	=>'required|integer',
            'num_ext'	=>'required|integer',
            'colonia'	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'localidad'	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
			'cp'		=>'required',['regex:/^[0-9]{5}$/'],
            'lugar_nac'	=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'dia'		=>'required',['regex:/^[0-9]{2}$/'],
            'mes'		=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
            'año'		=>'required',['regex:/^[0-9]{4}$/'],
            'ciclo_escolar'		=>'required',['regex:/^[0-9]{4}+[-][0-9]{4}$/'],
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
		 
		$proceso ="ALTA DE Alumno";
		$mensaje= "Registro guardado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }

    //consulta Alumno
	public function reportealum(){
		$alumnos = alumnos::orderBy('nombre','asc')->get();
		return view ('sistema.reportealumno')->with('alumnos',$alumnos);
	}

}