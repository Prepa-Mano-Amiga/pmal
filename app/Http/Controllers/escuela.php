<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\municipios;
use App\escuelas;

class escuela extends Controller
{
    public function altaescuela()
	{	
		$municipios = municipios::OrderBy('nombre','Asc')->get();
		$clavesig 	= escuelas::orderBy('ides','desc')->take(1)->get();
		$idec	  	= $clavesig[0]->ides+1;
		return view ('sistema.altaescuela')->with('municipios',$municipios)->with('idec',$idec);
    }
    
    public function guardaescuela(Request $request)
		{
			$nombre	        = $request->nombre;
			$ides 		    = $request->ides;
			$localidad 	    = $request->localidad;
			$sostenimiento 	= $request->sostenimiento;
			$fec_engre		= $request->fec_engre;
			$promedio		= $request->promedio;
			$clave_sector 	= $request->clave_sector;
			//nunca se reciben los archivos
			
			$this->validate($request,[
				'ides'		    =>'required|numeric',
				'nombre'	    =>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'localidad'	    =>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'sostenimiento'	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
				'promedio'	    =>'required|regex:/^[0-9]+[.][0-9]{2}$/',
				'clave_sector'	=>'required|min:8|max:32',
			]);
			

			$escul	=	new escuelas;
			$escul->ides		    =	$request->ides;
			$escul->nombre	        =	$request->nombre;
			$escul->localidad	    =	$request->localidad;
			$escul->sostenimiento	=	$request->sostenimiento;
			$escul->fec_engre	    =	$request->fec_engre;
			$escul->promedio	    =	$request->promedio;
            $escul->clave_sector    =	$request->clave_sector;
            $escul->idm		        =	$request->idm;
			$escul->save();
			
			$proceso ="Alta de Escuela";
			$mensaje= "Registro guardado correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
		}

		public function reporteEscuelas(){
			$escuelas=\DB::select("SELECT e.ides,e.nombre,e.localidad,e.sostenimiento,e.fec_engre,e.promedio,e.clave_sector,m.nombre AS municipio,e.deleted_at
			FROM escuelas AS e
			INNER JOIN municipios AS m ON e.idm = m.idm");
			return view ('sistema.reporteEscuelas')->with('escuelas',$escuelas);
		}
		public function eliminaescuela($ides)
	{
		    escuelas::find($ides)->delete();
		    $proceso = "ELIMINAR Escuela";
			$mensaje = "El escuela ha sido borrado Correctamente";
			return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
	public function restauraescuela($ides)
	{
		escuelas::withTrashed()->where('ides',$ides)->restore();
		$proceso = "RESTAURACION DE ESCUELA";	
	    $mensaje="Registro restaurado correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);	
	}

	public function modificaEscuela($ides){
        $escuela = escuelas::where('ides','=',$ides)->get();
        $idm = $escuela[0]->idm;
        $municipio = municipios::where('idm','=',$idm)->get();
        $demasMunicipios = municipios::where('idm','!=',$idm)->get();
        return view('sistema.editaEscuela')
                                            ->with('escuela',$escuela[0])
                                            ->with('idm',$idm)
                                            ->with('municipio', $municipio[0]->nombre)
                                            ->with('demasMunicipios',$demasMunicipios);
	}
	
	public function editaEscuela(Request $request){
        $nombre	        = $request->nombre;
		$ides 		    = $request->ides;
		$localidad 	    = $request->localidad;
		$sostenimiento 	= $request->sostenimiento;
		$fec_engre		= $request->fec_engre;
		$promedio		= $request->promedio;
		$clave_sector 	= $request->clave_sector;

        $this->validate($request,[
            'ides'		    =>'required|numeric',
			'nombre'	    =>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
			'localidad'	    =>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
			'sostenimiento'	=>'required|regex:/^[A-Z,a-z, ,ñ,á,é,í,ó,ú]+$/',
			'promedio'	    =>'required|regex:/^[0-9]+[.][0-9]{1}$/',
			'clave_sector'	=>'required|min:8|max:32',
        ]);
        
            $escul = escuelas::find($ides);
            $escul->ides		    =	$request->ides;
			$escul->nombre	        =	$request->nombre;
			$escul->localidad	    =	$request->localidad;
			$escul->sostenimiento	=	$request->sostenimiento;
			$escul->fec_engre	    =	$request->fec_engre;
			$escul->promedio	    =	$request->promedio;
            $escul->clave_sector    =	$request->clave_sector;
            $escul->idm		        =	$request->idm;
			$escul->save();
            
            $proceso = "Modificar Escuela";
            $mensaje = "Registro Modificado Correctamente";
            return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }
}