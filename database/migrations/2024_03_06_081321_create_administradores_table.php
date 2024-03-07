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
        Schema::create('administradores', function (Blueprint $table) {
            $table->bigIncrements('idAdministrador'); // Utilizar bigIncrements para un campo entero autoincremental grande
            $table->string('nombre');
            $table->tinyInteger('activo')->default(1); // Utilizar tinyInteger para un campo booleano
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradores');
    }
};
