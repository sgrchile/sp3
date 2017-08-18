<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remuneracion extends Model
{
  protected $table = 'RH_REM_REMUNERACIONES';
  protected $primaryKey = "REM_ID";
  public $timestamps = false;
  protected $fillable = [
     'REM_ID', 'REM_FECHA_EMISION', 'REM_VALOR_TOTAL_HAB', 'REM_VALOR_TOTAL_DES', 'REM_SUELDO_LIQUIDO', 'REM_SUELDO_BASE',
     'REM_BONO_PRODUCCION', 'REM_GRATIFICACION_MENSUAL', 'REM_T_HAB_IMP_Y_TRIBUT', 'REM_T_MOVILIZACION', 'REM_VIATICO_AGUINALDO',
     'REM_T_HAB_N_IMP_Y_N_TRIBUT', 'REM_T_FONDO_PENSION', 'REM_AFC_TRAB_0', 'REM_T_LEYES_SOCIALES', 'REM_ANTICIPO_SUELDO',
     'REM_AGUINALDO', 'REM_PRO_RUT', 'REM_MES', 'REM_ANHO'
  ];
}
