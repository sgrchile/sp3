<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OT_ORDEN_TRABAJO', function (Blueprint $table) {
            $table->increments('OT_ID');
            $table->string('OT_OC', 45);
            $table->text('OT_DESC');
            $table->date('OT_FECHA_INI');
            $table->date('OT_FECHA_FIN')->nullable();
            $table->integer('OT_MONTO_NETO');
            $table->integer('OT_MARGEN_CASH')->nullable();
            $table->float('OT_MARGEN_PORCENTUAL')->nullable();

            $table->string('OT_CLI_RUT');
            $table->foreign('OT_CLI_RUT')->references('CLI_RUT')->on('CLI_CLIENTE');

            $table->string('OT_PER_RUT_ENCARGADO', 10)->nullable();
            $table->foreign('OT_PER_RUT_ENCARGADO')->references('PRO_RUN')->on('PRO_PROVEEDOR');

            $table->integer('OT_CENTRO_NEGOCIO_ID')->unsigned();
            $table->foreign('OT_CENTRO_NEGOCIO_ID')->references('CT_ID')->on('CT_CENTRO_NEGOCIO');

            $table->integer('OT_EST_ID')->unsigned();
            $table->foreign('OT_EST_ID')->references('EST_ID')->on('EST_ESTADO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OT_ORDEN_TRABAJO');
    }
}
