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
             'CLI_TCTA_BCO'  => App\TipoCuenta::all()->random()->TCTA_BCO
           ]);
       }
   }
}
