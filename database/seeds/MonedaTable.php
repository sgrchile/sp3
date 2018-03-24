<?php

use Illuminate\Database\Seeder;

class MonedaTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\MONEDA::create([ 'DESC_MONEDA' => 'Peso' ]);
        App\MONEDA::create([ 'DESC_MONEDA' => 'Dolar' ]);
    }
}
