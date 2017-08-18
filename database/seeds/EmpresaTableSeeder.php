<?php

use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Empresa::create([ 'EMP_DESC' => 'BIOGEST']);
        App\Empresa::create([ 'EMP_DESC' => 'TRENER ']);
        App\Empresa::create([ 'EMP_DESC' => 'LOICA ']);
        App\Empresa::create([ 'EMP_DESC' => 'KUTRALCO']);
        App\Empresa::create([ 'EMP_DESC' => 'IMPROTOUR']);
    }
}
