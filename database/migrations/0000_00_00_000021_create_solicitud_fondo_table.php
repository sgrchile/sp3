<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudFondoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SF_SOLICITUD_FONDO', function (Blueprint $table) {
            $table->increments('SF_SOLICITUD_ID');
            $table->string('SF_ASOCIADO_A', 45)->nullable();
            $table->string('SF_RECEPTOR', 45);
            $table->string('SF_N_CTA_RECEPTOR', 45);
            $table->string('SF_SOLICITANTE_RUT', 10);
            $table->string('SF_RECEPTOR_RUT', 10);
            $table->integer('SF_MONTO');
            $table->date('SF_FECHA');
            $table->text('SF_DESC');
            $table->integer('SF_MONTO_RENDIDO')->nullable();
            $table->integer('SF_DIFERENCIA')->nullable();

            $table->integer('SF_CAU_ID')->unsigned();
            $table->foreign('SF_CAU_ID')->references('CAU_ID')->on('CAU_CAUSA');

            $table->integer('SF_EMP_ID')->unsigned();
            $table->foreign('SF_EMP_ID')->references('EMP_ID')->on('EMP_EMPRESA');

            $table->integer('SF_BCO_ID')->unsigned();
            $table->foreign('SF_BCO_ID')->references('BCO_ID')->on('BCO_BANCO');

            $table->integer('SF_TIPO_CTA_BCO')->unsigned();
            $table->foreign('SF_TIPO_CTA_BCO')->references('TCTA_BCO')->on('TCTA');

            $table->integer('SF_EST')->unsigned();
            $table->foreign('SF_EST')->references('EST_ID')->on('EST_ESTADO');

            $table->integer('SF_CTAC')->unsigned();
            $table->foreign('SF_CTAC')->references('CTAE_ID')->on('CTAE_CUENTA_EMPRESA');

            $table->integer('SF_OT_ID')->nullable()->unsigned();
            $table->foreign('SF_OT_ID')->references('OT_ID')->on('OT_ORDEN_TRABAJO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SF_SOLICITUD_FONDO');
    }
}
