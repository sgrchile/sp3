<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuiaDespacho extends Model
{
  /**
   * El nombre de la tabla en la BD
   *
   * @var string
   */
  protected $table = "INV_GD_GUIA_DESPACHO";

  /**
   * Llave primaria de la tabla
   *
   * @var string
   */
  protected $primaryKey = "GD_COD";

  /**
   * Atributos que pueden ser asignados masivamente
   *
   * @var array
   */
  protected $fillable = [
      'GD_DIRECCION_ENTREGA',
      'GD_EMPRESA_PAQUETERIA',
      'GD_NUMERO_SEGUIMIENTO',
      'GD_OC_COD',
      'GD_ESTADO'
  ];
  /**
   * Declara que la tabla no tenga timestamps
   *
   * @var boolean
   */
  public $timestamps = false;

  /**
   * Obtiene la orden de compra asociado a la guia de despacho
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function ordenDeCompra()
  {
      return $this->hasOne('App\ordenDeCompra', 'OC_COD', 'INV_OC_ORDEN_DE_COMPRA');
  }

}
