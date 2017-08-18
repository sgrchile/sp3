<?php

use Illuminate\Database\Seeder;

class OrdenTrabajoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run() {
       $faker = Faker\Factory::create();
       for($i = 0; $i < 100; $i++) {
           App\OrdenTrabajo::create([
             'OT_OC' => $faker->numberBetween($min = 10000000, $max = 20000000 ),
             'OT_DESC' => $faker->realText(rand(10,20)),
             'OT_FECHA_INI' => $faker->date($format = 'Y-m-d', $max = 'now'),
             'OT_MONTO_NETO' => $faker->numberBetween($min = 100000, $max = 200000 ),
             'OT_MARGEN_CASH' => $faker->jobTitle,
             'OT_CLI_RUT'  => App\Cliente::all()->random()->CLI_RUT,
             'OT_PER_RUT_ENCARGADO' => App\Proveedor::all()->random()->PRO_RUN,
             'OT_CENTRO_NEGOCIO_ID' => App\CentroNegocio::all()->random()->CT_ID,
             'OT_EST_ID' => App\Estado::all()->random()->EST_ID
           ]);
       }
   }
}
