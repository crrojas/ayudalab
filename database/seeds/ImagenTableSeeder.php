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
        	'ruta' => '/almacenamiento_imagenes/SanAntonio/SanAntonio3.jpg',
        	'descripcion' => 'Comedor San Antonio',
            'id_institucion' => 1,
       	));
        $institucion = Institucion::where('id_institucion','=','1')->first();
        //$imagen->institucion()->associate($institucion);
        $imagen->save();

       	$imagen = new Imagen(array(
        	'ruta' => '/almacenamiento_imagenes/HogarBelen/HogarBelen.jpg',
        	'descripcion' => 'Institución Hogar Belen',
            'id_institucion' => 2,
       	));
        $institucion = Institucion::where('id_institucion','=','2')->first();
        //$imagen->institucion()->associate($institucion);
        $imagen->save();

        $imagen = new Imagen(array(
        	'ruta' => '/almacenamiento_imagenes/CIFAN/CIFAN.png',
        	'descripcion' => 'Institución CIFAN',
            'id_institucion' => 3,
       	));
        $institucion = Institucion::where('id_institucion','=','3')->first();
        //$imagen->institucion()->associate($institucion);
        $imagen->save();

        $imagen = new Imagen(array(
        	'ruta' => '/almacenamiento_imagenes/HogarBellaExistencia/HogarBellaExistencia.jpg',
        	'descripcion' => 'Hogar Bella Existencia',
            'id_institucion' => 4,
       	));
        $institucion = Institucion::where('id_institucion','=','4')->first();
        //$imagen->institucion()->associate($institucion);
        $imagen->save();

    }
}
