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
        Schema::create('lab_p_pruebas_opciones', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('id_prueba'); 
            $table->string('opcion', 250); 
            $table->decimal('valor_ref_min_f', 15, 2)->nullable(); 
            $table->decimal('valor_ref_max_f', 15, 2)->nullable(); 
            $table->decimal('valor_ref_min_m', 15, 2)->nullable(); 
            $table->decimal('valor_ref_max_m', 15, 2)->nullable(); 
            $table->timestamps(); 
            $table->foreign('id_prueba')->references('id')->on('lab_p_pruebas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_p_pruebas_opciones');
    }
};
