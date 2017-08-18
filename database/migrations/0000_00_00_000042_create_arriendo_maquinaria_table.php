<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArriendoMaquinariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ARM_ARRIENDO_MAQUINARIA', function (Blueprint $table) {
            $table->increments('ARM_ID');
            $table->text('ARM_DESCRIPCION');
            $table->string('ARM_TP_VEHICULO', 45);
            $table->string('ARM_MARCA', 45);
            $table->integer('ARM_ANHO');
            $table->string('ARM_SEGUROS_ASOCIADOS', 45);
            $table->string('ARM_OPERARIO', 45);
            $table->string('ARM_LICENCIAS_CONDUCIR', 45);
            $table->text('ARM_CURSOS');
            $table->string('ARM_DIAS_LABORALES', 45);
            $table->time('ARM_HOR_INI');
            $table->time('ARM_HOR_FIN');
            $table->string('ARM_COB_SERVICIO', 45);
            $table->string('ARM_RAZON_COBRO', 45);
            $table->integer('ARM_VALOR');
            $table->string('ARM_CALIFICACION', 45)->nullable();
            $table->text('ARM_COMENTARIO')->nullable();

            $table->string('ARM_PRO_RUN', 10);
            $table->foreign('ARM_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');

            $table->integer('ARM_ESTA_ID')->unsigned();
            $table->foreign('ARM_ESTA_ID')->references('ESTA_COD')->on('ESTA_ESTADO_OFERTAS_ADMIN');

            $table->integer('ARM_ESTP_ID')->unsigned();
            $table->foreign('ARM_ESTP_ID')->references('ESTP_COD')->on('ESTP_ESTADO_OFERTA_PROV');

            $table->integer('ARM_OR_COD')->unsigned();
            $table->foreign('ARM_OR_COD')->references('OR_COD')->on('OR_ORIENTACION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ARM_ARRIENDO_MAQUINARIA');
    }
}
