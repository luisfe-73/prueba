<?php

use Illuminate\Database\Seeder;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Equipo::class,2)->create();
      // para rellenar los campos de las claver foraneas
      // factory(App\Equipo::class,5)->create()->each(function(App\Equipo $equipo){
      //     $equipo->jugadores()->attach([
      //      rand(1,5),
      //      rand(1,5),
      //      rand(1,5),
      //    ]);
      // });
    }
}
