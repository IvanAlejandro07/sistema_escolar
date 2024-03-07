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
        Schema::create('grupos', function (Blueprint $table) {
            $table->bigIncrements('idGrupos');
            $table->string('nombres')->notnull();
            $table->unsignedBigInteger('idDocente');
            $table->unsignedBigInteger('idMateria');
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('idDocente')->references('idDocente')->on('docentes');
            //$table->foreign('idMateria')->references('idMateria')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
