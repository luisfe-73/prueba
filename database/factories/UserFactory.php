<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nombre_user' => $faker->firstNameMale,
        'apellidos_user' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(60),
        'rol_user'=> $faker->randomElement(['administrador','entrenador']),
        'estado_user'=> $faker->randomElement(['activo','inactivo']),
        'direccion_completa_user' => $faker->streetAddress,
        'direccion_user' => $faker->streetAddress,
        'codigo_postal_user' => $faker->postcode,
        'poblacion_user' => $faker->city,
        'provincia_user' => $faker->state,
        'pais_user' => $faker->country,
        'telefono_user'=> $faker->tollFreePhoneNumber,
        'foto_user'=> $faker->imageUrl($width=50, $height=50),
        'ficha_user'=> $faker->imageUrl($width=50, $height=50),
    ];
});
