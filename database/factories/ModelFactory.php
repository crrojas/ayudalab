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

/**
 * Cualquier cosa del modelfacrrtoyy
 */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(App\Aviso::class, 'inst1', function (Faker\Generator $faker){
	return[
 		'titulo' => $faker->sentence(5),
 		'descripcion' => $faker->sentence(15),
 		'id_institucion' => 1, //cambio temporal
	];
});

$factory->defineAs(App\Aviso::class, 'inst2', function (Faker\Generator $faker){
	return[
 		'titulo' => $faker->sentence(5),
 		'descripcion' => $faker->sentence(15),
 		'id_institucion' => 2, //cambio temporal
	];
});

$factory->defineAs(App\Aviso::class, 'inst3', function (Faker\Generator $faker){
	return[
 		'titulo' => $faker->sentence(5),
 		'descripcion' => $faker->sentence(15),
 		'id_institucion' => 3, //cambio temporal
	];
});

$factory->defineAs(App\Aviso::class, 'inst4', function (Faker\Generator $faker){
	return[
 		'titulo' => $faker->sentence(5),
 		'descripcion' => $faker->sentence(15),
 		'id_institucion' => 4, //cambio temporal
	];
});