<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosOfertasProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ESTP_ESTADO_OFERTA_PROV', function (Blueprint $table) {
          $table->increments('ESTP_COD');
          $table->string('ESTP_DESC', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ESTP_ESTADO_OFERTA_PROV');
    }
}
