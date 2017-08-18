<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRemuneracion extends Model
{
  protected $table = 'RH_TR_TIPO_REMUNERACION';
  protected $primaryKey = "TR_COD";
  public $timestamps = false;
  protected $fillable = [
    'TR_COD', 'TR_DES'
  ];

}
