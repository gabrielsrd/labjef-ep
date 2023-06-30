<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /*
    id_disc (chave prim)
    codigo (chave)
    ementa
    data_criacao
    nome
    */
    public function up(): void
    {
        DB::statement("
        CREATE TABLE disciplina (
            id SERIAL PRIMARY KEY,
            codigo INT NOT NULL UNIQUE,
            ementa VARCHAR(1000) NOT NULL,
            data_criacao DATE NOT NULL,
            nome VARCHAR(50) NOT NULL
        );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE disciplina');
    }
};
