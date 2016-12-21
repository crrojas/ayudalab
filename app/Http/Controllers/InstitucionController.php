<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Institucion;
use App\Aviso;

class InstitucionController extends Controller
{
    //
    public function index($institucion)
    {
    	$institucion_conEspacios  = str_replace("_"," ",$institucion);
    	$institucion = Institucion::where('nombre',$institucion_conEspacios)->first();
    	$instituciones = Controller::listado_instituciones();
    	return view('institucion',compact('institucion', 'instituciones'));  
    }
}
