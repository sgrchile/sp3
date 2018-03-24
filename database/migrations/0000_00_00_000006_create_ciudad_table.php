<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CIU_CIUDAD', function (Blueprint $table) {
            $table->increments('CIU_COD')->unsigned();
            $table->string('CIU_DESC', 45);

            $table->integer('CIU_PV_COD')->unsigned();
            $table->foreign('CIU_PV_COD')->references('PV_COD')->on('PV_PROVINCIA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CIU_CIUDAD');
    }
}
