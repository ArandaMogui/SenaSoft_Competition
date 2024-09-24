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
        /*Schema::create('fac_p_profesional', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('codigo', 4); // Código del profesional, con un máximo de 4 caracteres
            $table->integer('id_persona')->nullable()->index(); // Puede ser nulo, índice para facilitar búsquedas
            $table->string('registro_medico', 20)->nullable(); // Registro médico, puede ser nulo
            $table->integer('id_tipo_prof')->index(); // Índice para facilitar búsquedas

            // Agregar las relaciones si es necesario
            // $table->foreign('id_persona')->references('id')->on('gen_m_persona')->onDelete('set null');
            // $table->foreign('id_tipo_prof')->references('id')->on('gen_p_lista_opcion')->onDelete('cascade');

            $table->timestamps(); // Para crear las columnas created_at y updated_at
        });*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
