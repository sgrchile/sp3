<?php

use Illuminate\Database\Seeder;

class TipoProveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\TipoProveedor::create(['TP_DESC' => 'RRHH']);
        App\TipoProveedor::create(['TP_DESC' => 'EXTERNO']);
        App\TipoProveedor::create(['TP_DESC' => 'EMPRESA']);
    }
}
