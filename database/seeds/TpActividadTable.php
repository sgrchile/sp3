<?php

use Illuminate\Database\Seeder;

class TpActividadTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\TpActividad::create([ 'DESC_TP_ACTIVIDAD' => 'Llamada telefónica' ]);
        App\TpActividad::create([ 'DESC_TP_ACTIVIDAD' => 'Reunión' ]);
        App\TpActividad::create([ 'DESC_TP_ACTIVIDAD' => 'Teleconferencia' ]);
        App\TpActividad::create([ 'DESC_TP_ACTIVIDAD' => 'Visita terreno' ]);
        App\TpActividad::create([ 'DESC_TP_ACTIVIDAD' => 'Correo electrónico' ]);
    }
}
