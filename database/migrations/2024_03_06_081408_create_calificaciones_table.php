<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->bigIncrements('idCalificaciones');
            $table->double('calificaciones')->notnull();
            $table->unsignedBigInteger('idAlumno');
            $table->unsignedBigInteger('idMateria');
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('idAlumno')->references('idAlumno')->on('alumnos');
            //$table->foreign('idMateria')->references('idMateria')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones');
    }
};
