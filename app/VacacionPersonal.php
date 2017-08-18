<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacacionPersonal extends Model
{
  protected $table = 'RH_VP_VACACIONES_PERSONAL';
  protected $primaryKey = "VP_COD";
  public $timestamps = false;
  protected $fillable = [
    'VP_COD', 'VP_INICIO', 'VP_TERMINO', 'VP_ESTADO', 'VP_PER_RUT'
  ];

  public function proveedor()
    {
      return $this->belongsTo('App\Proveedor', 'PRO_RUN', 'STP_PRO_RUN');
    }
}
