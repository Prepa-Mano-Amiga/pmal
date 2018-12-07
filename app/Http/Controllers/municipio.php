<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\estados;
use App\municipios;
use App\DB;
use Session;

class municipio extends Controller
{
 	public function altamun()
	{	
		$estados = estados::OrderBy('nombre','asc')->get();
		$clavesig = municipios::withTrashed()->orderBy('idm','desc')->take(1)->get();
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
			
			$proceso ="Alta Municipio";
			$mensaje= "Registro guardado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}

	//consulta Municipio
	public function reportemun(){
	$municipio=\DB::select("SELECT m.idm,m.nombre,e.nombre as estad,m.deleted_at
	FROM municipios AS m
	INNER JOIN estados AS e ON e.ide = m.ide");
		return view ('sistema.reportemunicipio')->with('municipio',$municipio);
	}
	//elimina municipio
	public function eliminamun($idm)
	{
		    municipios::find($idm)->delete();
		    $proceso = "Desactivar Municipio";
			$mensaje = "El municipio ha sido desactivado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
	//Eliminacion fisica municipio
	public function efisicamun($idm)
    {
        municipios::withTrashed()->where('idm',$idm)->forceDelete();
        $proceso = "Eliminar Municipio";
        $mensaje = "El alumno ha sido borrado Correctamente";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

	}
	
	//restaura municipio
	public function restauramun($idm)
	{
		municipios::withTrashed()->where('idm',$idm)->restore();
		$proceso 	= "Restauración de Municipio";	
	    $mensaje	="Registro restaurado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);	
	}
	//modifica municipio
	public function modificamun($idm)
	{
		$mun = municipios::where('idm','=',$idm)->get();
		$ide = $mun[0]->ide;
		$estados = estados::where('ide','=',$ide)->get();
		$allestados = estados::where('ide','!=',$ide)->get();
		return view('sistema.guardamunicipio')->with('mun',$mun[0])
											->with('ide',$ide)
											->with('estados',$estados[0]->nombre)
											->with('allestados',$allestados);
	}
	public function editmun(Request $request)
	{
		$idm 		= $request->idm;
		$nombre		= $request->nombre;
		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		$this->validate($request,[
			'idm'		=>'required|numeric',
			'nombre'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'
	     ]);
		 
		    $mun = municipios::find($idm);
			$mun->idm		=	$request->idm;
			$mun->nombre	=	$request->nombre;
			$mun->ide		=	$request->ide;
			$mun->save();
		$proceso = "Modificación de Municipio";	
	    $mensaje="Registro modificado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
}