<?php

use Illuminate\Database\Seeder;
use App\Imagen;
use App\Institucion;

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
       	));
        $institucion = Institucion::where('id_institucion','=','1')->first();
        $imagen->institucion()->associate($institucion);
        $imagen->save();

       	$imagen = new Imagen(array(
        	'ruta' => '/almacenamiento_imagenes/2.jpg',
        	'descripcion' => 'foto de vamo a calmarno 2',
       	));
        $institucion = Institucion::where('id_institucion','=','2')->first();
        $imagen->institucion()->associate($institucion);
        $imagen->save();

    }
}
