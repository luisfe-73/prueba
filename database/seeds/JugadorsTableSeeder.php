<?php

use Illuminate\Database\Seeder;

class JugadorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Jugador::class,10)->create();
    }
}
