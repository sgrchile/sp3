<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
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
  protected $primaryKey = "V_ID";

  /**
   * Atributos que pueden ser asignados masivamente
   *
   * @var array
   */
  protected $fillable = [
      'V_FECHA',
      'V_TOTAL_BRUTO',
      'V_TOTAL_NETO',
      'V_TOTAL_COMISION',
      'V_IVA',
      'V_PRO_RUN',
      'V_FP_ID',
      'V_ESTADO'
  ];

  **
   * Declara que la tabla no tenga timestamps
   *
   * @var boolean
   */
  public $timestamps = false;

  /**
   * Obtiene el proveedor asociado al voucher
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function proveedor()
  {
      return $this->hasOne('App\Proveedor', 'PRO_RUN', 'PRO_PROVEEDOR');
  }

  /**
   * Obtiene la forma de pago asociado al voucher
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function formaDePago()
  {
      return $this->hasOne('App\Proveedor', 'FP_ID', 'INV_FP_FORMA_DE_PAGO');
  }
}
