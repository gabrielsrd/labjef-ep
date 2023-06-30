<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
    id (chave prim)
    data_inic (chave)
    data_fim
    nota_ingresso
    id_curso (foreign) (chave)
    id_aluno (foreign) (chave)
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
        DB::statement('DROP TABLE rel_aluno_curso');
    }
};
