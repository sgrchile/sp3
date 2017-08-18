<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdelantoProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_ADPROV_ADELANTO_PROVEEDOR', function (Blueprint $table) {
            $table->increments('ADPROV_ID');
            $table->integer('ADPROV_VALOR');
            $table->string('ADPROV_ESTADO', 45);
            $table->text('ADPROV_MOTIVO');
            $table->date('ADPROV_FECHA');

            $table->string('BONOS_PRO_RUN', 10);
            $table->foreign('BONOS_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_ADPROV_ADELANTO_PROVEEDOR');
    }
}
