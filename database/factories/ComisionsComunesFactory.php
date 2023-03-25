<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comisioncomun;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Comisioncomun::class, function (Faker $faker) {
    $dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    $horarios = [
        ($faker->numberBetween(8, 9).':00 a '. $faker->numberBetween(10, 13).':00 '),
        ($faker->numberBetween(14, 15) . ':00 a ' . $faker->numberBetween(16, 19) . ':00'),
        ($faker->numberBetween(19, 20) . ':00 a ' . $faker->numberBetween(21, 22) . ':00'),
    ];
    return [
        //
        'nombre' => 'Comision ' . $faker->numberBetween(1, 17),
        'horario' => array_random($horarios),
        'dia' => array_random($dias),
        'profesor_id' => $faker->numberBetween(1, 4),
        'materiacomun_id' => $faker->numberBetween(1, 14),
        'aula_id' => $faker->numberBetween(1, 79),
    ];
});
