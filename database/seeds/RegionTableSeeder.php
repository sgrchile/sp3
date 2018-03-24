<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Region::create([ 'REG_DESC' => 'Tarapacá','ISO_3166_2_CL' => 'CL-TA']);
        App\Region::create([ 'REG_DESC' => 'Antofagasta', 'ISO_3166_2_CL' => 'CL-AN']);
        App\Region::create([ 'REG_DESC' => 'Atacama', 'ISO_3166_2_CL' => 'CL-AT']);
        App\Region::create([ 'REG_DESC' => 'Coquimbo', 'ISO_3166_2_CL' => 'CL-CO']);
        App\Region::create([ 'REG_DESC' => 'Valparaíso', 'ISO_3166_2_CL' => 'CL-VS']);
        App\Region::create([ 'REG_DESC' => 'Región del Libertador Gral. Bernardo O’Higgins', 'ISO_3166_2_CL' => 'CL-LI']);
        App\Region::create([ 'REG_DESC' => 'Región del Maule', 'ISO_3166_2_CL' => 'CL-ML']);
        App\Region::create([ 'REG_DESC' => 'Región del Biobío', 'ISO_3166_2_CL' => 'CL-BI']);
        App\Region::create([ 'REG_DESC' => 'Región de la Araucanía', 'ISO_3166_2_CL' => 'CL-AR']);
        App\Region::create([ 'REG_DESC' => 'Región de Los Lagos', 'ISO_3166_2_CL' => 'CL-LL']);
        App\Region::create([ 'REG_DESC' => 'Región Aisén del Gral. Carlos Ibáñez del Campo', 'ISO_3166_2_CL' => 'CL-AI']);
        App\Region::create([ 'REG_DESC' => 'Región de Magallanes y de la Antártica Chilena', 'ISO_3166_2_CL' => 'CL-MA']);
        App\Region::create([ 'REG_DESC' => 'Región Metropolitana de Santiago', 'ISO_3166_2_CL' => 'CL-RM']);
        App\Region::create([ 'REG_DESC' => 'Región de Los Ríos', 'ISO_3166_2_CL' => 'CL-LR']);
        App\Region::create([ 'REG_DESC' => 'Arica y Parinacota', 'ISO_3166_2_CL' => 'CL-AP']);
    }
}
