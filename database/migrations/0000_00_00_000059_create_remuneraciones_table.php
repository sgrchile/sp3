<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemuneracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_REM_REMUNERACIONES', function (Blueprint $table) {
            $table->increments('REM_ID');
            $table->date('REM_FECHA_EMISION');
            $table->integer('REM_VALOR_TOTAL_HAB');
            $table->integer('REM_VALOR_TOTAL_DES');
            $table->integer('REM_SUELDO_LIQUIDO');
            $table->integer('REM_SUELDO_BASE');
            $table->integer('REM_BONO_PRODUCCION');
            $table->integer('REM_GRATIFICACION_MENSUAL');
            $table->integer('REM_T_HAB_IMP_Y_TRIBUT');
            $table->integer('REM_T_MOVILIZACION');
            $table->integer('REM_VIATICO_AGUINALDO');
            $table->integer('REM_T_HAB_N_IMP_Y_N_TRIBUT');
            $table->integer('REM_T_FONDO_PENSION');
            $table->integer('REM_AFC_TRAB_0');
            $table->integer('REM_T_LEYES_SOCIALES');
            $table->integer('REM_ANTICIPO_SUELDO');
            $table->integer('REM_AGUINALDO');

            $table->string('REM_PRO_RUT', 10);
            $table->foreign('REM_PRO_RUT')->references('PRO_RUN')->on('PRO_PROVEEDOR');

            $table->integer('REM_MES')->unsigned();
            $table->foreign('REM_MES')->references('MES_ID')->on('RH_MES');

            $table->integer('REM_ANHO')->unsigned();
            $table->foreign('REM_ANHO')->references('ANH_ID')->on('RH_ANHO');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_REM_REMUNERACIONES');
    }
}
