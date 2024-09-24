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
        Schema::create('lab_m_orden_resultados', function (Blueprint $table) {
            $table->integer('id')->primary(); // Identificador único
            $table->timestamp('fecha')->nullable(); // Fecha y hora en que se registró el resultado
            $table->integer('id_orden')->index(); // Relación a la tabla lab_m_orden
            $table->integer('id_procedimiento')->index(); // Relación a la tabla lab_p_procedimientos
            $table->integer('id_prueba')->index(); // Relación a la tabla lab_p_pruebas
            $table->integer('id_pruebaopcion')->nullable()->index(); // Relación a la tabla lab_p_pruebas_opciones
            $table->string('res_opcion', 250)->nullable(); // Resultado que corresponde a una opción
            $table->decimal('res_numerico', 16, 4)->nullable(); // Resultado numérico
            $table->string('res_texto', 60)->nullable(); // Resultado en formato texto
            $table->string('res_memo', 2500)->nullable(); // Notas o comentarios adicionales sobre el resultado
            $table->integer('num_procesamientos')->nullable(); // Número de veces que el resultado ha sido procesado

            // Agregar las relaciones si es necesario
            // $table->foreign('id_orden')->references('id')->on('lab_m_orden')->onDelete('cascade');
            // $table->foreign('id_procedimiento')->references('id')->on('lab_p_procedimientos')->onDelete('cascade');
            // $table->foreign('id_prueba')->references('id')->on('lab_p_pruebas')->onDelete('cascade');
            // $table->foreign('id_pruebaopcion')->references('id')->on('lab_p_pruebas_opciones')->onDelete('set null');

            $table->timestamps(); // Para crear las columnas created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
