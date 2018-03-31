<?php

use Faker\Generator as Faker;

$factory->define(App\Liga::class, function (Faker $faker) {
    return [
        'nombre_liga'=>$faker->randomElement(['1-provincial','2-provincial','3-provincial']),
        'categoria_liga'=>$faker->randomElement(['prebenjamin', 'benjamin', 'alevin', 'infantil', 'cadete', 'juvenil', 'amateur', 'nacional']),
        'comentario_liga'=>$faker->text(50),
    ];
});
