<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacacionesPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('RH_VP_VACACIONES_PERSONAL', function (blueprint $table) {
            $table->increments('VP_COD');
            $table->date('VP_INICIO');
            $table->date('VP_TERMINO');
            $table->string('VP_ESTADO', 45);

            $table->string('VP_PER_RUT', 10);
            $table->foreign('VP_PER_RUT')->references('PRO_RUN')->on('PRO_PROVEEDOR');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_VP_VACACIONES_PERSONAL');
    }
}
