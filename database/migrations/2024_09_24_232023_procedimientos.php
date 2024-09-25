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
        Schema::create('procedimientos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('id_cups'); 
            $table->unsignedBigInteger('id_grupo_laboratorio'); 
            $table->string('metodo', 60)->nullable(); 
            $table->timestamps(); 
            $table->foreign('id_cups')->references('id')->on('cups')->onDelete('cascade');
            $table->foreign('id_grupo_laboratorio')->references('id')->on('grupos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedimientos');
    }
};
