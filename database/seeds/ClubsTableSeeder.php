<?php

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Club::class,0)->create();
      App\Club::create([
         'nombre_club'=> 'nombre_club',
         'email_club'=> 'club@nada.es',
         'direccion_completa_club' => 'mi direccion',
         'direccion_club' => 'mi direccion',
         'codigo_postal_club' => '24400',
         'poblacion_club' => 'Ponferrada',
         'provincia_club' => 'Leon',
         'pais_club' => 'España',
         'telefono_club'=> '666666666',
         'escudo_club'=> '',
     ]);
    }
}
