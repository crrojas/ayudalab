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
    	foreach ($avisos as $key => $aviso) {
    		foreach ($instituciones as $key => $institucion) {
    			if ($aviso->rut_inst == $institucion->rut_inst) {
    				$nom_institucion = $institucion->nombre;
    				$nom_institucion = str_replace(" ", "_", $nom_institucion);
    				$aviso['nom_institucion'] = $nom_institucion;
    				$institucion['nom_institucion'] = $nom_institucion;
    			}
    		}
    	}
    	return view('welcome',compact('instituciones', 'avisos'));

    }
}
