<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadoProveedorTableSeeder::class);
        $this->call(TipoProveedorTableSeeder::class);
        $this->call(PaisTableSeeder::class);
        $this->call(EmpresaTableSeeder::class);
        $this->call(FuenteTableSeeder::class);
        $this->call(CausaTableSeeder::class);
        $this->call(TipoCuentaTableSeeder::class);
        $this->call(TipoDocumentoTableSeeder::class);
        $this->call(TipoMovimientoSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(BancoTableSeeder::class);
        $this->call(ProcesoTableSeeder::class);
        $this->call(CargoTableSeeder::class);
        $this->call(CentroNegocioTableSeeder::class);
        $this->call(CuentaEmpresaTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(PersonalTableSeeder::class);
        $this->call(TipoGastoTableSeeder::class);
        $this->call(ProveedorTableSeeder::class);
        $this->call(OrdenTrabajoTableSeeder::class);
        $this->call(RegistroMovimientoTableSeeder::class);
        $this->call(SolicitudFondoTableSeeder::class);
        $this->call(OrientacionTableSeeder::class);
        $this->call(EstadoOfertaProveedorTableSeeder::class);
        $this->call(EstadoOfertaAdministradorTableSeeder::class);

    }
}
