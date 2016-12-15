<?php

use App\Institucion;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Aviso::class, function (Faker\Generator $faker){
	$institucion = Institucion::where('rut_inst','=','81.534.189-5')->first();
	return[
 		'titulo' => $faker->sentence(5),
 		'descripcion' => $faker->sentence(15),
 		'img' => $faker->word,
 		'rut_inst' => $institucion->rut_inst
	];
});