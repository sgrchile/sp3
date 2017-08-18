<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenciasMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_LM_LICENCIAS_MEDICAS', function (Blueprint $table) {
            $table->increments('LM_ID');
            $table->text('LM_DESC');
            $table->date('LM_INICIO');
            $table->date('LM_TERMINO');
            $table->string('LM_ESTADO', 45);

            $table->integer('LM_MLC_ID')->unsigned();
            $table->foreign('LM_MLC_ID')->references('MLC_ID')->on('RH_MLC_MOTIVO_LICENCIA');

            $table->string('LM_PER_RUT', 10);
            $table->foreign('LM_PER_RUT')->references('PRO_RUN')->on('PRO_PROVEEDOR');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_LM_LICENCIAS_MEDICAS');
    }
}
