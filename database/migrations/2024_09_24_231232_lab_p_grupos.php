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
        Schema::create('lab_p_grupos', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('codigo', 2); 
            $table->string('nombre', 60); 
            $table->boolean('habilita')->default(true); 
            $table->timestamps(); 
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
