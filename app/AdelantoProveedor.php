<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdelantoProveedor extends Model
{
  protected $table = 'RH_ADPROV_ADELANTO_PROVEEDOR';
  protected $primaryKey = "ADPROV_ID";
  public $timestamps = false;
  protected $fillable = [
    'ADPROV_ID', 'ADPROV_VALOR', 'ADPROV_ESTADO', 'ADPROV_MOTIVO', 'ADPROV_FECHA', 'BONOS_PRO_RUN'
  ];
}
