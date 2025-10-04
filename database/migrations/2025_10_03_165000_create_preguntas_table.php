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
        Schema::create('preguntas', function (Blueprint $table) {
            $table->increments('idPregunta');
            $table->unsignedInteger('idCuestionario');
            $table->text('textoPregunta');
            $table->enum('tipoPregunta', ['abierta', 'unica_respuesta', 'multiple_respuesta']);

            $table->foreign('idCuestionario')->references('idCuestionario')->on('cuestionarios')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('preguntas', function (Blueprint $table) {
            $table->dropForeign(['idCuestionario']);
        });
        Schema::dropIfExists('preguntas');
    }
};
