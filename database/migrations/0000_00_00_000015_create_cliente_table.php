<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CLI_CLIENTE', function (Blueprint $table) {
            $table->increments('CLI_ID')->key();
            $table->string('CLI_RUT', 10)->primary();
            $table->string('CLI_FONO', 45);
            $table->string('CLI_EMAIL', 100);
            $table->string('CLI_NOMBRE', 90);
            $table->string('CLI_CONTACTO', 90);
            $table->string('CLI_ACT_COMERCIAL', 45);
            $table->text('CLI_DIRECCION');
            $table->integer('CLI_TCTA_BCO')->unsigned();
            $table->string('CLI_SITIO_WEB',45);
            $table->string('CLI_GLOSA',45);
            $table->integer('CLI_RUBRO')->unsigned();
            $table->integer('CLI_SUB_RUBRO')->unsigned();
            $table->integer('CLI_ACTIVIDAD')->unsigned();
            $table->integer('CLI_BANCO')->unsigned();
            $table->string('CLI_NRO_CTA',45);
            $table->string('CLI_ORIGEN',45);
            $table->integer('CLI_PAIS')->unsigned();
            $table->integer('CLI_REGION')->unsigned();
            $table->integer('CLI_PROVINCIA')->unsigned();
            $table->integer('CLI_CIUDAD')->unsigned();


            $table->foreign('CLI_TCTA_BCO')->references('TCTA_BCO')->on('TCTA');
            $table->foreign('CLI_BANCO')->references('BCO_ID')->on('BCO_BANCO');
            $table->foreign('CLI_PAIS')->references('PAI_COD')->on('PAI_PAIS');
            $table->foreign('CLI_REGION')->references('REG_COD')->on('REG_REGION');
            $table->foreign('CLI_PROVINCIA')->references('PV_COD')->on('PV_PROVINCIA');
            $table->foreign('CLI_CIUDAD')->references('CIU_COD')->on('CIU_CIUDAD');
            $table->foreign('CLI_RUBRO')->references('RUB_COD')->on('RUB_RUBRO');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CLI_CLIENTE');
    }
}
