<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartolaBancariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CB_CARTORLA_BANCARIA', function (Blueprint $table) {
            $table->increments('CB_ID');
            $table->date('CB_FECHA');
            $table->text('CB_DESC');
            $table->integer('CB_MONTO');

            $table->integer('CB_TMOV_ID')->unsigned();
            $table->foreign('CB_TMOV_ID')->references('TMOV_ID')->on('TMOV_TIPO_MOVIMIENTO');

            $table->integer('CB_CTAEEMPRESA_CTAE_ID')->unsigned();
            $table->foreign('CB_CTAEEMPRESA_CTAE_ID')->references('CTAE_ID')->on('CTAE_CUENTA_EMPRESA');

            $table->integer('CB_CAUSA_ID')->unsigned();
            $table->foreign('CB_CAUSA_ID')->references('CAU_ID')->on('CAU_CAUSA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CB_CARTORLA_BANCARIA');
    }
}
