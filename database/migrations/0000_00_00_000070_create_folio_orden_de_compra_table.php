<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFolioOrdenDeCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('INV_FOL_FOLIO_ORDEN_DE_COMPRA', function (Blueprint $table) {

          $table->increments('FOL_COD');
          $table->integer('FOL_N_FOLIO');
          $table->integer('FOL_EMP_ID')->unsigned();
          $table->integer('FOL_OC_COD')->unsigned();

          $table->foreign('FOL_EMP_ID')->references('EMP_ID')->on('EMP_EMPRESA');
          $table->foreign('FOL_OC_COD')->references('OC_COD')->on('INV_OC_ORDEN_DE_COMPRA');



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
         Schema::dropIfExists('INV_FOL_FOLIO_ORDEN_DE_COMPRA');
    }
}
