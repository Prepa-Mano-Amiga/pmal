<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class administrador extends Controller
{
    public function index(){
        return view ('sistema.admin');
    }
}
