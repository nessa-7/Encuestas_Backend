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
        Schema::create('programa_responsable', function (Blueprint $table) {
            $table->increments('idProgramaResponsable');
            $table->unsignedInteger('idPrograma');
            $table->unsignedInteger('idResponsable');
            $table->timestamps();

            $table->foreign('idPrograma')->references('idPrograma')->on('programa')->onDelete('cascade');
            $table->foreign('idResponsable')->references('idResponsable')->on('responsables')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programa_responsable');
    }
};
