<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id('id');
            $table->integer('rubro_id')->unsigned();
            $table->integer('departamento_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->text('nombre_comercio');
            $table->text('direccion');
            $table->text('forma_de_pago');
            $table->text('metodo_envio');
            $table->text('tecnologia_venta_producto');
            $table->text('publicidad_de_producto');
            $table->text('fue_util_para_el_negocio');
            $table->text('noto_aumento_de_ventas');
            $table->text('siguio_utlizando');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('formularios');
    }
}
