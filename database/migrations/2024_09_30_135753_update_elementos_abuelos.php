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
        Schema::table('elementos', function (Blueprint $table) {
            $table->string('procedencia_abuelo_paterno')->nullable()->after("ocupacion_madre");
            $table->string('procedencia_abuelo_materno')->nullable()->after("procedencia_abuelo_paterno");
            $table->string('procedencia_abuela_paterna')->nullable()->after("procedencia_abuelo_materno");
            $table->string('procedencia_abuela_materna')->nullable()->after("procedencia_abuela_paterna");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('elementos', function (Blueprint $table) {
            $table->dropColumn('procedencia_abuelo_paterno');
            $table->dropColumn('procedencia_abuelo_materno');
            $table->dropColumn('procedencia_abuela_paterna');
            $table->dropColumn('procedencia_abuela_materna');
        });
    }
};
