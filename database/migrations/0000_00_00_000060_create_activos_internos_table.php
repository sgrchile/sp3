<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivosInternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INV_ACT_ACTIVOS_INTERNOS', function (Blueprint $table) {
            $table->increments('ACT_ID');
            $table->string('ACT_DESC', 45);
            $table->text('ACT_INFO');
            $table->string('ACT_MARCA', 45);
            $table->string('ACT_ESTADO', 45);
            $table->date('ACT_FECHA_INGRESO');
            $table->integer('ACT_VALOR_COMPRA');
            $table->integer('ACT_TASA_DESPRECIACION');
            $table->integer('ACT_VALOR_ACTUAL');
            $table->text('ACT_SEGUROS');
            $table->integer('ACT_VALOR_DE_SALVAMENTO');
            $table->integer('ACT_VIGENCIA');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('INV_ACT_ACTIVOS_INTERNOS');
    }
}
