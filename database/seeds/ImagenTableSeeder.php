<?php

use App\Imagen;
use App\Institucion;
use Illuminate\Database\Seeder;

class ImagenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagen = new Imagen(array(
        	'ruta' => '/almacenamiento_imagenes/1.jpg',
        	'descripcion' => 'foto de vamo a calmarno 1',
            'id_institucion' => 1,
       	));
        $institucion = Institucion::where('id_institucion','=','1')->first();
        //$imagen->institucion()->associate($institucion);
        $imagen->save();

       	$imagen = new Imagen(array(
        	'ruta' => '/almacenamiento_imagenes/2.jpg',
        	'descripcion' => 'foto de vamo a calmarno 2',
            'id_institucion' => 2,
       	));
        $institucion = Institucion::where('id_institucion','=','2')->first();
        //$imagen->institucion()->associate($institucion);
        $imagen->save();

        $imagen = new Imagen(array(
        	'ruta' => '/almacenamiento_imagenes/2.jpg',
        	'descripcion' => 'foto de vamo a calmarno 2',
            'id_institucion' => 3,
       	));
        $institucion = Institucion::where('id_institucion','=','3')->first();
        //$imagen->institucion()->associate($institucion);
        $imagen->save();

        $imagen = new Imagen(array(
        	'ruta' => '/almacenamiento_imagenes/2.jpg',
        	'descripcion' => 'foto de vamo a calmarno 2',
            'id_institucion' => 4,
       	));
        $institucion = Institucion::where('id_institucion','=','4')->first();
        //$imagen->institucion()->associate($institucion);
        $imagen->save();

    }
}
