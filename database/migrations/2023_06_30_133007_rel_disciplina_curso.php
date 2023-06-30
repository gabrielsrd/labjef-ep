<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /*
    id (chave prim)
    id_disc (foreign) (chave)
    id_curso (foreign) (chave)
    */
    public function up(): void
    {
        DB::statement("
        CREATE TABLE rel_disciplina_curso (
            id SERIAL PRIMARY KEY,
            id_disc INT NOT NULL,
            id_curso INT NOT NULL,
            FOREIGN KEY (id_disc) REFERENCES disciplina(id),
            FOREIGN KEY (id_curso) REFERENCES curso(id)
        );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE rel_disciplina_curso');
    }
};
