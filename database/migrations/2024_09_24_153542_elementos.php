<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('unidad');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('email');
            $table->date('fecha_nacimiento');
            $table->string('celular');
            $table->string('escuela');
            $table->string('grado');
            $table->string('grupo');
            $table->string('promedio')->nullable();
            $table->string('materia_favorita')->nullable();
            $table->string('deporte_favorito')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('lesion');
            $table->text('detalle_lesion')->nullable();
            $table->text('alergia')->nullable();
            $table->string('servicio_medico');
            $table->string('nombre_servicio_medico')->nullable();
            $table->string('nss')->nullable();
            $table->string('religion');
            $table->string('nombre_padre');
            $table->string('telefono_padre');
            $table->string('ocupacion_padre');
            $table->string('nombre_madre');
            $table->string('telefono_madre');
            $table->string('ocupacion_madre');
            $table->string('concentimiento');
            $table->string('contacto_emergencia');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elementos');
    }
};
