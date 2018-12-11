<?php

use Faker\Generator as Faker;
use App\Estudiante;
use App\Nota;
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

$factory->define(Nota::class, function (Faker $faker) {

    $estudiantes = Estudiante::all();

    $asignaturas = ['Matemáticas', 'Lengua','Sociales','Biología','Física','Historia'];

    return [
        'estudiante_id'=> $estudiantes->random()->dni,
        'asignatura' => $asignaturas[random_int(0, 5)],
        'nota' => random_int(1,10),
    ];

});
