<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrevSaludTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_PREV_SALUD', function (Blueprint $table) {
            $table->increments('PREV_COD');
            $table->string('PREV_DES', 45);
            $table->decimal('PREV_PORCENTAJE_DSCTO', 2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_PREV_SALUD');
    }
}
