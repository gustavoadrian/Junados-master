<?php

use App\Comisioninicial;
use Illuminate\Database\Seeder;

class ComisionsInicialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory = factory(Comisioninicial::class,50)->create();
    }
}
