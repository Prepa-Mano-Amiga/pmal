<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\rmedicos;
use App\DB;

class medico extends Controller
{
 	public function altaregmedicos()
    {	
		  $clavesig = rmedicos::orderBy('idrm','desc')->take(1)->get();
           $idrm = $clavesig[0]->idrm+1;
	   return view ('sistema.altaregmedicos')->with('idrm',$idrm);
	 
    }	
    public function guardaregmedico(Request $request)
    {
		$responsable = $request->responsable;
		$idrm = $request->idrm;
		$num_hermanos= $request->num_hermanos;
		$nom_hermanos = $request->nom_hermanos;
		$edad = $request->edad;
        $tipo_sangre = $request->tipo_sangre;
        $contacto1 = $request->contacto1;
        $tel1 = $request->tel1;
        $contacto2 = $request->contacto2;
        $tel2 = $request->tel2;
        $contacto3 = $request->contacto3;
        $tel3 = $request->tel3;
		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		
		$this->validate($request,[
         'idrm'=>'required|numeric',
<<<<<<< HEAD
         'responsable'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'num_hermanos'=>'required|integer|min:1|max:6',
         'nom_hermanos'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'edad'=>'required|numeric',
         'tipo_sangre'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'contacto1'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'tel1'=>'required|regex:/^[0-9]{13}$/',
         'contacto2'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'tel2'=>'required|regex:/^[0-9]{13}$/',
         'contacto3'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
	     'tel3'=>'required|regex:/^[0-9]{13}$/'
=======
         'responsable'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
         'num_hermanos'=>'required|numeric',
         'nom_hermanos'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
         'edad'=>'required|numeric',
         'tipo_sangre'=>'required|regex:/^[A,B,O][+,-]$/',
         'contacto1'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
         'tel1'=>'required|regex:/^[0-9]{10}/',
         'contacto2'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
         'tel2'=>'required|regex:/^[0-9]{10}/',
         'contacto3'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
	     'tel3'=>'required|regex:/^[0-9]{10}/'
>>>>>>> origin/master
         
	     ]);
		 	 
		    $med = new rmedicos;
			$med->idrm = $request->idrm;
			$med->responsable = $request->responsable;
			$med->num_hermanos =$request->num_hermanos;
			$med->nom_hermanos = $request->nom_hermanos;
			$med->edad =$request->edad;
			$med->tipo_sangre =$request->tipo_sangre;
            $med->contacto1=$request->contacto1;
            $med->tel1=$request->tel1;
            $med->contacto2=$request->contacto2;
            $med->tel2=$request->tel2;
            $med->contacto3=$request->contacto3;
            $med->tel3=$request->tel3;
            $med->save();
            
		$proceso = "Alta De Registro Medico";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
    }	
    public function reporteregmedico(){
		$rmedico=\DB::select("SELECT r.idrm,r.responsable,r.num_hermanos,r.nom_hermanos,r.edad,r.tipo_sangre,
        r.contacto1,r.tel1,r.contacto2,r.tel2,r.contacto3,r.tel3,r.deleted_at
        FROM rmedicos AS r");
		return view ('sistema.reporteregmedico')->with('rmedico',$rmedico);
    }
    public function eliminaregmedico($idrm)
    {
        rmedicos::find($idrm)->delete();
        $proceso = "ELIMINAR Registro Medico";
        $mensaje = "El Registro Medico ha sido inhabilitado Correctamente";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }
    public function efisicamed($idrm)
    {
        rmedicos::withTrashed()->where('idrm',$idrm)->forceDelete();
        $proceso = "ELIMINAR REGISTROS MEDICOS";
        $mensaje = "El registro medico ha sido borrado Correctamente";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

    }
    public function restauraregmedico($idrm)
    {
    rmedicos::withTrashed()->where('idrm',$idrm)->restore();
    $proceso = "RESTAURACION DE REGISTRO MEDICO";	
    $mensaje="Registro restaurado correctamente";
    return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);	
    }  
    public function modificaregmedico($idrm)
	{
		$rmedico = rmedicos::where('idrm','=',$idrm)->get();
		
		$idrm = $rmedico[0]->idrm;
		return view('sistema.guardaregmedico')
	                             ->with('rmedicos',$rmedico[0])
								 ->with('idrm',$idrm);
								
	}
	public function editaregmedico(Request $request)
	{
		$responsable = $request->responsable;
		$idrm = $request->idrm;
		$num_hermanos= $request->num_hermanos;
		$nom_hermanos = $request->nom_hermanos;
		$edad = $request->edad;
        $tipo_sangre = $request->tipo_sangre;
        $contacto1 = $request->contacto1;
        $tel1 = $request->tel1;
        $contacto2 = $request->contacto2;
        $tel2 = $request->tel2;
        $contacto3 = $request->contacto3;
        $tel3 = $request->tel3;
		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		
		$this->validate($request,[
<<<<<<< HEAD
         'idrm'=>'required|numeric',
         'responsable'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'num_hermanos'=>'required|integer|min:1|max:6',
         'nom_hermanos'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'edad'=>'required|numeric',
         'tipo_sangre'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'contacto1'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'tel1'=>'required|regex:/^[0-9]{10}$/',
         'contacto2'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'tel2'=>'required|regex:/^[0-9]{10}$/',
         'contacto3'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
	     'tel3'=>'required|regex:/^[0-9]{10}$/'
=======
          'idrm'=>'required|numeric',
         'responsable'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
         'num_hermanos'=>'required|numeric',
         'nom_hermanos'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
         'edad'=>'required|numeric',
         'tipo_sangre'=>'required|regex:/^[A,B,O][+,-]$/',
         'contacto1'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
         'tel1'=>'required|regex:/^[0-9]{10}/',
         'contacto2'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
         'tel2'=>'required|regex:/^[0-9]{10}/',
         'contacto3'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
	     'tel3'=>'required|regex:/^[0-9]{10}/'
>>>>>>> origin/master
         
	     ]);
		 	 
		    $med = rmedicos::find($idrm);
			$med->idrm = $request->idrm;
			$med->responsable = $request->responsable;
			$med->num_hermanos =$request->num_hermanos;
			$med->nom_hermanos = $request->nom_hermanos;
			$med->edad =$request->edad;
			$med->tipo_sangre =$request->tipo_sangre;
            $med->contacto1=$request->contacto1;
            $med->tel1=$request->tel1;
            $med->contacto2=$request->contacto2;
            $med->tel2=$request->tel2;
            $med->contacto3=$request->contacto3;
            $med->tel3=$request->tel3;
            $med->save();
            
		$proceso = "Modificación De Registro Medico";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)->with('mensaje',$mensaje);
	} 
}