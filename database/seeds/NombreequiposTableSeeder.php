<?php

use Illuminate\Database\Seeder;

class NombreequiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nombreequipo::class,15)->create();
    }
}
