<?php

use Illuminate\Database\Seeder;

class FuenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Fuente::create([ 'FTE_DESC' => 'SOLICITUD DE FONDO']);
        App\Fuente::create([ 'FTE_DESC' => 'DEPÓSITO']);
        App\Fuente::create([ 'FTE_DESC' => 'RECEPCIÓN TRANSFERENCIA']);
        App\Fuente::create([ 'FTE_DESC' => 'GIRO']);
        App\Fuente::create([ 'FTE_DESC' => 'DESCUENTO AUTOMÁTICO']);
    }
}
