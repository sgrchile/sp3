<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonoPersonal extends Model
{
  protected $table = 'RH_BONOS_PERSONAL';
  protected $primaryKey = "BONOS_ID";
  public $timestamps = false;
  protected $fillable = [
    'BONOS_ID', 'BONOS_TOTAL', 'BONOS_ESTADO', 'BONOS_FECHA', 'BONOS_PRO_RUN', 'BONOS_BONO_ID'
  ];


}
