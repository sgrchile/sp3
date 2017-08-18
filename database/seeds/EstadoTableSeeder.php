<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Estado::create([ 'EST_DESC' => 'POR CONCILIAR' ]);
        App\Estado::create([ 'EST_DESC' => 'CONCILIADO' ]);
        App\Estado::create([ 'EST_DESC' => 'SOLICITADA' ]);
        App\Estado::create([ 'EST_DESC' => 'RECHAZADA' ]);
        App\Estado::create([ 'EST_DESC' => 'APROBADA' ]);
        App\Estado::create([ 'EST_DESC' => 'POR RENDIR' ]);
        App\Estado::create([ 'EST_DESC' => 'POR CONCILIAR' ]);
        App\Estado::create([ 'EST_DESC' => 'FINALIZADO' ]);
        App\Estado::create([ 'EST_DESC' => 'EMITIDA' ]);
        App\Estado::create([ 'EST_DESC' => 'PENDIENTE' ]);
    }
}
