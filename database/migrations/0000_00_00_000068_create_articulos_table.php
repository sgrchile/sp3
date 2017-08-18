<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('INV_ART_ARTICULOS', function (Blueprint $table) {

            $table->increments('ART_ID');
            $table->string('ART_DESC');
            $table->integer('ART_COSTO');
            $table->string('ART_MARCA');
            $table->string('ART_TIPO');
            $table->string('ART_CANTIDAD');
            $table->integer('ART_OC_COD')->unsigned();

            $table->foreign('ART_OC_COD')->references('OC_COD')->on('INV_OC_ORDEN_DE_COMPRA');

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
           Schema::dropIfExists('INV_ART_ARTICULOS');
    }
}
