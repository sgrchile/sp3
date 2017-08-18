<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('INV_V_VOUCHER', function (Blueprint $table) {

          $table->increments('V_ID');
          $table->date('V_FECHA');
          $table->integer('V_TOTAL_BRUTO');
          $table->integer('V_TOTAL_NETO');
          $table->integer('V_TOTAL_COMISION');
          $table->integer('V_IVA');
          $table->string('V_PRO_RUN',10);
          $table->integer('V_FP_ID')->unsigned();
          $table->string('V_ESTADO',45);

          $table->foreign('V_FP_ID')->references('FP_ID')->on('INV_FP_FORMA_DE_PAGO');
          $table->foreign('V_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');
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
        Schema::dropIfExists('INV_V_VOUCHER');
    }
}
