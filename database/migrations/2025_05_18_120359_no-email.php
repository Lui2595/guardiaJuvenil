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
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_email_unique');
            $table->string('email')->nullable()->change();
        });


        Schema::table('elementos', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
            $table->string('telefono_padre')->nullable()->change();
            $table->string('telefono_madre')->nullable()->change();
            $table->string('ocupacion_padre')->nullable()->change();
            $table->string('ocupacion_madre')->nullable()->change();
            $table->string('lesion')->nullable()->change();
            $table->string('servicio_medico')->nullable()->change();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable(false)->change();
            $table->unique('email');
        });
        Schema::table('elementos', function (Blueprint $table) {
            $table->string('email')->nullable(false)->change();
            $table->string('telefono_padre')->nullable(false)->change();
            $table->string('telefono_madre')->nullable(false)->change();
            $table->string('ocupacion_padre')->nullable(false)->change();
            $table->string('ocupacion_madre')->nullable(false)->change();
            $table->string('lesion')->nullable(false)->change();
            $table->string('servicio_medico')->nullable(false)->change();
        });
    }
};
