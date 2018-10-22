<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class empleado extends Controller
{
 	public function altaempleado()
    {	
	    return view ('sistema.altaempleado');
    }
	
}