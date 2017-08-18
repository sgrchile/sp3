<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FCT_FACTURA', function (Blueprint $table) {
            $table->increments('FCT_ID');
            $table->date('FCT_FECHA');
            $table->string('FCT_FOLIO', 45);
            $table->string('FCT_GLOSA', 45);
            $table->integer('FCT_NETO');
            $table->integer('FCT_IVA');
            $table->integer('FACT_TOTAL');

            $table->integer('FCT_EMP_ID')->unsigned();
            $table->foreign('FCT_EMP_ID')->references('EMP_ID')->on('EMP_EMPRESA');

            $table->integer('FCT_TP_ID')->unsigned();
            $table->foreign('FCT_TP_ID')->references('TFCT_ID')->on('TFCT_TIPO_FACTURA');

            $table->integer('TDC_TIPO_DOC_TDC_ID')->unsigned();
            $table->foreign('TDC_TIPO_DOC_TDC_ID')->references('TDC_ID')->on('TDC_TIPO_DOC');

            $table->string('FCT_CLI_RUT');
            $table->foreign('FCT_CLI_RUT')->references('CLI_RUT')->on('CLI_CLIENTE');

            $table->integer('FCT_EST_ID')->unsigned();
            $table->foreign('FCT_EST_ID')->references('EST_ID')->on('EST_ESTADO');

            $table->integer('FCT_OT_ID')->unsigned();
            $table->foreign('FCT_OT_ID')->references('OT_ID')->on('OT_ORDEN_TRABAJO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FCT_FACTURA');
    }
}
