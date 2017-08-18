<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentaEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CTAE_CUENTA_EMPRESA', function (Blueprint $table) {
            $table->increments('CTAE_ID');
            $table->string('CTAE_DESC', 45);
            $table->string('CTAE_NUMERO_CUENTA', 45);

            $table->integer('CTAE_EMP_ID')->unsigned();
            $table->foreign('CTAE_EMP_ID')->references('EMP_ID')->on('EMP_EMPRESA');

            $table->integer('CTAE_BCO_ID')->unsigned();
            $table->foreign('CTAE_BCO_ID')->references('BCO_ID')->on('BCO_BANCO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CTAE_CUENTA_EMPRESA');
    }
}
