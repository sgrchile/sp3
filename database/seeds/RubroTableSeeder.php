<?php

use Illuminate\Database\Seeder;

class RubroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Rubro::create([ 'RUB_DESC' =>'AGRICULTURA, GANADERÍA, CAZA Y SILVICULTURA']);
        App\Rubro::create([ 'RUB_DESC' =>'PESCA']);
        App\Rubro::create([ 'RUB_DESC' =>'EXPLOTACIÓN DE MINAS Y CANTERAS']);
        App\Rubro::create([ 'RUB_DESC' =>'INDUSTRIAS MANUFACTURERAS NO METÁLICAS']);
        App\Rubro::create([ 'RUB_DESC' =>'INDUSTRIAS MANUFACTURERAS METÁLICAS']);
        App\Rubro::create([ 'RUB_DESC' =>'SUMINISTRO DE ELECTRICIDAD, GAS Y AGUA']);
        App\Rubro::create([ 'RUB_DESC' =>'CONSTRUCCIÓN']);
        App\Rubro::create([ 'RUB_DESC' =>'COMERCIO AL POR MAYOR Y MENOR; REP. VEH.AUTOMOTORES/ENSERES DOMÉSTICOS']);
        App\Rubro::create([ 'RUB_DESC' =>'HOTELES Y RESTAURANTES']);
        App\Rubro::create([ 'RUB_DESC' =>'TRANSPORTE, ALMACENAMIENTO Y COMUNICACIONES']);
        App\Rubro::create([ 'RUB_DESC' =>'INTERMEDIACIÓN FINANCIERA']);
        App\Rubro::create([ 'RUB_DESC' =>'ACTIVIDADES INMOBILIARIAS, EMPRESARIALES Y DE ALQUILER']);
        App\Rubro::create([ 'RUB_DESC' =>'ADM. PÚBLICA Y DEFENSA; PLANES DE SEG. SOCIAL AFILIACIÓN OBLIGATORIA']);
        App\Rubro::create([ 'RUB_DESC' =>'ENSEÑANZA']);
        App\Rubro::create([ 'RUB_DESC' =>'SERVICIOS SOCIALES Y DE SALUD']);
        App\Rubro::create([ 'RUB_DESC' =>'OTRAS ACTIVIDADES DE SERVICIOS COMUNITARIAS, SOCIALES Y PERSONALES']);
        App\Rubro::create([ 'RUB_DESC' =>'CONSEJO DE ADMINISTRACIÓN DE EDIFICIOS Y CONDOMINIOS']);
        App\Rubro::create([ 'RUB_DESC' =>'ORGANIZACIONES Y ÓRGANOS EXTRATERRITORIALES']);
    }
}
