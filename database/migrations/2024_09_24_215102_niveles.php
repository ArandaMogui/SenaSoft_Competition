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
        Schema::create('niveles', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id'); 
            $table->string('nivel', 4);
            $table->string('nombre', 50);
            $table->unsignedBigInteger('id_eps'); 
            $table->unsignedBigInteger('id_regimen'); 
            $table->timestamps(); 
            $table->foreign('id_eps')->references('id')->on('eps')->onDelete('cascade');
            $table->foreign('id_regimen')->references('id')->on('listaopciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nivel');

    }
};
