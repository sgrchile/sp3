<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
  /**
   * El nombre de la tabla en la BD
   *
   * @var string
   */
  protected $table = "INV_ART_ARTICULOS";

  /**
   * Llave primaria de la tabla
   *
   * @var string
   */
  protected $primaryKey = "ART_OC_COD";

  /**
   * Atributos que pueden ser asignados masivamente
   *
   * @var array
   */
  protected $fillable = [
      'ART_DESC',
      'ART_COSTO',
      'ART_MARCA',
      'ART_TIPO',
      'ART_CANTIDAD',
      'ART_OC_COD'
  ];


  /**
   * Declara que la tabla no tenga timestamps
   *
   * @var boolean
   */
  public $timestamps = false;

  /**
   * Obtiene el articulo asociado a la orden de compra
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function ordenDeCompra()
  {
      return $this->hasMany('App\ordenDeCompra', 'ART_OC_COD', 'INV_ART_ARTICULOS');
  }
}
