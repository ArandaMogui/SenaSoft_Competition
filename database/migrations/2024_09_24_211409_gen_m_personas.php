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
        Schema::create('gen_m_personas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('numeroid', 20);
            $table->string('apellido1', 20);
            $table->string('apellido2', 20);
            $table->string('nombre1', 20);
            $table->string('nombre2', 20);
            $table->date('fechanac')->nullable();
            $table->string('direccion', 250)->nullable();
            $table->string('tel_movil', 10)->nullable();
            $table->string('email', 250)->nullable();
            $table->unsignedBigInteger('id_tipoid'); 
            $table->unsignedBigInteger('id_sexobiologico'); 
            $table->timestamps();
            $table->foreign('id_tipoid')->references('id')->on('gen_p_lista_opciones')->onDelete("cascade");
            $table->foreign('id_sexobiologico')->references('id')->on('gen_p_lista_opciones')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void 
    {
        Schema::dropIfExists('gen_m_persona');

    }
};
