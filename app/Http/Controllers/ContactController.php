<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    public function index()
    {
    	
    	$instituciones = Controller::listado_instituciones();

    	//return view('institucion',compact('institucion', 'instituciones','imagen', 'avisos'));
        return view('contacto',compact('instituciones'));  
    }
}
