<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LicenciaMedica extends Model
{
  protected $table = 'RH_LM_LICENCIAS_MEDICAS';
  protected $primaryKey = "LM_ID";
  public $timestamps = false;
  protected $fillable = [
    'LM_ID', 'LM_DESC', 'LM_INICIO', 'LM_TERMINO', 'LM_ESTADO', 'LM_MLC_ID', 'LM_PER_RUT' 
  ];
}
