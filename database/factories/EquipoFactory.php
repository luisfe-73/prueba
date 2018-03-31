<?php

use Faker\Generator as Faker;

$factory->define(App\Equipo::class, function (Faker $faker) {
    return [
      'nombreequipo_id' => rand(1,5),
      'liga_id' => rand(1,5),
      'temporada' => '17/18',
      'categoria_equipo'=>$faker->randomElement(['futbol-7','futbol-11']),
      'user_id' => 1,
      'nombre_equipo' => 'alevin-a 17/18',
      'foto_equipo'=>$faker->imageUrl($width=150, $height=100),
      'comentario_equipo'=>$faker->text(50),
    ];
});
