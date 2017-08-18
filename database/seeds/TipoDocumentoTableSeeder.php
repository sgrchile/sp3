<?php

use Illuminate\Database\Seeder;

class TipoDocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\TipoDocumento::create([
      'TDC_DESC' => 'CHEQUE',
    ]);

    App\TipoDocumento::create([
      'TDC_DESC' => 'VALE VISTA',
    ]);

    App\TipoDocumento::create([
      'TDC_DESC' => 'BOLETA GARANTIA',
    ]);

    App\TipoDocumento::create([
      'TDC_DESC' => 'FACTURA',
    ]);

    App\TipoDocumento::create([
      'TDC_DESC' => 'FACTURA EXENTA',
    ]);
    App\TipoDocumento::create([
      'TDC_DESC' => 'SOLICITUD DE FONDO',
    ]);

    }
}
