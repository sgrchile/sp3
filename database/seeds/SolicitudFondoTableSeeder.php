<?php

use Illuminate\Database\Seeder;

class SolicitudFondoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run() {
       $faker = Faker\Factory::create();
       for($i = 0; $i < 100; $i++) {
           App\SolicitudFondo::create([
             'SF_ASOCIADO_A' => App\OrdenTrabajo::all()->random()->OT_ID,
             'SF_RECEPTOR' => App\Proveedor::all()->random()->PRO_RUN,
             'SF_N_CTA_RECEPTOR' => $faker->numberBetween($min = 100000, $max = 200000 ),
             'SF_SOLICITANTE_RUT' => App\Proveedor::all()->random()->PRO_RUN,
             'SF_RECEPTOR_RUT' => App\Proveedor::all()->random()->PRO_RUN,
             'SF_MONTO'  => $faker->numberBetween($min = 100000, $max = 2000000 ),
             'SF_FECHA' => $faker->date($format = 'Y-m-d', $max = 'now'),
             'SF_DESC' => $faker->realText(rand(10,20)),
             'SF_CAU_ID' => App\Causa::all()->random()->CAU_ID,
             'SF_EMP_ID' => App\Empresa::all()->random()->EMP_ID,
             'SF_BCO_ID' => App\Banco::all()->random()->BCO_ID,
             'SF_TIPO_CTA_BCO' => App\TipoCuenta::all()->random()->TCTA_BCO,
             'SF_EST' => App\Estado::all()->random()->EST_ID,
             'SF_CTAC' => App\CuentaEmpresa::all()->random()->CTAE_ID,
             'SF_OT_ID'  => App\OrdenTrabajo::all()->random()->OT_ID
           ]);
       }
   }
}
