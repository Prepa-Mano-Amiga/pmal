<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\libros;

class libro extends Controller
{
 	public function altalibro()
    {	
		  $clavesig = libros::orderBy('idl','desc')->take(1)->get();
           $idl = $clavesig[0]->idl+1;
	   return view ('sistema.altalibro')->with('idl',$idl);
	 
    }	
    public function guardalibro(Request $request)
    {
		$nombre = $request->nombre;
		$idl = $request->idl;
		$autor= $request->autor;
		$clasificacion = $request->clasificacion;
		$existencias = $request->existencias;
        $codigo = $request->codigo;
        $disponible = $request->disponible;

		///NUNCA SE RECIBEN LOS ARCHIVOS
		
		
		$this->validate($request,[
         'idl'=>'required|numeric',
         'autor'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'clasificacion'=>'required',['regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/'],
         'existencias'=>'required|numeric',
         'codigo'=>'required|numeric',
         'archivo'=>'image|mimes:jpg,jpeg,png,gif'
	     ]);
     $file = $request->file('archivo');
	 if($file!="")
	 {
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	 }
	 else
	 {
      $img2= 'sinfoto.png';
	 }
 
		    $lib = new libros;
			$lib->idl = $request->idl;
			$lib->nombre = $request->nombre;
			$lib->autor =$request->autor;
			$lib->clasificacion = $request->clasificacion;
			$lib->existencias =$request->existencias;
			$lib->codigo =$request->codigo;
            $lib->disponible=$request->disponible;
            $lib->archivo = $img2;
            $lib->save();
            
		$proceso = "Alta De Libro";	
	    $mensaje="Registro guardado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
    }	
    public function reportelibro(){
		$libro = libros::orderBy('nombre','asc')->get();
		return view ('sistema.reportelibro')->with('libro',$libro);
	}
}