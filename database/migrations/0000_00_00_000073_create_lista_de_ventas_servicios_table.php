<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaDeVentasServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('INV_LVS_LISTA_VENTA_SERVICIOS', function (Blueprint $table) {

            $table->integer('LVS_V_ID')->unsigned();
            $table->integer('LVS_SER_COD')->unsigned();
            $table->integer('LVS_SER_CANTIDAD');
            $table->integer('LVS_TOTAL_VENTA');

            $table->foreign('LVS_SER_COD')->references('SER_COD')->on('INV_SER_SERVICIOS');
            $table->foreign('LVS_V_ID')->references('V_ID')->on('INV_V_VOUCHER');

          });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('INV_LVS_LISTA_VENTA_SERVICIOS');
    }
}
