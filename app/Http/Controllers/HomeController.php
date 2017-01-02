<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Institucion;
use App\Aviso;
use App\User;
use Validator;
use Response;
use Illuminate\Support\Facades\DB;

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

//GET
    public function informacionInstitucional(){
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];
        return view('informacionInstitucional',compact('user', 'user_inst'));
    }
//POST
    public function editarInformacionInstitucional(Request $request){
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


//GET
    public function nuevoAviso(){
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];
        return view('nuevoAviso',compact('user', 'user_inst'));
    }
//POST
    public function guardarNuevoAviso(Request $request){
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];

        $v = Validator::make($request->all(),[
            'titulo' => 'required',
            'descripcion' => 'required',
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


//GET
    public function listaAvisos(){
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];
        $instituciones = Controller::listado_instituciones();

        $avisos = Aviso::where('rut_inst',$user->rut_inst)->paginate(6);
        foreach ($avisos as $key => $aviso) {
            foreach ($instituciones as $key => $institucion) {
                if ($aviso->rut_inst == $institucion->rut_inst) {
                    $aviso['nom_institucion'] = $institucion->nom_institucion;
                }
            }
        }
        return view('listaAvisos',compact('user', 'user_inst', 'avisos'));
    }

//POST
    public function eliminarAviso(Request $request){
        echo "eliminando aviso";
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];
        
        return Response::json(array('success' => true), 200);
    }


    //GET
    public function editarAviso(){
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];
        return view('nuevoAviso',compact('user', 'user_inst'));
    }





    public function estadisticas(){
        $elements = HomeController::index();
        $user = $elements[0];
        $user_inst = $elements[1];
        return view('estadisticas',compact('user', 'user_inst'));
    }

}
