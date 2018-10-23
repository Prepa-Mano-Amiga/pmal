<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class administrador extends Controller
{
    public function admin(){
        return view ('sistema.admin');
    }
}
