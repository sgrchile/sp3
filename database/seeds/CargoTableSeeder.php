<?php

use Illuminate\Database\Seeder;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Cargo::create([ 'CAR_DESC' => 'DIRECTOR GENERAL', 'CAR_NIVEL' => '1-DIRECTORIO']);
        App\Cargo::create([ 'CAR_DESC' => 'DIRECTOR DE TURISMO Y VIAJES', 'CAR_NIVEL' => '1-DIRECTORIO']);
        App\Cargo::create([ 'CAR_DESC' => 'DIRECTOR TRENER', 'CAR_NIVEL' => '1-DIRECTORIO']);
        App\Cargo::create([ 'CAR_DESC' => 'GERENTE ADMINISTRATIVO', 'CAR_NIVEL' => '2-GERENCIA']);
        App\Cargo::create([ 'CAR_DESC' => 'EJECUTIVO COMERCIAL', 'CAR_NIVEL' => '3-ADMINISTRACION']);
        App\Cargo::create([ 'CAR_DESC' => 'SOCIO ASESOR PROFESIONAL', 'CAR_NIVEL' => '3-ADMINISTRACION']);
        App\Cargo::create([ 'CAR_DESC' => 'DIRECTOR CREATIVO', 'CAR_NIVEL' => '3-ADMINISTRACION']);
        App\Cargo::create([ 'CAR_DESC' => 'ASISTENTE ADMINISTRATIVO', 'CAR_NIVEL' => '3-ADMINISTRACION']);
        App\Cargo::create([ 'CAR_DESC' => 'CONTADOR AUDITOR', 'CAR_NIVEL' => '3-ADMINISTRACION']);
        App\Cargo::create([ 'CAR_DESC' => 'INFORMATICO', 'CAR_NIVEL' => '3-ADMINISTRACION']);
        App\Cargo::create([ 'CAR_DESC' => 'DIRECTOR GENERAL', 'CAR_NIVEL' => '1-DIRECTORIO']);
        App\Cargo::create([ 'CAR_DESC' => 'EJECUTIVO COMERCIAL Y VENTAS', 'CAR_NIVEL' => '3-ADMINISTRACION']);
        App\Cargo::create([ 'CAR_DESC' => 'SUPERVISOR ADMINISTRATIVO COMERCIAL', 'CAR_NIVEL' => '3-ADMINISTRACION']);
        App\Cargo::create([ 'CAR_DESC' => 'COORDINADOR OPERATIVO', 'CAR_NIVEL' => '3-ADMINISTRACION']);
        App\Cargo::create([ 'CAR_DESC' => 'PUBLICISTA', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'RELACIONADOR COMERCIAL', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'EJECUTIVO DE CUENTA', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'DIRECTOR PROYECTO', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'AYUDANTE', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'ENCARGADO DE PRODUCCION', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'OPERATIVO TECNICO', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'EJECUTIVO ADMINISTRATIVO', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'RELACIONADOR COMERCIAL', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'AGENTE PROMOCIONAL', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'RECEPCIONISTA/RELACIONADOR COMERCIAL', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'MUCAMA', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'CONDUCTOR DE VEHICULO', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'GUIA TURISTICO', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'AGENTE DE VIAJE', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'INGENIERO DE PROYECTOS', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'ASISTENTE ADMINISTRATIVO', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'TECNICO MANTENCION', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'AUXILIAR TECNICO', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'CAPATAZ', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'OBRERO', 'CAR_NIVEL' => '4-OPERACIONES']);
        App\Cargo::create([ 'CAR_DESC' => 'PROVEEDOR', 'CAR_NIVEL' => '5-PROVEEDOR']);
        App\Cargo::create([ 'CAR_DESC' => 'PROVEEDOR NO EVALUADO', 'CAR_NIVEL' => '5-PROVEEDOR']);
    }
}
