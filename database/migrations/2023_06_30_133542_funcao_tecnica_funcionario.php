<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
    id (chave prim)
    func_tec (chave)
    id_func (foreign) (chave)
    */
    public function up(): void
    {
        DB::statement("
        CREATE TABLE funcao_tecnica_funcionario (
            id SERIAL PRIMARY KEY,
            func_tec VARCHAR(255) NOT NULL,
            id_func INT NOT NULL,
            FOREIGN KEY (id_func) REFERENCES funcionario(id)
        );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('funcao_tecnica_funcionario');
    }
};
