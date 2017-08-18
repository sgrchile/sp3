<?php

use Illuminate\Database\Seeder;

class TipoCuentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\TipoCuenta::create([ 'TCTA_DESC' => 'CUENTA CORRIENTE']);
      App\TipoCuenta::create([ 'TCTA_DESC' => 'CUENTA VISTA']);
    }
}
