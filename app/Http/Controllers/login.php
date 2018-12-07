<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\usuarios;
use Session;
class login extends Controller
{
    public function login()
	{
		return view ('sistema.login');
	}
	public function valida(Request $request)
	{
		$usuario    =  $request->usuario;
		$password   =  $request->password;
		$this->validate($request,[
	     'usuario'=>'required',
		 'password'=>'required'
	     ]);
		 $consulta = usuarios::withTrashed()->where('usuario',$usuario)
		                       ->where('password','=',$password)
							   ->get();
	

		if (count($consulta)==0){
		    Session::flash('error', 'El usuario no existe o la contraseña no es correcta');
		    return redirect()->route('login');
		}
		else{
	      if($consulta[0]->deleted_at!=""){
		    Session::flash('error', 'El usuario esta desactivado consulte a su administrador');
		    return redirect()->route('login');
		  }
		    else{
                Session::put('sesionname',$consulta[0]->nombre);
                Session::put('sesionidu',$consulta[0]->idu);
                Session::put('sesiontipo',$consulta[0]->tipo_usu);

                /*$sname = Session::get('sesionname');
                $sidu = Session::get('sesionidu');
                $stipo = Session::get('sesiontipo');
                echo $sname . ' '. $sidu . ' '. $stipo;*/
                return redirect()->route('principal');
		    }
		}
	}
	public function principal(){
	    if(Session::get('sesionidu')!=""){
		    return view ('sistema.principal');
		}
		else{
	        Session::flash('error', 'Es necesario loguearse antes de continuar');
		    return redirect()->route('login');
		}
    }
    
	public function cerrarsesion(){
	    Session::forget('sesionname');
	    Session::forget('sesionidu');
	    Session::forget('sesiontipo');
	    Session::flush();
	    Session::flash('error', 'Session Cerrada Correctamente');
	    return redirect()->route('login');
	}
	
}












