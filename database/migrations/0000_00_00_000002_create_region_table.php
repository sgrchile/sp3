<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('REG_REGION', function (Blueprint $table) {
            $table->increments('REG_COD')->unsigned();
            $table->string('REG_DESC', 45);
            $table->string('ISO_3166_2_CL', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('REG_REGION');
    }
}
