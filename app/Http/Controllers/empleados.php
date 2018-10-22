<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class empleados extends Controller
{
 	public function altaempleado()
    {	
		  $clavequesigue = empleados::withTrashed()->orderBy('ide','desc')
								->take(1)
								->get();
           $idms = $clavequesigue[0]->ide+1;
	 					
							
		//return $carreras;
	   return view ("sistema.altamaestro")
	   ->with('carreras',$carreras)
	   ->with('idms',$idms);
    }	
    public function guardaempleado(Request $request)
    {
		$nombre = $request->nombre;
		$idem = $request->idem;
		$appat= $request->appat;
		$apmat = $request->apmat;
		$turno = $request->turno;
		$correo = $request->correo;
		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		
		$this->validate($request,[
	     'ide'=>'required|numeric',
         'nombre'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'appat'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'apmat'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'turno'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
		 'correo'=>'required|',
	     'telefono'=>'required|numeric'
	     ]);
		 	 
		    $maest = new maestros;
			$maest->ide = $request->ide;
			$maest->nombre = $request->nombre;
			$maest->appat =$request->appat;
			$maest->apmat = $request->apmat;
			$maest->turno =$request->turno;
			$maest->correo =$request->correo;
			$maest->telefono=$request->telefono;
            $maest->save();
            
		$proceso = "ALTA DE Empleado";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
    }	
}