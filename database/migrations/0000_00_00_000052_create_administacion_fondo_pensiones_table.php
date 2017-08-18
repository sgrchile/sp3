<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministacionFondoPensionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_AFP_ADMINISTACION_FONDO_PENSIONES', function (Blueprint $table) {
            $table->increments('AFP_ID');
            $table->string('AFP_NOMBRE', 45);
            $table->decimal('AFP_PORCENTAJE_DSCTO', 2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_AFP_ADMINISTACION_FONDO_PENSIONES');
    }
}
