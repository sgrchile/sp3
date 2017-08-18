<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Pais::create([ 'PAI_DESC' => 'CHILE']);
        App\Pais::create([ 'PAI_DESC' => 'OTROS PAÍSES']);
    }
}
