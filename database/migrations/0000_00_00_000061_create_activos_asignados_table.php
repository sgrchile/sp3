<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivosAsignadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_AA_ACTIVOS_ASIGNADOS', function (Blueprint $table) {
            $table->increments('AA_COD');
            $table->date('AA_FECHA_ASIG');

            $table->string('AA_PRO_RUN', 10);
            $table->foreign('AA_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');

            $table->integer('AA_ACT_ID')->unsigned();
            $table->foreign('AA_ACT_ID')->references('ACT_ID')->on('INV_ACT_ACTIVOS_INTERNOS');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_AA_ACTIVOS_ASIGNADOS');
    }
}
