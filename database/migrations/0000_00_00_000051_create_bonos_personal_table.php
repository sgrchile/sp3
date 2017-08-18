<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonosPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_BONOS_PERSONAL', function (Blueprint $table) {
            $table->increments('BONOS_ID');
            $table->integer('BONOS_TOTAL');
            $table->string('BONOS_ESTADO', 45);
            $table->date('BONOS_FECHA');

            $table->string('BONOS_PRO_RUN', 10);
            $table->foreign('BONOS_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');

            $table->integer('BONOS_BONO_ID')->unsigned();
            $table->foreign('BONOS_BONO_ID')->references('BNS_ID')->on('RH_BONOS');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_BONOS_PERSONAL');
    }
}
