<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RH_DPER_DOCUMENTOS_PERSONAL', function (Blueprint $table) {
            $table->increments('DPER_ID');
            $table->string('DPER_DESC', 45);
            $table->text('DPER_URL');

            $table->string('DPER_PERSONAL_PER_RUT', 10);
            $table->foreign('DPER_PERSONAL_PER_RUT')->references('PRO_RUN')->on('PRO_PROVEEDOR');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RH_DPER_DOCUMENTOS_PERSONAL');
    }
}
