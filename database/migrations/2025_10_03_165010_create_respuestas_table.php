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
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('idRespuesta');
            $table->unsignedInteger('idPregunta');
            $table->text('textoRespuesta')->nullable();

            $table->foreign('idPregunta')->references('idPregunta')->on('preguntas')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('respuestas', function (Blueprint $table) {
            $table->dropForeign(['idPregunta']);
        });
        Schema::dropIfExists('respuestas');
    }
};
