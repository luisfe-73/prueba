<?php

use Illuminate\Database\Seeder;

class EntrenosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entreno::class,10)->create();
    }
}
