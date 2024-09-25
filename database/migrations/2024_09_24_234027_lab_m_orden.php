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
        Schema::create('lab_m_ordenes', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('id_documento')->nullable(); 
            $table->unsignedBigInteger('id_profesional_ordena')->nullable(); 
            $table->decimal('orden', 10, 0); 
            $table->timestamp('fecha'); 
            $table->unsignedBigInteger('id_historia')->nullable(); 
            $table->boolean('profesional_externo')->default(false); 
            $table->timestamps(); 
            $table->foreign('id_documento')->references('id')->on('gen_p_documentos')->onDelete('set null');
            $table->foreign('id_historia')->references('id')->on('fac_m_tarjeteros')->onDelete('set null');
            $table->foreign('id_profesional_ordena')->references('id')->on('fac_p_profesionales')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_m_orden');
    }
};
