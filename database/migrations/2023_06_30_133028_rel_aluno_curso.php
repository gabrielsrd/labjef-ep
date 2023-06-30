<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /*
    id (chave prim)
    data_inic (chave)
    data_fim (nullable)
    nota_ingresso
    id_curso (foreign) (chave)
    id_aluno (foreign) (chave)
    */
    public function up(): void
    {
        DB::statement("
        CREATE TABLE rel_aluno_curso (
            id SERIAL PRIMARY KEY,
            data_inic DATE NOT NULL,
            data_fim DATE NULL,
            nota_ingresso INT NOT NULL,
            id_curso INT NOT NULL,
            id_aluno INT NOT NULL,
            FOREIGN KEY (id_curso) REFERENCES curso(id),
            FOREIGN KEY (id_aluno) REFERENCES aluno(id)
        );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE rel_aluno_curso');
    }
};
