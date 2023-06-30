<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /*
    id (chave prim)
    func_tec (chave)
    id_docente (foreign) (chave)
    */
    public function up(): void
    {
        DB::statement("
        CREATE TABLE funcao_tecnica_docente (
            id SERIAL PRIMARY KEY,
            func_tec VARCHAR(255) NOT NULL,
            id_docente INT NOT NULL,
            FOREIGN KEY (id_docente) REFERENCES docente(id)
        );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE funcao_tecnica_docente');
    }
};
