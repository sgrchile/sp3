<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRO_PROVEEDOR', function (Blueprint $table) {
            $table->string('PRO_RUN', 10)->primary();
            $table->string('PRO_NOMBRE', 45);
            $table->string('PRO_APE_PAT', 45)->nullable();
            $table->string('PRO_APE_MAT', 45)->nullable();
            $table->string('PRO_SEXO', 45)->nullable();
            $table->string('PRO_DIRECCION', 90)->nullable();
            $table->string('PRO_NACIONALIDAD', 45)->nullable();
            $table->string('PRO_SEG_MED', 45)->nullable();
            $table->string('PRO_AFP', 45)->nullable();
            $table->string('PRO_N_CUENTA', 45)->nullable();
            $table->string('PRO_RAZON_SOCIAL', 45)->nullable();
            $table->string('PRO_TEL', 45)->nullable();
            $table->string('PRO_CELULAR', 45)->nullable();
            $table->string('PRO_RUBRO')->nullable();
            $table->string('PRO_SUBRUBRO')->nullable();
            $table->date('PRO_FECHA_PAGO')->nullable();
            $table->string('PRO_CONTACTO_SECUNDARIO', 90)->nullable();
            $table->string('PRO_PAGINA_WEB', 200)->nullable();
            $table->string('PRO_FACEBOOK', 200)->nullable();
            $table->string('PRO_EMAIL', 500)->nullable();
            $table->string('PRO_GIRO', 500)->nullable();
            $table->string('password')->nullable();
            $table->text('PRO_REFERENCIA')->nullable();
            $table->text('PRO_CONTRATO')->nullable();
            $table->date('PRO_FECHA_NAC')->nullable();
            $table->rememberToken();

            $table->integer('PRO_CAR_ID')->unsigned()->nullable();
            $table->foreign('PRO_CAR_ID')->references('CAR_ID')->on('CAR_CARGO');

            $table->integer('PRO_EMP')->unsigned()->nullable();
            $table->foreign('PRO_EMP')->references('EMP_ID')->on('EMP_EMPRESA');

            $table->integer('PRO_ESTADO_PERSONAL')->unsigned()->nullable();
            $table->foreign('PRO_ESTADO_PERSONAL')->references('EP_ID')->on('EP_ESTADO_PROVEEDOR');

            $table->integer('PRO_TP_COD')->unsigned()->nullable();
            $table->foreign('PRO_TP_COD')->references('TP_COD')->on('TP_TIPO_PROVEEDOR');

            $table->integer('PRO_BCO_ID')->unsigned()->nullable();
            $table->foreign('PRO_BCO_ID')->references('BCO_ID')->on('BCO_BANCO');

            $table->integer('PRO_TCTA_BCO')->unsigned()->nullable();
            $table->foreign('PRO_TCTA_BCO')->references('TCTA_BCO')->on('TCTA');

            $table->integer('PRO_PAI_COD')->unsigned()->nullable();
            $table->foreign('PRO_PAI_COD')->references('PAI_COD')->on('PAI_PAIS');

            $table->integer('PRO_PV_COD')->unsigned()->nullable();
            $table->foreign('PRO_PV_COD')->references('PV_COD')->on('PV_PROVINCIA');

            $table->integer('PRO_REG_COD')->unsigned()->nullable();
            $table->foreign('PRO_REG_COD')->references('REG_COD')->on('REG_REGION');

            $table->integer('PRO_CIU_COD')->unsigned()->nullable();
            $table->foreign('PRO_CIU_COD')->references('CIU_COD')->on('CIU_CIUDAD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PRO_PROVEEDOR');
    }
}
