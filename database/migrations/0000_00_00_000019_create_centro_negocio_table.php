<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroNegocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CT_CENTRO_NEGOCIO', function (Blueprint $table) {
            $table->increments('CT_ID');
            $table->string('CT_PROCESO', 45);

            $table->integer('CT_EMP_ID')->unsigned();
            $table->foreign('CT_EMP_ID')->references('EMP_ID')->on('EMP_EMPRESA');

            $table->integer('CT_PRO_ID')->unsigned();
            $table->foreign('CT_PRO_ID')->references('PRO_ID')->on('PRO_PROCESO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CT_CENTRO_NEGOCIO');
    }
}
