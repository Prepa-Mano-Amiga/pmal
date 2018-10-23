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
			$cp	        = $request->cp;
			//nunca se reciben los archivos
			
			$this->validate($request,[
				'idt'		    	=>'required|numeric',
				'nombre'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'ap_pat'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'ap_mat'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'ocupacion'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'compañia'	    	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'curp'				=>'required|min:8|max:32',
				'grado_estudios'	=>'required|numeric',
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
			
			$proceso ="Alta de Escuela";
			$mensaje= "Registro guardado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}

		public function reporteEscuelas(){
			$escuelas = escuelas::orderBy('nombre','asc')->get();
			return view ('sistema.reporteEscuelas')->with('escuelas',$escuelas);
		}
}