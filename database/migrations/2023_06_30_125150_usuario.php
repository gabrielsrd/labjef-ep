<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        /*
        id
        nome
        login
        senha
        data_nasc
        instituicao
        endereco
        cpf
        */
        DB::statement("
        CREATE TABLE usuario (
            id SERIAL PRIMARY KEY,
            cpf VARCHAR(30) NOT NULL,
            nome VARCHAR(30) NOT NULL,
            login VARCHAR(30) NOT NULL,
            senha VARCHAR(30) NOT NULL,
            data_nasc DATE NOT NULL,
            instituicao VARCHAR(30) NOT NULL,
            endereco VARCHAR(30) NOT NULL
        );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE usuario');
    }
};
