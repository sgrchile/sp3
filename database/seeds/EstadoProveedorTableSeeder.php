<?php

use Illuminate\Database\Seeder;

class EstadoProveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\EstadoProveedor::create(['EP_DESC' => 'OPERATIVO']);
        App\EstadoProveedor::create(['EP_DESC' => 'DESPEDIDO']);
        App\EstadoProveedor::create(['EP_DESC' => 'CON LICENCIA']);
    }
}
