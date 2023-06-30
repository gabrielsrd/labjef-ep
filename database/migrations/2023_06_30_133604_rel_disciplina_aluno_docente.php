<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
    id (chave prim)
    id_aluno (foreign) (chave)
    id_docente (foreign) (chave)
    id_disc (foreign) (chave)
    data_inic (chave)
    data_fim
    nota
    */
    public function up(): void
    {
        DB::statement("
        CREATE TABLE disciplina_aluno_docente (
            id SERIAL PRIMARY KEY,
            id_aluno INT NOT NULL,
            id_docente INT NOT NULL,
            id_disc INT NOT NULL,
            data_inic DATE NOT NULL,
            data_fim DATE NULL,
            nota INT NULL,
            FOREIGN KEY (id_aluno) REFERENCES aluno(id),
            FOREIGN KEY (id_docente) REFERENCES docente(id),
            FOREIGN KEY (id_disc) REFERENCES disciplina(id)
        );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE disciplina_aluno_docente');
    }
};
