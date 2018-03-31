<?php

use Faker\Generator as Faker;

$factory->define(App\Entreno::class, function (Faker $faker) {
    return [
        'equipo_id' => rand(1,5),
        'dia_entreno' => $faker->date('Y-m-d'),
        'hora_entreno' => $faker->time('H:i:s'),
        'lugar_entreno'=> 'compostilla',
    ];
});
