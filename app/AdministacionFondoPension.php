<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministacionFondoPension extends Model
{
  protected $table = 'RH_AFP_ADMINISTACION_FONDO_PENSIONES';
  protected $primaryKey = "AFP_ID";
  public $timestamps = false;
  protected $fillable = [
    'AFP_ID', 'AFP_NOMBRE', 'AFP_PORCENTAJE_DSCTO'
  ];
}
