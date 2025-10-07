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
        Schema::table('respuestas_responsables', function (Blueprint $table) {

            $table->unsignedInteger('idPersonaEvaluada')->nullable();
            
            $table->foreign('idPersonaEvaluada')->references('idResponsable')->on('responsables')->onDelete('set null');
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
