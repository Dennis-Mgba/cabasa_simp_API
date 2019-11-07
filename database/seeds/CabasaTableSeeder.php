<?php

use Illuminate\Database\Seeder;

class CabasaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cabasa::class, 4)->create();
    }
}
