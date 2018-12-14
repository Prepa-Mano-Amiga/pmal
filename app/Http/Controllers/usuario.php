<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\usuarios;
use App\DB;
use Session;

class usuario extends Controller
{
 	public function altausuario()
	{	
		$clavesig = usuarios::orderBy('idu','desc')->take(1)->get();
		$idus	  = $clavesig[0]->idu+1;
		return view ('sistema.altausuarios')->with('idus',$idus);
	}

	public function guardausuario(Request $request)
		{
			$usuario	= $request->usuario;
			$idu 		= $request->idu;
			$password 	= $request->password;
			$tipo_usu 	= $request->tipo_usu;
			$nombre		= $request->nombre;
			$ap_pat		= $request->ap_pat;
			$ap_mat 	= $request->ap_mat;
			//nunca se reciben los archivos
			
			$this->validate($request,[
				'idu'		=>'required|numeric',
				'usuario'	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'password'	=>'required|min:8|max:32',
				'tipo_usu'	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'nombre'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'ap_pat'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'ap_mat'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'foto'		=>'image|mimes:jpg,jpeg,png,gif'
			]);
			
			$file	= $request->file('foto');
			if($file!=""){
			$ldate	= date('Ymd_His_');
			$img	= $file->getClientOriginalName();
			$img2	= $ldate.$img;
			\Storage::disk('local')->put($img2,\File::get($file));
			}
			else {
				$img2	= 'sinfoto.pgn';
			}
			

			$usu	=	new usuarios;
			$usu->idu		=	$request->idu;
			$usu->usuario	=	$request->usuario;
			$usu->password	=	$request->password;
			$usu->tipo_usu	=	$request->tipo_usu;
			$usu->nombre	=	$request->nombre;
			$usu->ap_pat	=	$request->ap_pat;
			$usu->ap_mat	=	$request->ap_mat;
			$usu->foto	=	$img2;
			$usu->save();
			
			$proceso ="Alta Usuario";
			$mensaje= "Registro guardado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}

	//consulta usuario
	public function reporteusuario(){
		$usuarios=\DB::select("SELECT u.idu,u.usuario,u.password,u.tipo_usu,u.nombre,u.ap_pat,u.ap_mat,u.foto,u.deleted_at
		FROM usuarios AS u");
			return view ('sistema.reporteusuarios')->with('usuarios',$usuarios);
	}

	//elimina usuario
	public function eliminausuario($idu)
	{
				usuarios::find($idu)->delete();
				$proceso = "Desactivar Usuario";
				$mensaje = "El usuario ha sido desactivado correctamente";
				return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}

	//Eliminacion fisica usuario
	public function efisicau($idu)
    {
        usuarios::withTrashed()->where('idu',$idu)->forceDelete();
        $proceso = "Eliminar Usuario";
        $mensaje = "El usuario ha sido borrado correctamente";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);

	}
	
	//restaura usuario
	public function restaurausuario($idu)
	{
			usuarios::withTrashed()->where('idu',$idu)->restore();
			$proceso = "Restauración De Equipo";	
			$mensaje="Registro restaurado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);	
	}

	//modifica usuario
	public function modificausuario($idu){
		$usu = usuarios::where('idu','=',$idu)->get();
		return view('sistema.guardausuario')->with('usu',$usu[0]);
	}
	
	//guarda datos modificacion
	public function editusuario(Request $request){
        $idu 	    = $request->idu;
		$usuario	= $request->usuario;
		$idu 		= $request->idu;
		$password 	= $request->password;
		$tipo_usu 	= $request->tipo_usu;
		$nombre		= $request->nombre;
		$ap_pat		= $request->ap_pat;
		$ap_mat 	= $request->ap_mat;
		//nunca se reciben los archivos
		
		$this->validate($request,[
			'idu'		=>'required|numeric',
			'usuario'	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
			'password'	=>'required|min:8|max:32',
			'tipo_usu'	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
			'nombre'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
			'ap_pat'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
			'ap_mat'	=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
			'foto'		=>'image|mimes:jpg,jpeg,png,gif'
		]);
		// recibe foto
		$file	= $request->file('foto');
			if($file!=""){
			$ldate	= date('Ymd_His_');
			$img	= $file->getClientOriginalName();
			$img2	= $ldate.$img;
			\Storage::disk('local')->put($img2,\File::get($file));
			}
			else {
				$img2	= 'sin_foto.jpg';
			}
		
        $usu	        =	usuarios::find($idu);
		$usu->idu		=	$request->idu;
		$usu->usuario	=	$request->usuario;
		$usu->password	=	$request->password;
		$usu->tipo_usu	=	$request->tipo_usu;
		$usu->nombre	=	$request->nombre;
		$usu->ap_pat	=	$request->ap_pat;
		$usu->ap_mat	=	$request->ap_mat;
		$usu->foto		=	$img2;
		$usu->save();
			
			$proceso ="Modificación de Usuario";
			$mensaje= "Registro guardado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}

	
}
 