<?php

use Faker\Generator as Faker;

$factory->define(App\Rival::class, function (Faker $faker) {
    return [
        'nombre_rival'=>$faker->randomElement(['santa marta','ciudad rodrigo','carbajosa','ejido','peñaranda','betis','bejar','zamora']),
        'localidad_rival' => $faker->city,
        'poblacion_rival' => $faker->city,
        'provincia_rival' => $faker->state,
        'pais_rival' => $faker->country,
        'comentario_rival'=>$faker->text(50),
    ];
});
