<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\estados;
use App\municipios;

class municipio extends Controller
{
 	public function altamun()
	{	
		$estados = estados::OrderBy('nombre','asc')->get();
		$clavesig = municipios::orderBy('idm','desc')->take(1)->get();
		$idmun	  = $clavesig[0]->idm+1;
		return view ('sistema.altamunicipio')->with('estados',$estados)->with('idmun',$idmun);
	}

	//Alta municipios
	public function guardamun(Request $request)
		{
			$idm 		= $request->idm;
			$nombre		= $request->nombre;

			$this->validate($request,[
				'idm'		=>'required|numeric',
				'nombre'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'

			]);

			$mun	=	new municipios;
			$mun->idm		=	$request->idm;
			$mun->nombre	=	$request->nombre;
			$mun->ide		=	$request->ide;
			$mun->save();
			
			$proceso ="ALTA DE Municipio";
			$mensaje= "Registro guardado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}

	//consulta maestro
	public function reportemun(){
		$municipio = municipios::orderBy('nombre','asc')->get();
		return view ('sistema.reportemunicipio')->with('municipio',$municipio);
	}
}