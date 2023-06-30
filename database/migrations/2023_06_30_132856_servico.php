<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /*
    id_serv
    descricao
    tipo_serv
    id_perfil foreign
    cod_serv
    */
    public function up(): void
    {
        DB::statement("
        CREATE TABLE servico (
            id_serv SERIAL PRIMARY KEY,
            descricao VARCHAR(30) NOT NULL,
            tipo_serv VARCHAR(30) NOT NULL,
            cod_serv INT NOT NULL,
            id_perfil INT NOT NULL,
            FOREIGN KEY (id_perfil) REFERENCES perfil(id)
        );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE servico');
    }
};
