<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGrades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_grades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estudiante_id', 10);
            $table->string('asignatura',20);
            $table->integer('nota');
            $table->foreign('estudiante_id')->references('dni')->on('students')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_grades');
    }
}
