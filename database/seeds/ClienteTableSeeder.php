<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run() {
       $faker = Faker\Factory::create();
       for($i = 0; $i < 100; $i++) {
           App\Cliente::create([
             'CLI_RUT' => $faker->numberBetween($min = 10000000, $max = 20000000 ),
             'CLI_FONO' => $faker->phoneNumber,
             'CLI_EMAIL' => $faker->email,
             'CLI_NOMBRE' => $faker->firstName,
             'CLI_CONTACTO' => $faker->phoneNumber,
             'CLI_ACT_COMERCIAL' => $faker->jobTitle,
             'CLI_DIRECCION' => $faker->address,
             'CLI_TCTA_BCO'  => App\TipoCuenta::all()->random()->TCTA_BCO,
             'CLI_SITIO_WEB' => 'email_test@gmail.com',
             'CLI_GLOSA' => 'glosa test',
             'CLI_RUBRO' => App\Rubro::all()->random()->RUB_COD,
               'CLI_SUB_RUBRO' => App\SubRubro::all()->random()->SUB_RUB_COD,
               'CLI_ACTIVIDAD' => App\Actividad::all()->random()->ACT_COD_COD,
               'CLI_BANCO' => App\Banco::all()->random()->BCO_ID,
               'CLI_NRO_CTA' => $faker->numberBetween($min = 10000000, $max = 20000000 ),
               'CLI_ORIGEN' => 'ORIGEN TEST',
               'CLI_PAIS' => App\Pais::all()->random()->PAI_COD,
               'CLI_REGION' => App\Region::all()->random()->REG_COD,
               'CLI_PROVINCIA' => App\Provincia::all()->random()->PV_COD,
               'CLI_CIUDAD' => App\Ciudad::all()->random()->CIU_COD

           ]);
       }
   }
}
