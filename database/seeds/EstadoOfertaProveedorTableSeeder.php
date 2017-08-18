<?php

use Illuminate\Database\Seeder;

class EstadoOfertaProveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\EstadoOfertaProveedor::create(['ESTP_DESC' => 'HABILITADO']);
        App\EstadoOfertaProveedor::create(['ESTP_DESC' => 'DESHABILITADO']);
    }
}
