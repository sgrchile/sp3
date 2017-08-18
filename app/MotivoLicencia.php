<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotivoLicencia extends Model
{
  protected $table = 'RH_MLC_MOTIVO_LICENCIA';
  protected $primaryKey = "MLC_ID";
  public $timestamps = false;
  protected $fillable = [
    'MLC_ID', 'MLC_DESC'
  ];
}
