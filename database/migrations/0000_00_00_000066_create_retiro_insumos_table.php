<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetiroInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('INV_RI_RETIRO_INSUMOS', function (Blueprint $table) {

              $table->increments('RI_ID');
              $table->integer('RI_INS_COD')->unsigned();
              $table->string('RI_PRO_RUN',10);
              $table->date('RI_FECHA_SOLICITUD');
              $table->date('RI_FECHA_ENTREGA');
              $table->string('RI_ESTADO', 45);
              $table->string('RI_MOTIVO');
              $table->integer('RI_CANTIDAD');
              $table->integer('RI_TOTAL');

              $table->foreign('RI_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');
              $table->foreign('RI_INS_COD')->references('INS_COD')->on('INV_INS_INSUMOS');
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
           Schema::dropIfExists('INV_RI_RETIRO_INSUMOS');
    }
}
