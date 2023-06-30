<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
    id (chave prim)
    id_usuario (foreign) (chave)
    */
    public function up(): void
    {
        DB::statement("
        CREATE TABLE funcionario (
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
        DB::statement('DROP TABLE funcionario');
    }
};
