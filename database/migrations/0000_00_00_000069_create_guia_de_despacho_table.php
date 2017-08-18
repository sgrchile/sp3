<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuiaDeDespachoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('INV_GD_GUIA_DESPACHO', function (Blueprint $table) {

          $table->increments('GD_COD');
          $table->string('GD_DIRECCION_ENTREGA',45);
          $table->string('GD_EMPRESA_PAQUETERIA',45);
          $table->string('GD_NUMERO_SEGUIMIENTO',45);
          $table->integer('GD_OC_COD')->unsigned();
          $table->string('GD_ESTADO',45);

          $table->foreign('GD_OC_COD')->references('OC_COD')->on('INV_OC_ORDEN_DE_COMPRA');


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
         Schema::dropIfExists('INV_GD_GUIA_DESPACHO');
    }
}
