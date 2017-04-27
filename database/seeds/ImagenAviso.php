<?php

use Illuminate\Database\Seeder;
use App\ImagenEvento;
use App\Institucion;

class ImagenAviso extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagen = new ImagenEvento(array(
        	'ruta' => '/almacenamiento_imagenes/1.jpg',
        	'descripcion' => 'foto de vamo a calmarno 1',
            //'id_institucion' => 1,
            'id_aviso' => 1,
       	));
        //$institucion = Institucion::where('id_institucion','=','1')->first();
        //$aviso = $institucion->avisos->first();
        //$imagen->aviso()->associate($aviso);
        $imagen->save();

       	$imagen = new ImagenEvento(array(
        	'ruta' => '/almacenamiento_imagenes/2.jpg',
        	'descripcion' => 'foto de vamo a calmarno 2',
            //'id_institucion' => 2,
            'id_aviso' => 2,
       	));
        //$institucion = Institucion::where('id_institucion','=','2')->first();
        //$aviso = $institucion->avisos->first();
        //$imagen->aviso()->associate($aviso);
        $imagen->save();
    }
}
