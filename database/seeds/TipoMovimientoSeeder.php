<?php

use Illuminate\Database\Seeder;

class TipoMovimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\TipoMovimiento::create([
           'TMOV_DESC' => 'Ingreso',
        ]);

        App\TipoMovimiento::create([
            'TMOV_DESC' => 'Egreso',
        ]);
    }
}
