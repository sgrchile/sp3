<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoRemuneracion extends Model
{
  protected $table = 'RH_RST_ESTADO_REMUNERACION';
  protected $primaryKey = "RST_COD";
  public $timestamps = false;
  protected $fillable = [
    'RST_COD', 'RST_DESC'
  ];
}
