<?php

use Illuminate\Database\Seeder;

class LigasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Liga::class,15)->create();
    }
}
