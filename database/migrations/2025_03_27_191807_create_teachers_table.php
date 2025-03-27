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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id(); // Columna primaria
                        // Otras columnas que necesites
            $table->string('name'); // Ejemplo de otra columna
            $table->string('email');
            $table->unsignedBigInteger('area_id')->unique(); // Columna para la clave foránea
            // Definición de la clave foránea
            $table->foreign('area_id')
                    ->references('id') // Asegúrate de que esta columna existe en la tabla areas
                    ->on('areas');
            $table->unsignedBigInteger('training_center_id')->unique();
            $table->foreign('training_center_id')
                ->references('id')
                ->on('training_centers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
