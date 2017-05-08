<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Response;

class ContactController extends Controller
{
    public function index()
    {
    	
    	$instituciones = Controller::listado_instituciones();

    	//return view('institucion',compact('institucion', 'instituciones','imagen', 'avisos'));
        return view('contacto',compact('instituciones'));  
    }

    public function enviarEmail(Request $request){
        $v = Validator::make($request->all(),[
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'mensaje' => 'required',
        ]);

        if ($v->fails())
        {
            return Response::json(array(
                'success' => false,
                'errors' => $v->getMessageBag()->toArray()
            ), 400);
        }
        else{
            return Response::json(array('success' => true, 'msg' => "Mensaje Enviado!"), 200); //400 = bad request
        }
    }
}
