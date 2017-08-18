<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model

{
  protected $table = 'SER_SERVICIOS';
  protected $primaryKey = "SER_COD";
  public $timestamps = false;
  protected $fillable = [
  /*`SER_COD`, `SER_DESC`, `SER_ESTADO`, `SER_UNIDAD_MEDIDA`, `SER_PRECIO_COSTO`, `SER_PRECIO_VENTA`, `SER_CANTIDAD`,
  `SER_TIEMPO_EJECUCION`, `SER_GARANTIAS`, `SER_PUBLICO_OBJETIVO`, `SER_CAPACIDAD_EJECUCION`, `SER_IMPUESTO`,
  `SER_FECHA_CREACION`, `SER_MONEDA_VENTA`, `SER_PRO_RUN` FROM `SER_SERVICIOS`*/
];
public function proveedor()
{
  return $this->belongsTo('App\Proveedor', 'PRO_RUN', 'SER_PRO_RUN');
}

}
