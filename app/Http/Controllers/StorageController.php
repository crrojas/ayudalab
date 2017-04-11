<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Storage;
use App\Imagen;

class StorageController extends Controller
{
    public function index(){
    	return view('formulario');
    }



//Metodo para guardar la imagen desde el formulario en el sistema
    public function save(Request $r){

    	//obtenemos el campo file definido en el formulario
       $file = $r->file('file');
       //obtenemos el nombre del archivo (inluyela extension del archivo)
       $nombre = $file->getClientOriginalName();
     
       //indicamos que queremos guardar un nuevo archivo en el disco publico (mirar filesystems.php)
       \Storage::disk('public')->put($nombre,  \File::get($file));

       //generamos la ruta del imagen
       $ruta = "/almacenamiento_imagenes/".$nombre;
       
       //guardamos la ruta  en  la base de datos
 		$imagen = new Imagen;
 		$imagen->ruta = $ruta;

 		$imagen->save();
//       return "archivo guardado";

    }

    public function mostrarImagen($id){
    	//establecemos el path de la carpeta contenedora de las imagenes
	    //$public_path = storage_path().'/almacenamiento_imagenes';
	    
	    //buscamos la imagen solicitada (POR ID)
	    $imagen=Imagen::find($id);

	    //echo($imagen);
	    //obtenemos la ruta de la imagen solicitada
	    $url = $imagen->ruta;
	    //echo ($url);

	   // $var = "HOLA A TODOS"
	   return view('imagen',compact('url'));
	    //verificamos si el archivo existe y lo retornamos
	    //$exists = Storage::disk('local')->exists($archivo.'.jpg');
	    //if ($exists){
	      //return response()->download($url);
     	//}
     	//else{
     	//	echo "nada";
     	//}
    }
}
