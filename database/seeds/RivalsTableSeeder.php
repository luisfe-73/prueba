<?php

use Illuminate\Database\Seeder;

class RivalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Rival::class,15)->create();
    }
}
