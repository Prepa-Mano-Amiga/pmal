<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\bempleados;

class empleado extends Controller
{
 	public function altaempleado()
    {	
		  $clavesig = bempleados::orderBy('idbe','desc')->take(1)->get();
           $idbe = $clavesig[0]->idbe+1;
	   return view ('sistema.altaempleado')->with('idbe',$idbe);
	 
    }	
    public function guardaempleado(Request $request)
    {
		$nombre = $request->nombre;
		$idbe = $request->idbe;
		$ap_pat= $request->ap_pat;
		$ap_mat = $request->ap_mat;
		$turno = $request->turno;
		$correo = $request->correo;
		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		
		$this->validate($request,[
	     'idbe'=>'required|numeric',
         'nombre'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'ap_pat'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'ap_mat'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'turno'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
		 'correo'=>'required|',
	     'telefono'=>'required|numeric'
	     ]);
		 	 
		    $emple = new bempleados;
			$emple->idbe = $request->idbe;
			$emple->nombre = $request->nombre;
			$emple->ap_pat =$request->ap_pat;
			$emple->ap_mat = $request->ap_mat;
			$emple->turno =$request->turno;
			$emple->correo =$request->correo;
			$emple->telefono=$request->telefono;
            $emple->save();
            
		$proceso = "ALTA DE Empleado";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
    }	
    public function reporteempleado(){
		$empleado = bempleados::orderBy('nombre','asc')->get();
		return view ('sistema.reporteempleados')->with('empleado',$empleado);
	}
}