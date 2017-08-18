<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
  /**
   * El nombre de la tabla en la BD
   *
   * @var string
   */
  protected $table = "INV_OC_ORDEN_DE_COMPRA";

  /**
   * Llave primaria de la tabla
   *
   * @var string
   */
  protected $primaryKey = "OC_COD";

  /**
   * Atributos que pueden ser asignados masivamente
   *
   * @var array
   */
  protected $fillable = [
      'OC_PRO_RUN',
      'OC_ARTICULO_ID',
      'OC_FECHA_CREACION',
      'OC_CANTIDAD',
      'OC_TOTAL',
      'OC_ESTADO',
      'OC_EJECUCION'
  ];
  **
   * Declara que la tabla no tenga timestamps
   *
   * @var boolean
   */
  public $timestamps = false;

  /**
   * Obtiene el proveedor asociado a la orden de compra
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function proveedor()
  {
      return $this->hasOne('App\Proveedor', 'PRO_RUN', 'PRO_PROVEEDOR');
  }

  /**
   * Obtiene el articulo asociado a la orden de compra
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function articulos()
  {
      return $this->hasMany('App\articulos', 'ART_ID', 'INV_ART_ARTICULOS');
  }
}
