<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RetiroInsumo extends Model
{
  /**
   * El nombre de la tabla en la BD
   *
   * @var string
   */
  protected $table = "INV_RI_RETIRO_INSUMOS";

  /**
   * Llave primaria de la tabla
   *
   * @var string
   */
  protected $primaryKey = "RI_ID";

  /**
   * Atributos que pueden ser asignados masivamente
   *
   * @var array
   */
  protected $fillable = [
      'RI_INS_COD',
      'RI_PRO_RUN',
      'RI_FECHA_SOLICITUD',
      'RI_FECHA_ENTREGA',
      'RI_ESTADO',
      'RI_MOTIVO',
      'RI_CANTIDAD',
      'RI_TOTAL',
      'RI_PRO_RUN',
      'RI_INS_COD'
  ];

  /**
   * Declara que la tabla no tenga timestamps
   *
   * @var boolean
   */
  public $timestamps = false;

  /**
   * Obtiene el Proveedor asociado al retiro
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function proveedor()
  {
      return $this->hasOne('App\Proveedor', 'PRO_RUN', 'PRO_PROVEEDOR');
  }

  /**
   * Obtiene el insumo  asociado al retiro
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function proveedor()
  {
      return $this->hasMany('App\Insumos', 'INS_COD', 'INV_INS_INSUMOS');
  }


}
