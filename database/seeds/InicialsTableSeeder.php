<?php

use App\Inicial;
use Illuminate\Database\Seeder;

class InicialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inicial::create([
                'nombre' => 'Problemas de Historia Argentina',
                'color_hexa' => ''
                ]);
            Inicial::create([
                'nombre' => 'Taller de Lectura y Escritura',
                'color_hexa' => ''
                ]);
            Inicial::create([
                'nombre' => 'Matematica Inicial',
                'color_hexa' => ''
                ]);
            Inicial::create([
                'nombre' => 'Practicas Culturales',
                'color_hexa' => ''
                ]);
                
    }
}
