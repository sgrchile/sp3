<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrevisionSalud extends Model
{
  protected $table = 'RH_PREV_SALUD';
  protected $primaryKey = "PREV_COD";
  public $timestamps = false;
  protected $fillable = [
    'PREV_COD', 'PREV_DES', 'PREV_PORCENTAJE_DSCTO'
  ];
}
