<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bono extends Model
{
  protected $table = 'RH_BONOS';
  protected $primaryKey = "BNS_ID";
  public $timestamps = false;
  protected $fillable = [
    'BNS_ID', 'BNS_DESCRIPCION', 'BNS_VALOR', 'BNS_PORCENTAJE'
  ];
}
