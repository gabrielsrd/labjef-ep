<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * id
     * tipo_perf
     * cod_perf
     */

     
    public function up(): void
    {
         DB::statement("
         CREATE TABLE perfil (
            id SERIAL PRIMARY KEY,
            tipo_perf VARCHAR(30) NOT NULL,
            cod_perf INT NOT NULL
        )");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE perfil');
    }
};
