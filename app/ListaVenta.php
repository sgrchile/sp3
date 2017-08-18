<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaVenta extends Model
{
  //
  /**
   * El nombre de la tabla en la BD
   *
   * @var string
   */
  protected $table = "INV_LVS_LISTA_VENTA_SERVICIOS";

  /**
   * Llave primaria de la tabla
   *
   * @var string
   */
  protected $primaryKey = "LVS_V_ID";

  /**
   * Atributos que pueden ser asignados masivamente
   *
   * @var array
   */
  protected $fillable = [
      'LVS_SER_COD',
      'LVS_SER_CANTIDAD',
      'LVS_TOTAL_VENTA'

  ];

  /**
   * Obtiene el servicio asociado a la lista

   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function servicios()
  {
      return $this->hasMany('App\servicios', '{PROD_COD', 'INV_PROD_PRODUCTOS');
  }
}
