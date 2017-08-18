<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRO_PROCESO', function (Blueprint $table) {
            $table->increments('PRO_ID');
            $table->integer('PRO_JERARQUIA');
            $table->string('PRO_DESC', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PRO_PROCESO');
    }
}
