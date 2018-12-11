<?php

use Illuminate\Database\Seeder;
use App\Estudiante;
use App\Nota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Schema::disableForeignKeyConstraints();
        Estudiante::truncate();
        Nota::truncate();

        factory(Estudiante::class, 1000)->create();
        factory(Nota::class, 1000)->create();

    }
}
