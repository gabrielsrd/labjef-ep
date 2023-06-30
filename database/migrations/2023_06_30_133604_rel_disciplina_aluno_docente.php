<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE disciplina_aluno_docente');
    }
};
