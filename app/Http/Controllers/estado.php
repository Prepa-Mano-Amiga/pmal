<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\estados;

class estado extends Controller
{
 	public function altaestado()
	{	
		$clavesig = estados::orderBy('ide','desc')->take(1)->get();
		$idest	  = $clavesig[0]->ide+1;
		return view ('sistema.altaestado')->with('idest',$idest);
	}

	public function guardaestado(Request $request)
		{
			$ide 		= $request->ide;
			$nombre		= $request->nombre;
			
			$this->validate($request,[
				'ide'		=>'required|numeric',
				'nombre'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',

			]);

			$est	=	new estados;
			$est->ide		=	$request->idu;
			$est->nombre	=	$request->nombre;
			$est->save();
			
			$proceso ="ALTA DE ESTADO";
			$mensaje= "Registro guardado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}

	//consulta Estado
	public function reporteEstado(){
		$estados = estados::orderBy('nombre','asc')->get();
		return view ('sistema.reporteEstados')->with('estados',$estados);
	}
	
}