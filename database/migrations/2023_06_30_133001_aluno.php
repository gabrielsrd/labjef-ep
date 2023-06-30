<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /*
    id_aluno (chave prim)
    id_usuario (foreign) (chave)
    */
    public function up(): void
    {
        DB::statement("
        CREATE TABLE aluno (
            id SERIAL PRIMARY KEY,
            id_usuario INT NOT NULL,
            FOREIGN KEY (id_usuario) REFERENCES usuario(id)
        );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE aluno');
    }
};
