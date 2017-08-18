<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroMovimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RMOV_REGISTRO_MOVIMIENTO', function (Blueprint $table) {
            $table->increments('RMOV_ID');
            $table->date('RMOV_FECHA');
            $table->integer('RMOV_MONTO');
            $table->string('RMOV_N_CTA', 45);
            $table->string('RMOV_FOLIO', 90);
            $table->string('RMOV_NUMERO_DOCUMENTO', 45);
            $table->text('RMOV_DESC');

            $table->integer('RMOV_EMP_ID')->unsigned();
            $table->foreign('RMOV_EMP_ID')->references('EMP_ID')->on('EMP_EMPRESA');

            $table->integer('RMOV_CTAE')->unsigned();
            $table->foreign('RMOV_CTAE')->references('CTAE_ID')->on('CTAE_CUENTA_EMPRESA');

            $table->integer('RMOV_TMOV_ID')->unsigned();
            $table->foreign('RMOV_TMOV_ID')->references('TMOV_ID')->on('TMOV_TIPO_MOVIMIENTO');

            $table->integer('RMOV_FTE_ID')->unsigned();
            $table->foreign('RMOV_FTE_ID')->references('FTE_ID')->on('FTE_FUENTE');

            $table->integer('RMOV_CAU_ID')->unsigned();
            $table->foreign('RMOV_CAU_ID')->references('CAU_ID')->on('CAU_CAUSA');

            $table->integer('RMOV_EST_ID')->unsigned();
            $table->foreign('RMOV_EST_ID')->references('EST_ID')->on('EST_ESTADO');

            $table->integer('RMOV_TPDOC_ID')->unsigned();
            $table->foreign('RMOV_TPDOC_ID')->references('TDC_ID')->on('TDC_TIPO_DOC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RMOV_REGISTRO_MOVIMIENTO');
    }
}
