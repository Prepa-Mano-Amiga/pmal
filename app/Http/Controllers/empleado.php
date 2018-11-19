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
		 'correo'=>'required|email',
	     'telefono'=>'required|regex:/^[0-9]{10}$/'
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
            
		$proceso = "ALTA DE EMPLEADO";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
    }	
    public function reporteempleado(){
		$empleado=\DB::select("SELECT b.idbe,b.nombre,b.ap_pat,b.ap_mat,b.turno,b.correo,b.telefono,b.deleted_at
		FROM bempleados AS b");
		return view ('sistema.reporteempleados')->with('empleado',$empleado);
	}
	public function eliminaempleado($idbe)
	{
		    bempleados::find($idbe)->delete();
		    $proceso = "ELIMINAR Empleado";
			$mensaje = "El empleado ha sido borrado Correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
	public function restauraempleado($idbe)
	{
		bempleados::withTrashed()->where('idbe',$idbe)->restore();
		$proceso = "RESTAURACION DE EMPLEADO";	
	    $mensaje="Registro restaurado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);	
	}
	public function modificaempleado($idbe)
	{

		
		$bempleado = bempleados::where('idbe','=',$idbe)->get();
		$idbe = $bempleado[0]->idbe;
		return view('sistema.guardaempleado')->with('bempleados',$bempleado[0])->with('idbe',$idbe);					
	}
	public function editaempleado(Request $request)
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
		 'correo'=>'required|email',
	     'telefono'=>'required|regex:/^[0-9]{13}$/'
	     ]);
		 	 
		    $emple = bempleados::find($idbe);
			$emple->idbe = $request->idbe;
			$emple->nombre = $request->nombre;
			$emple->ap_pat =$request->ap_pat;
			$emple->ap_mat = $request->ap_mat;
			$emple->turno =$request->turno;
			$emple->correo =$request->correo;
			$emple->telefono=$request->telefono;
            $emple->save();
            
		$proceso = "MODIFICACION DE EMPLEADO";	
	    $mensaje="Registro modificado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
}