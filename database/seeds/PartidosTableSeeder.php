<?php

use Illuminate\Database\Seeder;

class PartidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Partido::class,2)->create();
    }
}
