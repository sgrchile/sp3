<?php

use Illuminate\Database\Seeder;

class ProcesoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    App\Proceso::create([
      'PRO_JERARQUIA' => '1',
      'PRO_DESC' => 'EVALUADO',
    ]);

    App\Proceso::create([
      'PRO_JERARQUIA' => '2',
      'PRO_DESC' => 'EN PROCESO',
    ]);

    App\Proceso::create([
      'PRO_JERARQUIA' => '3',
      'PRO_DESC' => 'PREPARANDO INFORMES',
    ]);

    App\Proceso::create([
      'PRO_JERARQUIA' => '4',
      'PRO_DESC' => 'POR APROBAR CLIENTE',
    ]);

    App\Proceso::create([
      'PRO_JERARQUIA' => '5',
      'PRO_DESC' => 'POR COBRAR',
    ]);

    App\Proceso::create([
      'PRO_JERARQUIA' => '6',
      'PRO_DESC' => 'FINALIZADO',
    ]);
    }
}
