<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertaArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OFAR_OFERTA_ARTICULOS', function (Blueprint $table) {
            $table->increments('OFAR_ID');

            $table->text('OFAR_DESC');
            $table->string('OFAR_RAZON_COBRO', 45);
            $table->text('OFAR_DIAS_ENTREGA');
            $table->time('OFAR_HORARIO_ENT_INI');
            $table->time('OFAR_HORARIO_ENT_FIN');
            $table->text('OFAR_CAPACIDAD');
            $table->integer('OFAR_VALOR');
            $table->string('OFAR_CALIFICACION', 45)->nullable();
            $table->text('OFAR_COMENTARIO')->nullable();

            $table->string('OFAR_PRO_RUN', 10);
            $table->foreign('OFAR_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');

            $table->integer('OFAR_ESTA_ID')->unsigned();
            $table->foreign('OFAR_ESTA_ID')->references('ESTA_COD')->on('ESTA_ESTADO_OFERTAS_ADMIN');

            $table->integer('OFAR_ESTP_ID')->unsigned();
            $table->foreign('OFAR_ESTP_ID')->references('ESTP_COD')->on('ESTP_ESTADO_OFERTA_PROV');

            $table->integer('OFAR_OR_COD')->unsigned();
            $table->foreign('OFAR_OR_COD')->references('OR_COD')->on('OR_ORIENTACION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OFAR_OFERTA_ARTICULOS');
    }
}
