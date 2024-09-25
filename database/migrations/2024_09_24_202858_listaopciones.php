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
        Schema::create('listaopciones', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id'); 
            $table->string('variable', 50);            
            $table->string('descripcion', 100);
            $table->smallInteger('valor');
            $table->string('nombre', 100);
            $table->string('abreviacion', 10);
            $table->boolean('habilita')->default(true);
            $table->timestamps(); 
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listaopcion');

    }
};
