<?php

namespace App\Http\Controllers;

use App\Institucion;
use App\Aviso;

use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index(){
    	//$institucion = Institucion::where('nombre','Comedor San Antonio')->first();
    	$instituciones = Institucion::all();
    	$avisos = Aviso::all();
    	return view('welcome',compact('instituciones', 'avisos'));

    }
}
