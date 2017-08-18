<?php

use Illuminate\Database\Seeder;

class OrientacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\Orientacion::create([ 'OR_DESC' => 'Turismo' ]);
      App\Orientacion::create([ 'OR_DESC' => 'Ingeniería' ]);
      App\Orientacion::create([ 'OR_DESC' => 'Administración' ]);
      App\Orientacion::create([ 'OR_DESC' => 'Producción Gráfica' ]);

    }
}
