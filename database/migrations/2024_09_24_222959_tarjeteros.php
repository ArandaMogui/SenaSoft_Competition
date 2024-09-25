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
        Schema::create('tarjeteros', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id'); 
            $table->string('historia', 20);
            $table->unsignedBigInteger('id_persona'); 
            $table->unsignedBigInteger('id_regimen'); 
            $table->unsignedBigInteger('id_eps')->nullable(); 
            $table->unsignedBigInteger('id_nivel')->nullable(); 
            $table->timestamps();
            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('id_regimen')->references('id')->on('listaopciones')->onDelete('cascade');
            $table->foreign('id_eps')->references('id')->on('eps')->onDelete('cascade');
            $table->foreign('id_nivel')->references('id')->on('niveles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarjetero');
        
    }
};
