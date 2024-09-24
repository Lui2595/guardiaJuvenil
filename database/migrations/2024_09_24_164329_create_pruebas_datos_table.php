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
        Schema::create('pruebas_datos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pruebas_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('instrucciones');
            $table->string('medida');
            $table->string('resultado');
            $table->timestamps();

            $table->foreign('pruebas_id')->references('id')->on('pruebas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pruebas_datos');
    }
};
