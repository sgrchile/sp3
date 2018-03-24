<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BCO_BANCO', function (Blueprint $table) {
            $table->increments('BCO_ID')->unsigned();
            $table->string('BCO_DESC', 45);
        });

        Schema::create('RUB_RUBRO', function (Blueprint $table) {
            $table->increments('RUB_COD')->unsigned();
            $table->string('RUB_DESC', 45);

            $table->foreign('RUB_COD')->references('RUB_COD')->on('SUB_RUB_RUBRO');
        });

        Schema::create('SUB_RUB_RUBRO', function (Blueprint $table) {
            $table->increments('SUB_RUB_COD')->unsigned();
            $table->integer('RUB_COD');
            $table->string('SUB_RUB_DESC', 45);

            $table->foreign('SUB_RUB_COD')->references('SUB_RUB_COD')->on('ACTIVIDAD');
        });

        Schema::create('ACTIVIDAD', function (Blueprint $table) {
            $table->increments('ACT_COD_COD')->unsigned();
            $table->string('ACT_DESC',45);
            $table->integer('SUB_RUB_COD');

            //$table->foreign('SUB_RUB_COD')->references('id')->on('SUB_RUB_RUBRO');
        });

        Schema::create('CCONTACTO', function (Blueprint $table) {
            $table->increments('ID_CONT')->unsigned();
            $table->integer('CONT_CLI_ID');
            $table->string('CONT_NOM',45);
            $table->integer('CONT_CEL');
            $table->string('CONT_EMAIL',20);
            $table->string('CONT_EMAIL_EMP',20);
            $table->timestamps();

            $table->foreign('CONT_CLI_ID')->references('CLI_RUT')->on('CLI_CLIENTE');
        });

        Schema::create('ETAPA', function (Blueprint $table){
            $table->increments('ID_ETAPA')->unsigned();
            $table->string('DESC_ETAPA', 45);
        });

        Schema::create('MONEDA', function (Blueprint $table){
           $table->increments('ID_MONEDA')->unsigned();
           $table->string('DESC_MONEDA', 45);
        });

        Schema::create('OPORTUNIDAD', function (Blueprint $table) {
            $table->increments('ID_OPORTUNIDAD')->unsigned();
            $table->string('NOMBRE', 45);
            $table->string('ID_CLIENTE', 10);
            $table->integer('PROC_NEGOCIO');
            $table->integer('ETAPA');
            $table->integer('PROBABILIDAD');
            $table->integer('TASA');
            $table->integer('MONEDA');
            $table->integer('TOTAL');
            $table->timestamp('FEC_INGRESO');
            $table->timestamp('FEC_CIERRE');
            $table->integer('CENT_NEGOCIO');
            $table->integer('EST_PROP');


            //$table->foreign('ID_CLIENTE')->references('CLI_RUT')->on('CLI_CLIENTE');
            //$table->foreign('ETAPA')->references('ID_ETAPA')->on('ETAPA');
            //$table->foreign('MONEDA')->references('ID_MONEDA')->on('MONEDA');
            //$table->foreign('EST_PROP')->references('EST_ID')->on('EST_ESTADO');

        });

            Schema::create('TP_ACTIVIDAD', function (Blueprint $table){
            $table->increments('ID_TP_ACTIVIDAD');
            $table->string('DESC_TP_ACTIVIDAD', 45);
        });

        Schema::create('ACT_ACTIVIDAD', function (Blueprint $table){
            $table->increments('ID_ACT');
            $table->string('DESC_ACT',45);
            $table->timestamp('FECHA_ACT');
            $table->time('HORA');
            $table->integer('ID_CLIENTE_ACT');
            $table->integer('CONTACT_ACT');

            //$table->foreign('ID_CLIENTE_ACT')->references('CLI_RUT')->on('CLI_CLIENTE');
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
        Schema::dropIfExists('BCO_BANCO');
        Schema::dropIfExists('CCONTACTO');
        Schema::dropIfExists('OPORTUNIDAD');
        Schema::dropIfExists('ACT_ACTIVIDAD');
    }
}
