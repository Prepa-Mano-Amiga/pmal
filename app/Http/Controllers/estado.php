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
		$estados=\DB::select("SELECT e.ide,e.nombre,e.deleted_at
		FROM estados AS e");
		return view ('sistema.reporteEstados')->with('estados',$estados);
	}
	public function eliminaestado($ide)
	{
		    estados::find($ide)->delete();
		    $proceso = "ELIMINAR Estado";
			$mensaje = "El estado ha sido borrado Correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
	public function restauraestado($ide)
	{
		estados::withTrashed()->where('ide',$ide)->restore();
		$proceso = "RESTAURACION DE Estado";	
	    $mensaje="Registro restaurado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);	
	}

	public function modificaEst($ide){
        $estado = estados::where('ide','=',$ide)->get();
        return view('sistema.editaEstado')
                                            ->with('estado',$estado[0]);
	}
	
	public function editaEstado(Request $request){
        $nombre = $request->nombre;
        $ide    = $request->ide;

        $this->validate($request,[
            'nombre'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
        ]);
        
            $est = estados::find($ide);
            $est->ide     =   $request->ide;
			$est->nombre  =   $request->nombre;
			$est->save();
            
            $proceso = "Modificar Estado";
            $mensaje = "Registro Modificado Correctamente";
            return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }

}