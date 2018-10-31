<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\municipios;
use App\alumnos;
use App\tutores;

class tutor extends Controller
{
    public function altaTutor()
	{	
		$municipios = municipios::OrderBy('nombre','Asc')->get();
		$alumnos 	= alumnos::OrderBy('nombre','Asc')->get();
		$clavesig 	= tutores::orderBy('idt','desc')->take(1)->get();
		$idtu	  	= $clavesig[0]->idt+1;
		return view ('sistema.altaTutor')->with('municipios',$municipios)->with('alumnos',$alumnos)->with('idtu',$idtu);
    }
    
    public function guardaTutor(Request $request)
		{
			$nombre	        = $request->nombre;
			$idt 		    = $request->idt;
			$ap_pat 	    = $request->ap_pat;
			$ap_mat 		= $request->ap_mat;
			$fec_nac		= $request->fec_nac;
			$ocupacion		= $request->ocupacion;
			$compañia 		= $request->compañia;
			$curp	        = $request->curp;
			$grado_estudios	= $request->grado_estudios;
			$email	        = $request->email;
			$calle	        = $request->calle;
			$num_int	    = $request->num_int;
			$num_ext	    = $request->num_ext;
			$colonia	    = $request->colonia;
			$localidad	    = $request->localidad;
			$cp	        	= $request->cp;
			//nunca se reciben los archivos
			
			$this->validate($request,[
				'idt'		    	=>'required|numeric',
				'nombre'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'ap_pat'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'ap_mat'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'ocupacion'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'compañia'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'curp'				=>'required|min:8|max:32',
				'grado_estudios'	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'email'				=>'required|email',
				'calle'		    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'num_int'	    	=>'required|numeric',
				'num_ext'	    	=>'required|numeric',
				'colonia'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'localidad'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'cp'        		=> 'required',['regex:/^[0-9]{5}$/'],
			]);
			

			$tut	=	new tutores;
			$tut	->idt		    	=	$request->idt;
			$tut	->nombre	    	=	$request->nombre;
			$tut	->ap_pat	    	=	$request->ap_pat;
			$tut	->ap_mat	    	=	$request->ap_mat;
			$tut	->ocupacion	    	=	$request->ocupacion;
			$tut	->compañia			=	$request->compañia;
			$tut	->curp	    		=	$request->curp;
			$tut	->grado_estudios	=	$request->grado_estudios;
			$tut	->email  			=	$request->email;
			$tut	->calle  			=	$request->calle;
			$tut	->num_int  			=	$request->num_int;
			$tut	->num_ext  			=	$request->num_ext;
			$tut	->colonia  			=	$request->colonia;
			$tut	->localidad  		=	$request->localidad;
			$tut	->cp  				=	$request->cp;
			$tut	->idm 	 			=	$request->idm;
            $tut	->ida		    	=	$request->ida;
			$tut	->save();
			
			$proceso ="Alta de Tutor";
			$mensaje= "Registro guardado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}

		public function reporteTutor(){
			$tutores=\DB::select("SELECT t.idt,t.nombre,t.ap_pat,t.ap_mat,t.fec_nac,t.ocupacion,t.compañia,t.curp,t.grado_estudios,t.email,t.calle,t.num_int,t.num_ext,
			t.colonia,t.localidad,t.cp,t.deleted_at,
			m.nombre AS municipio,a.nombre AS alumno
			FROM tutores AS t
			INNER JOIN municipios AS m ON t.idm = m.idm
			INNER JOIN alumnos AS a ON t.ida = a.ida");
			return view ('sistema.reporteTutores')->with('tutores',$tutores);
		}
		public function eliminatutor($idt)
	{
		    tutores::find($idt)->delete();
		    $proceso = "ELIMINAR TUTOR";
			$mensaje = "El Tutor ha sido borrado Correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
	public function restauratutor($idt)
	{
		tutores::withTrashed()->where('idt',$idt)->restore();
		$proceso = "RESTAURACION DE TUTOR";	
	    $mensaje="Registro restaurado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);	
	}
}