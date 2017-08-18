<?php

use Illuminate\Database\Seeder;

class EstadoOfertaAdministradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\EstadoOfertaAdministrador::create(['ESTA_DESC' => 'DESHABILITADO']);
      App\EstadoOfertaAdministrador::create(['ESTA_DESC' => 'HABILITADO']);
    }
}
