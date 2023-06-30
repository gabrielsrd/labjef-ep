<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /*
    id_curso
    cod_curso unique
    */
    public function up(): void
    {
        DB::statement("
        CREATE TABLE curso (
            id SERIAL PRIMARY KEY,
            cod_curso INT NOT NULL UNIQUE
        );
        ");    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE curso');
    }
};
