<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosEspecialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_PRMSE_PERMISOS_ESPECIALES', function (Blueprint $table) {
            $table->increments('PRMSE_COD');
            $table->string('PRMSE_MOTIVO', 45);
            $table->date('PRMSE_INICIO');
            $table->date('PRMSE_FIN');
            $table->string('PRMSE_ESTADO', 45);

            $table->string('PRMSE_PERSONAL_PER_RUT', 10);
            $table->foreign('PRMSE_PERSONAL_PER_RUT')->references('PRO_RUN')->on('PRO_PROVEEDOR');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PRMSE_PERMISOS_ESPECIALES');
    }
}
