<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Institucion;
use App\Aviso;

class InstitucionController extends Controller
{
    
    public function index($institucion)
    {
    	$institucion_conEspacios  = str_replace("_"," ",$institucion);
    	$institucion = Institucion::where('nombre',$institucion_conEspacios)->first();
    	$instituciones = Controller::listado_instituciones();
    	return view('institucion',compact('institucion', 'instituciones'));  
    }

    //GET
    public function verAviso($institucion,$aviso){
        $aux = $institucion;
        $institucion_conEspacios  = str_replace("_"," ",$institucion);
        $institucion = Institucion::where('nombre',$institucion_conEspacios)->first();
        $aviso = Aviso::where('id',$aviso)->where('rut_inst',$institucion->rut_inst)->first();
        if ($aviso) {
            $instituciones = Controller::listado_instituciones();
            return view('verAviso',compact('institucion', 'instituciones', 'aviso', 'aux'));  
        }
        else{
            return view('errors/503');
        }
        
    }
}
