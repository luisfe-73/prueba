<?php

use Faker\Generator as Faker;

$factory->define(App\Partido::class, function (Faker $faker) {
    return [
      'equipo_id' => rand(1,5),
      'rival_id' => rand(1,5),
      'dia_partido' =>$faker->date('Y-m-d'),
      'tipo_partido'=>$faker->randomElement(['pretemporada','temporada','amistoso','torneo']),
      'condicion_partido'=>$faker->randomElement(['local','visitante']),
      'gol_equipo' => rand(1,5),
      'gol_rival' => rand(1,5),
      'resultado_partido'=>$faker->randomElement(['ganado','empatado','perdido']),
    ];
});
