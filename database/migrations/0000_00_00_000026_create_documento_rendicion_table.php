<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoRendicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DOC_DOCUMENTO_RENDICION', function (Blueprint $table) {
            $table->increments('DOC_ID');
            $table->string('DOC_RUT', 10);
            $table->string('DOC_PROVEEDOR', 45);
            $table->date('DOC_FECHA')->nullable();
            $table->integer('DOC_N_DOC')->nullable();
            $table->integer('DOC_MONTO')->nullable();

            $table->integer('DOC_EMP_ID')->unsigned();
            $table->foreign('DOC_EMP_ID')->references('EMP_ID')->on('EMP_EMPRESA');

            $table->integer('DOC_SOLICITUD_ID')->unsigned();
            $table->foreign('DOC_SOLICITUD_ID')->references('SF_SOLICITUD_ID')->on('SF_SOLICITUD_FONDO');

            $table->integer('DOC_TIPO_DOC')->unsigned();
            $table->foreign('DOC_TIPO_DOC')->references('TDC_ID')->on('TDC_TIPO_DOC');

            $table->integer('DOC_TIPO_GASTO')->unsigned();
            $table->foreign('DOC_TIPO_GASTO')->references('TPG_ID')->on('TPG_TIPO_GASTO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DOC_DOCUMENTO_RENDICION');
    }
}
