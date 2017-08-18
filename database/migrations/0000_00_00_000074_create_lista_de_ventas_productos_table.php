<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaDeVentasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('INV_LVP_LISTA_VENTA_PRODUCTO', function (Blueprint $table) {
          $table->integer('LVP_V_ID')->unsigned();
          $table->integer('LVP_PROD_COD')->unsigned();
          $table->integer('LVP_PROD_CANTIDAD');
          $table->integer('LVP_TOTAL_VENTA');

          $table->foreign('LVP_PROD_COD')->references('PROD_COD')->on('INV_PROD_PRODUCTOS');
          $table->foreign('LVP_V_ID')->references('V_ID')->on('INV_V_VOUCHER');

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
        Schema::dropIfExists('INV_LVP_LISTA_VENTA_PRODUCTO');
    }
}
