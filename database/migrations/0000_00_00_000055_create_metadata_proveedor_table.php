<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetadataProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_MP_METADATA_PROVEEDOR', function (Blueprint $table) {
            $table->increments('MP_COD');
            $table->text('MP_HOBBY');
            $table->text('MP_DEPORTES');
            $table->text('MP_ZONA_PREF_TRABAJAR');
            $table->text('MP_AREA_MEJOR_DESEMPEÑO');
            $table->enum('MP_TRABAJO_EQUIPO', ['SI', 'NO']);
            $table->text('MP_EMPRENDIMIENTOS');
            $table->string('MP_LUGAR_NACIMIENTO', 45);
            $table->string('MP_ESTABLECIMIENTO_ED_BASICA', 45);
            $table->string('MP_ESTABLECIMIENTO_ED_MEDIA', 45);
            $table->string('MP_RESIDENCIA_ACTUAL', 45);
            $table->string('MP_LUGAR_IDEAL_VIVIR_TRABAJAR', 45);
            $table->enum('MP_EQUIPO_PERSONAL', ['SI', 'NO']);
            $table->enum('MP_INTERNET', ['SI', 'NO']);
            $table->enum('MP_ESPACIO_ADECUADO_PARA_TRABAJAR', ['SI', 'NO']);
            $table->enum('MP_VEHICULO', ['SI', 'NO']);
            $table->text('MP_LISTA_INSTRUMENTAL');
            $table->string('MP_MARCA', 45);
            $table->string('MP_MOD', 45);
            $table->string('MP_TIPO', 45);
            $table->text('MP_PERTENENCIA_INSTITUCIONES');

            $table->string('MP_PRO_RUN', 10);
            $table->foreign('MP_PRO_RUN')->references('PRO_RUN')->on('PRO_PROVEEDOR');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_MP_METADATA_PROVEEDOR');
    }
}
