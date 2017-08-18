<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('PROD_PRODUCTOS', function (Blueprint $table) {
            $table->increments('PROD_COD');
            $table->string('PROD_DESC', 45);
            $table->text('PROD_INFO');
            $table->string('PROD_MARCA', 45);
            $table->integer('PROD_PRECIO_VENTA');
            $table->integer('PROD_PRECIO_COSTO');
            $table->string('PROD_CODIGO_BARRA', 45);
            $table->integer('PROD_EXISTENCIAS');
            $table->text('PROD_URL_FOTO');
            $table->integer('PROD_COMISION');
            $table->date('PROD_FECHA_CREACION');
            $table->string('PROD_MONEDA_VENTA', 45);
            $table->integer('PROD_IMPUESTO');
            $table->string('PROD_GARANTIAS', 45);
            $table->string('PROD_PUBLICO_OBJETIVO', 45);
            $table->string('PROD_ESTADO', 45);

            $table->string('PROD_PRO_RUN', 10);
            $table->foreign('PROD_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PROD_PRODUCTOS');
    }
}
