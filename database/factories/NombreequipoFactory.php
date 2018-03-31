<?php

use Faker\Generator as Faker;

$factory->define(App\Nombreequipo::class, function (Faker $faker) {
    return [
        'nombre_nombreequipo'=>$faker->colorName,
        'comentario_nombreequipo'=>$faker->text(50),
    ];
});
