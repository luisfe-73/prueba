<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class,0)->create();
      App\User::create([
         'nombre_user'=> 'luis',
         'apellidos_user'=> 'falagan',
         'email'=> 'luis@nada.es',
         'password'=> bcrypt('123456'),
         'remember_token' => str_random(60),
         'rol_user'=> 'administrador',
         'estado_user'=> 'activo',
         'direccion_completa_user' => 'mi direccion',
         'direccion_user' => 'mi direccion',
         'codigo_postal_user' => '24400',
         'poblacion_user' => 'ponferrada',
         'provincia_user' => 'leon',
         'pais_user' => 'españa',
         'telefono_user'=> '647736661',
         'foto_user'=> '',
         'ficha_user'=> '',
     ]);
    }
}
