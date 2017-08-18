<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertaServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SER_SERVICIOS', function (Blueprint $table) {
            $table->increments('SER_COD');
            $table->string('SER_DESC', 200);
            $table->string('SER_ESTADO', 45);
            $table->string('SER_UNIDAD_MEDIDA', 45);
            $table->integer('SER_PRECIO_COSTO');
            $table->integer('SER_PRECIO_VENTA');
            $table->integer('SER_CANTIDAD');
            $table->text('SER_TIEMPO_EJECUCION');
            $table->text('SER_GARANTIAS');
            $table->text('SER_PUBLICO_OBJETIVO');
            $table->string('SER_CAPACIDAD_EJECUCION', 45);
            $table->integer('SER_IMPUESTO');
            $table->date('SER_FECHA_CREACION');
            $table->string('SER_MONEDA_VENTA', 45);

            $table->string('SER_PRO_RUN', 10);
            $table->foreign('SER_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SER_SERVICIOS');
    }
}
