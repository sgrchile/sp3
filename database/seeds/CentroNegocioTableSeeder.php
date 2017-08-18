<?php

use Illuminate\Database\Seeder;

class CentroNegocioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {

     App\CentroNegocio::create([
     'CT_PROCESO' => 'PROYECTO DE ASESORÍA',
     'CT_EMP_ID' => '1',
     'CT_PRO_ID' => '1',
     ]);

      App\CentroNegocio::create([
       'CT_PROCESO' => 'MERCADO PÚBLICO',
       'CT_EMP_ID' => '1',
       'CT_PRO_ID' => '1',
     ]);

     App\CentroNegocio::create([
       'CT_PROCESO' => 'INDUCCIÓN A CLIENTES EN ASESORÍA',
       'CT_EMP_ID' => '1',
       'CT_PRO_ID' => '1',
     ]);

     App\CentroNegocio::create([
       'CT_PROCESO' => 'PRODUCTOS',
       'CT_EMP_ID' => '1',
       'CT_PRO_ID' => '1',
     ]);
 }
}
