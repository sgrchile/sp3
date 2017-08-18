<?php

use Illuminate\Database\Seeder;

class CausaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Causa::create([ 'CAU_DESC' => 'ORDEN DE TRABAJO']);
        App\Causa::create([ 'CAU_DESC' => 'NOMINA']);
        App\Causa::create([ 'CAU_DESC' => 'PROVEEDORES']);
        App\Causa::create([ 'CAU_DESC' => 'RETIROS']);
        App\Causa::create([ 'CAU_DESC' => 'IMPOSICIONES']);
        App\Causa::create([ 'CAU_DESC' => 'PRESTAMOS']);
        App\Causa::create([ 'CAU_DESC' => 'COMPRAS']);
        App\Causa::create([ 'CAU_DESC' => 'VENTA ACTIVOS']);
        App\Causa::create([ 'CAU_DESC' => 'APORTE CAPITAL']);
    }
}
