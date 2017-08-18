<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermisoEspecial extends Model
{
  protected $table = 'RH_PRMSE_PERMISOS_ESPECIALES';
  protected $primaryKey = "PRMSE_COD";
  public $timestamps = false;
  protected $fillable = [
    'PRMSE_COD', 'PRMSE_MOTIVO', 'PRMSE_INICIO', 'PRMSE_FIN', 'PRMSE_ESTADO', 'PRMSE_PERSONAL_PER_RUT'    
  ];
}
