<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Storage;

class StorageController extends Controller
{
    public function index(){
    	return view('formulario');
    }



//Metodo para guardar la imagen desde el formulario en el sistema
    public function save(Request $r){

    	//obtenemos el campo file definido en el formulario
       $file = $r->file('file');

       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();

       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
 
       return "archivo guardado";

    }

    public function mostrarImagen($archivo){
    	//establecemos el path de la carpeta contenedora de las imagenes
	    $public_path = storage_path().'/almacenamiento_imagenes';
	    
	    //generamos la url de la imagen, agregandole al path /nombre de la imagen mas ".jpg"
	    //el inconveniente es que las imagenes almacenadas deben estar en formato JPG
	    $url = $public_path.'/'.$archivo.'.jpg';
	    //verificamos si el archivo existe y lo retornamos
	    $exists = Storage::disk('local')->exists($archivo.'.jpg');
	    if ($exists){
	      return response()->download($url);
     	}
     	else{
     		echo "nada";
     	}
    }
}
