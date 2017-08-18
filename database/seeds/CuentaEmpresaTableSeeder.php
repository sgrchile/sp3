<?php

use Illuminate\Database\Seeder;

class CuentaEmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run() {
       $faker = Faker\Factory::create();
       for($i = 0; $i < 100; $i++) {
           App\CuentaEmpresa::create([
             'CTAE_DESC' => $faker->randomElement($array = array ('Cuenta Corriente','Cuenta Vista')),
             'CTAE_NUMERO_CUENTA' => $faker->creditCardNumber,
             'CTAE_EMP_ID' => '1',
             'CTAE_BCO_ID' => '1'
           ]);
       }
   }
}
