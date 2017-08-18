<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenDeCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INV_OC_ORDEN_DE_COMPRA', function (Blueprint $table) {

          $table->increments('OC_COD');
          $table->string('OC_PRO_RUN',10);
          $table->integer('OC_ARTICULO_ID');
          $table->date('OC_FECHA_CREACION');
          $table->integer('OC_CANTIDAD');
          $table->integer('OC_TOTAL');
          $table->string('OC_ESTADO',45);
          $table->string('OC_EJECUCION',45);


          $table->foreign('OC_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');

          //
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
       Schema::dropIfExists('INV_OC_ORDEN_DE_COMPRA');
    }
}
