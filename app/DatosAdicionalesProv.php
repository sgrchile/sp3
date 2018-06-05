<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosAdicionalesProv extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "RH_MP_METADATA_PROVEEDOR";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "MP_COD";

    protected $fillable = [
        'MP_HOBBY',
        'MP_DEPORTES',
        'MP_ZONA_PREF_TRABAJAR',
        'MP_AREA_MEJOR_DESEMPEÑO',
        'MP_TRABAJO_EQUIPO',
        'MP_EMPRENDIMIENTOS',
        'MP_LUGAR_NACIMIENTO',
        'MP_ESTABLECIMIENTO_ED_BASICA',
        'MP_ESTABLECIMIENTO_ED_MEDIA',
        'MP_RESIDENCIA_ACTUAL',
        'MP_LUGAR_IDEAL_VIVIR_TRABAJAR',
        'MP_EQUIPO_PERSONAL',
        'MP_INTERNET',
        'MP_ESPACIO_ADECUADO_PARA_TRABAJAR',
        'MP_VEHICULO',
        'MP_LISTA_INSTRUMENTAL',
        'MP_MARCA',
        'MP_MOD',
        'MP_TIPO',
        'MP_PERTENENCIA_INSTITUCIONES',
        'MP_PRO_RUN',
        'MP_AREA_DESEMP',
        'MP_SIT_LAB',
        'MP_AÑOS_EXP',
        'MP_REDES',
        'MP_CAPACITACIONES',
        'MP_DOM_INGLES',
        'MP_DOM_COMPUTACIONAL',
        'MP_DOM_SOFTWARE',
        'MP_LIC_CONDUCIR',
        'MP_MOV_PROPIA',
        'MP_DISCAPACIDAD',
        'MP_JORNADA',
        'MP_COMENTARIOS',
        'UPDATED_AT',
        'CREATED_AT'
    ];
}
