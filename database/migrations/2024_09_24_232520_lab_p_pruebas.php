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
        Schema::create('lab_p_pruebas', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('id_procedimiento'); 
            $table->unsignedBigInteger('id_tipo_resultado'); 
            $table->string('codigo_prueba', 6);
            $table->string('nombre_prueba', 200); 
            $table->string('unidad', 20); 
            $table->boolean('habilita')->default(true); 
            $table->timestamps(); 
            $table->foreign('id_procedimiento')->references('id')->on('lab_p_procedimientos')->onDelete('cascade');
            $table->foreign('id_tipo_resultado')->references('id')->on('gen_p_lista_opcion')->onDelete('cascade');

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
