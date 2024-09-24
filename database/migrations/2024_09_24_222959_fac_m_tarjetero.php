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
        Schema::create('fac_m_tarjetero', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('historia', 20);
            $table->unsignedBigInteger('id_persona'); 
            $table->unsignedBigInteger('id_regimen'); 
            $table->unsignedBigInteger('id_eps')->nullable(); 
            $table->unsignedBigInteger('id_nivel')->nullable(); 
            $table->timestamps();
            $table->foreign('id_persona')->references('id')->on('gen_m_persona')->onDelete('cascade');
            $table->foreign('id_regimen')->references('id')->on('gen_p_lista_opcion')->onDelete('cascade');
            $table->foreign('id_eps')->references('id')->on('gen_p_eps')->onDelete('cascade');
            $table->foreign('id_nivel')->references('id')->on('fac_p_nivel')->onDelete('cascade');
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
