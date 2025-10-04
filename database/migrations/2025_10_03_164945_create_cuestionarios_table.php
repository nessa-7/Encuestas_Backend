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
        Schema::create('cuestionarios', function (Blueprint $table) {
            $table->increments('idCuestionario');
            $table->string('titulo', 200);
            $table->text('descripcion')->nullable();
            $table->dateTime('fechaCreacion')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('fechaVigencia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuestionarios');
    }
};
