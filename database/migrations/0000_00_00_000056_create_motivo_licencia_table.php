<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotivoLicenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_MLC_MOTIVO_LICENCIA', function (Blueprint $table) {
            $table->increments('MLC_ID');
            $table->string('MLC_DESC', 45);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_MLC_MOTIVO_LICENCIA');
    }
}
