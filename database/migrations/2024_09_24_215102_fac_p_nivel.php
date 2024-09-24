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
        /*Schema::create('fac_p_nivel', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->integer('id_eps')->index(); // Agregando un índice para facilitar las búsquedas
            $table->string('nivel', 4);
            $table->string('nombre', 50);
            $table->integer('id_regimen')->index(); // Agregando un índice para facilitar las búsquedas
            $table->timestamps(); // Para crear las columnas created_at y updated_at

            // Agregar las relaciones si es necesario
            // $table->foreign('id_eps')->references('id')->on('gen_p_eps')->onDelete('cascade');
            // $table->foreign('id_regimen')->references('id')->on('gen_p_lista_opcion')->onDelete('cascade');

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
