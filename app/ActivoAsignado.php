<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivoAsignado extends Model
{
  protected $table = 'RH_AA_ACTIVOS_ASIGNADOS';
  protected $primaryKey = "AA_COD";
  public $timestamps = false;
  protected $fillable = [
    'AA_COD', 'AA_FECHA_ASIG', 'AA_PRO_RUN', 'AA_ACT_ID' 
  ];
}
