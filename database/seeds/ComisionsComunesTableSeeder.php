<?php

use App\Comisioncomun;
use Illuminate\Database\Seeder;

class ComisionsComunesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory = factory(Comisioncomun::class,150)->create();
    }
}
