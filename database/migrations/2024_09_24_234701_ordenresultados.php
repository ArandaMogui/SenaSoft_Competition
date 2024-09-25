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
        Schema::create('resultados', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id'); 
            $table->timestamp('fecha')->nullable();
            $table->unsignedBigInteger('id_orden')->nullable(); 
            $table->unsignedBigInteger('id_prueba')->nullable(); 
            $table->unsignedBigInteger('id_procedimiento')->nullable(); 
            $table->unsignedBigInteger('id_pruebaopcion')->nullable(); 
            $table->string('res_opcion', 250)->nullable();
            $table->decimal('res_numerico', 16, 4)->nullable(); 
            $table->string('res_texto', 60)->nullable();
            $table->string('res_memo', 2500)->nullable(); 
            $table->integer('num_procesamientos')->nullable(); 
            $table->timestamps(); 
            $table->foreign('id_orden')->references('id')->on('ordenes')->onDelete('cascade');
            $table->foreign('id_procedimiento')->references('id')->on('procedimientos')->onDelete('cascade');
            $table->foreign('id_prueba')->references('id')->on('pruebas')->onDelete('cascade');
            $table->foreign('id_pruebaopcion')->references('id')->on('pruebasopciones')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados');
    }
};
