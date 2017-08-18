<?php

use Illuminate\Database\Seeder;

class RegistroMovimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run() {
       $faker = Faker\Factory::create();
       for($i = 0; $i < 100; $i++) {
           App\RegistroMovimiento::create([
             'RMOV_FECHA' => $faker->date($format = 'Y-m-d', $max = 'now'),
             'RMOV_MONTO' => $faker->numberBetween($min = 100000, $max = 2000000 ),
             'RMOV_FOLIO' => $faker->numberBetween($min = 100000, $max = 2000000 ),
             'RMOV_NUMERO_DOCUMENTO' => $faker->numberBetween($min = 100000, $max = 2000000 ),
             'RMOV_DESC'  => $faker->realText(rand(10,20)),
             'RMOV_EMP_ID' => App\Empresa::all()->random()->EMP_ID,
             'RMOV_CTAE' => App\TipoCuenta::all()->random()->TCTA_BCO,
             'RMOV_N_CTA' => App\CuentaEmpresa::all()->random()->CTAE_ID,
             'RMOV_TMOV_ID' => App\TipoMovimiento::all()->random()->TMOV_ID,
             'RMOV_FTE_ID' => App\Fuente::all()->random()->FTE_ID,
             'RMOV_CAU_ID' => App\Causa::all()->random()->CAU_ID,
             'RMOV_EST_ID' => App\Estado::all()->random()->EST_ID,
             'RMOV_TPDOC_ID' => App\TipoDocumento::all()->random()->TDC_ID,
           ]);
       }
   }
}
