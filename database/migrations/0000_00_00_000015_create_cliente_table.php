<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CLI_CLIENTE', function (Blueprint $table) {
            $table->string('CLI_RUT', 10)->primary();
            $table->string('CLI_FONO', 45);
            $table->string('CLI_EMAIL', 100);
            $table->string('CLI_NOMBRE', 90);
            $table->string('CLI_CONTACTO', 90);
            $table->string('CLI_ACT_COMERCIAL', 45);
            $table->text('CLI_DIRECCION');

            $table->integer('CLI_TCTA_BCO')->unsigned();
            $table->foreign('CLI_TCTA_BCO')->references('TCTA_BCO')->on('TCTA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CLI_CLIENTE');
    }
}
