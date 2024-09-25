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
        Schema::create('profesionales', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id'); 
            $table->string('codigo', 4);
            $table->unsignedBigInteger('id_persona')->nullable(); 
            $table->string('registro_medico', 20)->nullable(); 
            $table->unsignedBigInteger('id_tipo_prof'); 
            $table->timestamps(); 
            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('set null');
            $table->foreign('id_tipo_prof')->references('id')->on('listaopciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesional');
        
    }
};
