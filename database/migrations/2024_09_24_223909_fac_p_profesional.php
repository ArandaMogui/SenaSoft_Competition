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
        Schema::create('fac_p_profesional', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('codigo', 4);
            $table->unsignedBigInteger('id_persona')->nullable(); 
            $table->string('registro_medico', 20)->nullable(); 
            $table->unsignedBigInteger('id_tipo_prof'); 
            $table->timestamps(); 
            $table->foreign('id_persona')->references('id')->on('gen_m_persona')->onDelete('set null');
            $table->foreign('id_tipo_prof')->references('id')->on('gen_p_lista_opcion')->onDelete('cascade');
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
