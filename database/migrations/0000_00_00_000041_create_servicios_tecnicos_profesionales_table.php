<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTecnicosProfesionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('STP_SERVICIOS_TECNICOS_PROFESIONALES', function (Blueprint $table) {
            $table->increments('STP_COD');
            $table->text('STP_DESCRIPCION');
            $table->text('STP_FORMACION');
            $table->string('STP_FORMACION_ESTABLECIMIENTO', 45);
            $table->string('STP_CARRERA', 45);
            $table->integer('STP_ANHOS_EXPERIENCIA');
            $table->text('STP_FORTALEZAS');
            $table->text('STP_DEBILIDADES');
            $table->text('STP_DESC_EXP_LABORAL');
            $table->string('STP_BUSC_O_OF', 45);
            $table->text('STP_CURSOS_PST_GRADOS');
            $table->text('STP_COB_SERV');
            $table->text('STP_OFREZCO');
            $table->integer('STP_VALOR');

            $table->string('STP_CALIFICACION', 45)->nullable();
            $table->text('STP_COMENTARIO')->nullable();


            $table->string('STP_PRO_RUN', 10);
            $table->foreign('STP_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');

            $table->integer('STP_ESTA_ID')->unsigned();
            $table->foreign('STP_ESTA_ID')->references('ESTA_COD')->on('ESTA_ESTADO_OFERTAS_ADMIN');

            $table->integer('STP_ESTP_ID')->unsigned();
            $table->foreign('STP_ESTP_ID')->references('ESTP_COD')->on('ESTP_ESTADO_OFERTA_PROV');

            $table->integer('STP_OR_COD')->unsigned();
            $table->foreign('STP_OR_COD')->references('OR_COD')->on('OR_ORIENTACION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('STP_SERVICIOS_TECNICOS_PROFESIONALES');
    }
}
