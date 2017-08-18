<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoPendienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DCP_DOCUMENTOS_PENDIENTES', function (Blueprint $table) {
            $table->increments('DCP_ID');
            $table->string('DCP_FOLIO', 45);
            $table->string('DCP_GLOSA', 45);
            $table->date('DCP_FECHA');
            $table->integer('DCP_NETO');
            $table->integer('DCP_IVA');
            $table->integer('DCP_TOTAL');

            $table->integer('EMP_EMPRESA_EMP_ID')->unsigned();
            $table->foreign('EMP_EMPRESA_EMP_ID')->references('EMP_ID')->on('EMP_EMPRESA');

            $table->integer('OT_ORDEN_TRABAJO_OT_ID')->unsigned();
            $table->foreign('OT_ORDEN_TRABAJO_OT_ID')->references('OT_ID')->on('OT_ORDEN_TRABAJO');

            $table->integer('TDC_TIPO_DOC_TDC_ID')->unsigned();
            $table->foreign('TDC_TIPO_DOC_TDC_ID')->references('TDC_ID')->on('TDC_TIPO_DOC');

            $table->integer('DCP_EST')->unsigned();
            $table->foreign('DCP_EST')->references('EST_ID')->on('EST_ESTADO');

            $table->string('DCP_PRO_RUN');
            $table->foreign('DCP_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DCP_DOCUMENTOS_PENDIENTES');
    }
}
