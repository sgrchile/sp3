<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertaServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OFSER_OFERTA_SERVICIO', function (Blueprint $table) {
            $table->increments('OFSER_COD');
            $table->text('OFSER_DESCRIPCION');
            $table->string('OFSER_DIAS_LABORALES', 90);
            $table->time('OFSER_HORARIOS_TRABAJO_INI');
            $table->time('OFSER_HORARIOS_TRABAJO_FIN');
            $table->string('OFSER_COBERTURA_SERVICIO', 45);
            $table->string('OFSER_RAZ_COBRO', 45);
            $table->string('OFSER_VALOR', 45);
            $table->string('OFSER_CALIFICACION', 45)->nullable();
            $table->text('OFSER_COMENTARIO')->nullable();

            $table->string('OFSER_PRO_RUN', 10);
            $table->foreign('OFSER_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');

            $table->integer('OFSER_ESTA_ID')->unsigned();
            $table->foreign('OFSER_ESTA_ID')->references('ESTA_COD')->on('ESTA_ESTADO_OFERTAS_ADMIN');

            $table->integer('OFSER_ESTP_ID')->unsigned();
            $table->foreign('OFSER_ESTP_ID')->references('ESTP_COD')->on('ESTP_ESTADO_OFERTA_PROV');

            $table->integer('OFSER_OR_COD')->unsigned();
            $table->foreign('OFSER_OR_COD')->references('OR_COD')->on('OR_ORIENTACION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OFSER_OFERTA_SERVICIO');
    }
}
