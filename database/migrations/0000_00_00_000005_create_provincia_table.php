<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PV_PROVINCIA', function (Blueprint $table) {
            $table->increments('PV_COD')->unsigned();
            $table->string('PV_DESC', 45);

            $table->integer('PV_REG_COD')->unsigned();
            $table->foreign('PV_REG_COD')->references('REG_COD')->on('REG_REGION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PV_PROVINCIA');
    }
}
