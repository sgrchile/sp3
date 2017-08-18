<?php

use Illuminate\Database\Seeder;

class TipoGastoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	  App\TipoGasto::create([ 'TPG_DESC' => 'Servicios' ]);
        App\TipoGasto::create([ 'TPG_DESC' => 'Insumos' ]);
        App\TipoGasto::create([ 'TPG_DESC' => 'Materiales' ]);
        App\TipoGasto::create([ 'TPG_DESC' => 'Operativos' ]);
        App\TipoGasto::create([ 'TPG_DESC' => 'Nóminas' ]);
    }
}
