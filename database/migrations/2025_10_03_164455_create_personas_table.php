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
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('idPersona');
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->enum('genero', ['M', 'F', 'Otro'])->default('Otro');
            $table->date('fechaNacimiento')->nullable();
            $table->string('celular', 20)->nullable();
            $table->string('ciudad', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
