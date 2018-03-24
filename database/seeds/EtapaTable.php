<?php

use Illuminate\Database\Seeder;

class EtapaTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\ETAPA::create([ 'DESC_ETAPA' => 'PROSPECTO' ]);
        App\ETAPA::create([ 'DESC_ETAPA' => 'OPORTUNIDAD' ]);
        App\ETAPA::create([ 'DESC_ETAPA' => 'COTIZACION' ]);
        App\ETAPA::create([ 'DESC_ETAPA' => 'NEGOCIACION' ]);
        App\ETAPA::create([ 'DESC_ETAPA' => 'HOT' ]);
        App\ETAPA::create([ 'DESC_ETAPA' => 'CERRADA GANADA' ]);
        App\ETAPA::create([ 'DESC_ETAPA' => 'CERRADA PERDIDA' ]);
    }
}
