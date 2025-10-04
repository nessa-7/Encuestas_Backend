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
        Schema::create('respuestas_responsables', function (Blueprint $table) {
            $table->increments('idRespuestasResponsable');

            $table->unsignedInteger('idRespuesta');
            $table->unsignedBigInteger('idUsuario')->nullable();
            $table->unsignedInteger('idResponsable')->nullable();
            $table->dateTime('fechaRespuesta')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('idRespuesta')->references('idRespuesta')->on('respuestas')->onDelete('cascade');
            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('set null');
            $table->foreign('idResponsable')->references('idResponsable')->on('responsables')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas_responsables');
    }
};
