<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivoInterno extends Model
{
  protected $table = 'INV_ACT_ACTIVOS_INTERNOS';
  protected $primaryKey = "ACT_ID";
  public $timestamps = false;
  protected $fillable = [
    'ACT_ID',
    'ACT_DESC',
    'ACT_INFO',
    'ACT_MARCA',
    'ACT_ESTADO',
    'ACT_FECHA_INGRESO',
    'ACT_VALOR_COMPRA',
    'ACT_TASA_DESPRECIACION',
    'ACT_VALOR_ACTUAL',
    'ACT_SEGUROS',
    'ACT_VALOR_DE_SALVAMENTO',
    'ACT_VIGENCIA'
  ];
}
