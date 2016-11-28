<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();

            $table->string('nombres')->default('');
            $table->string('apellidos')->default('');
            $table->string('rut')->default('');
            $table->string('celular')->default('');
            $table->string('email')->default('');
            $table->string('comuna')->default('');
            $table->string('colegio')->default('');
            $table->string('curso')->default('');
            $table->string('promedio')->default('');
            $table->string('sede')->default('');
            $table->longText('consulta');
            $table->string('asignaturas')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
}
