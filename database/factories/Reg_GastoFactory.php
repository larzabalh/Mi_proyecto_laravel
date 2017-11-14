<?php

use Faker\Generator as Faker;
use App\Reg_Gasto;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Reg_Gasto::class, function (Faker $faker) {
    return [
      'fecha'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = date_default_timezone_get()),
      'gasto_id'=> App\Gasto::all()->random()->id,
      'importe'=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100000),
      'comentario'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
