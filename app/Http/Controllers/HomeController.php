<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Institucion;
use Validator;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check())
        {
            // El usuario está autenticado
            $user = Auth::user();
            $institucion = Institucion::where('rut_inst',$user->rut_inst)->first();
            $instituciones = Controller::listado_instituciones();
            foreach ($instituciones as $key => $institucion) {
                if ($user->rut_inst == $institucion->rut_inst) {
                    $user_inst = $institucion;
                    $user_inst['nom_institucion'] = $institucion->nom_institucion;
                }
            }
            return [$user, $user_inst];
        }
    }

    public function informacionInstitucional(){
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];
        return view('informacionInstitucional',compact('user', 'user_inst'));
    }
    public function editarInformacionInstitucional(Request $request){
        /*$this->validate($request, [
            'nombre' => 'required',
            'direccion' => 'required',
            'mision' => 'required',
            'vision' => 'required',
            'telefono' => 'required',
            'mail' => 'required',
        ]);*/
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];

        $v = Validator::make($request->all(),[
            'nombre' => 'required',
            'direccion' => 'required',
            'mision' => 'required',
            'vision' => 'required',
            'telefono' => 'required',
            'mail' => 'required',
        ]);

        if ($v->fails())
        {
            return Response::json(array(
                'success' => false,
                'errors' => $v->getMessageBag()->toArray()

            ), 400);
        }
        else{
            return Response::json(array('success' => true), 200);
        }
    }
    public function nuevoEvento(){
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];
        return view('nuevoEvento',compact('user', 'user_inst'));
    }
    public function listaEventos(){
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];
        return view('listaEventos',compact('user', 'user_inst'));
    }
    public function estadisticas(){
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];
        return view('estadisticas',compact('user', 'user_inst'));
    }
}
