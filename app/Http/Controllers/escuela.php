<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\municipios;
use App\escuelas;

class escuela extends Controller
{
    public function altaescuela()
	{	
		$municipios = municipios::OrderBy('nombre','Asc')->get();
		$clavesig 	= escuelas::orderBy('ides','desc')->take(1)->get();
		$idec	  	= $clavesig[0]->ides+1;
		return view ('sistema.altaescuela')->with('municipios',$municipios)->with('idec',$idec);
    }
    
    public function guardaescuela(Request $request)
		{
			$nombre	        = $request->nombre;
			$ides 		    = $request->ides;
			$localidad 	    = $request->localidad;
			$sostenimiento 	= $request->sostenimiento;
			$fec_engre		= $request->fec_engre;
			$promedio		= $request->promedio;
			$clave_sector 	= $request->clave_sector;
			//nunca se reciben los archivos
			
			$this->validate($request,[
				'ides'		    =>'required|numeric',
				'nombre'	    =>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'localidad'	    =>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'sostenimiento'	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'promedio'	    =>'required',['regex:/^[0-9]{2}+[.][0-9]{2}$/'],
				'clave_sector'	=>'required|min:8|max:32',
			]);
			

			$escul	=	new escuelas;
			$escul->ides		    =	$request->ides;
			$escul->nombre	        =	$request->nombre;
			$escul->localidad	    =	$request->localidad;
			$escul->sostenimiento	=	$request->sostenimiento;
			$escul->fec_engre	    =	$request->fec_engre;
			$escul->promedio	    =	$request->promedio;
            $escul->clave_sector    =	$request->clave_sector;
            $escul->idm		        =	$request->idm;
			$escul->save();
			
			$proceso ="Alta de Escuela";
			$mensaje= "Registro guardado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}

		public function reporteEscuelas(){
			$escuelas = escuelas::orderBy('nombre','asc')->get();
			return view ('sistema.reporteEscuelas')->with('escuelas',$escuelas);
		}
}