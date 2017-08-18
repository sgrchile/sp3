<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_BONOS', function (Blueprint $table) {
            $table->increments('BNS_ID');
            $table->text('BNS_DESCRIPCION');
            $table->integer('BNS_VALOR');
            $table->decimal('BNS_PORCENTAJE', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_BONOS');
    }
}
