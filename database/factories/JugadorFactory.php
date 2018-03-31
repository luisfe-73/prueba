<?php

use Faker\Generator as Faker;

$factory->define(App\Jugador::class, function (Faker $faker) {
   $nombre=$faker->firstname;
    return [
        'nombre_jugador' => $nombre,
        'apellidos_jugador' => $faker->lastname,
        'nombre_futbol' => $nombre,
        'fecha_nacimiento_jugador' =>$faker->date('Y-m-d'),
        'direccion_completa_jugador' => $faker->streetAddress,
        'direccion_jugador' => $faker->streetAddress,
        'codigo_postal_jugador' => $faker->postcode,
        'poblacion_jugador' => $faker->city,
        'provincia_jugador' => $faker->state,
        'pais_jugador' => $faker->country,
        'telefono_jugador'=>$faker->tollFreePhoneNumber,
        'foto_jugador'=>$faker->imageUrl($width=50, $height=50),
        'estado_jugador'=>$faker->randomElement(['activo','inactivo']),
        'contacto_padre_jugador'=>$faker->tollFreePhoneNumber,
        'contacto_madre_jugador'=>$faker->tollFreePhoneNumber,
        'contacto_otro1_jugador'=>$faker->tollFreePhoneNumber,
        'contacto_otro2_jugador'=>$faker->tollFreePhoneNumber,
        'comentario_jugador'=>$faker->text(100),

    ];
});
