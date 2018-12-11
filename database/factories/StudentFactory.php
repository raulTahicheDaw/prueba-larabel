<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Estudiante::class, function (Faker $faker) {
    return [
        'dni' => $faker->unique()->randomNumber($nbDigits = 8, $strict = false),
        'nombre' => $faker->firstName,
        'apellido1' => $faker->lastName,
        'apellido2' => $faker->lastName,
        'f_nacimiento'=>$faker->date($format = 'Y-m-d', $max = '-18 years') ,
        'email'=>$faker->unique()->safeEmail
    ];
});
