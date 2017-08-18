<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoOfertaAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ESTA_ESTADO_OFERTAS_ADMIN', function (Blueprint $table) {
          $table->increments('ESTA_COD');
          $table->string('ESTA_DESC', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ESTA_ESTADO_OFERTAS_ADMIN');
    }
}
