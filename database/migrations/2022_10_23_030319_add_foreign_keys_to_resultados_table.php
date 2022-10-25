<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resultados', function (Blueprint $table) {
            $table->foreign(['encuestado_id'], 'fk_respuestas_encuestado1')->references(['id'])->on('encuestado')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['respuestas_id'], 'fk_resultados_respuestas1')->references(['id'])->on('respuestas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resultados', function (Blueprint $table) {
            $table->dropForeign('fk_respuestas_encuestado1');
            $table->dropForeign('fk_resultados_respuestas1');
        });
    }
}
