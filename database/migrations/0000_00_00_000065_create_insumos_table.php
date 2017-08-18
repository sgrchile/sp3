<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('INV_INS_INSUMOS', function (Blueprint $table) {

            $table->increments('INS_COD');
            $table->string('INS_DESC');
            $table->string('INS_PRO_RUN',10);
            $table->string('INS_INFO');
            $table->string('INS_MARCA');
            $table->string('INS_TIPO');
            $table->string('INS_CANTIDAD');
            $table->integer('INS_COSTO');

            $table->foreign('INS_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');


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
         Schema::dropIfExists('INV_INS_INSUMOS');
    }
}
