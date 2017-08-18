<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarioServicio extends Model
{
      /**
       * El nombre de la tabla en la BD
       *
       * @var string
       */
      protected $table = "INV_SER_SERVICIOS";

      /**
       * Llave primaria de la tabla
       *
       * @var string
       */
      protected $primaryKey = "SER_COD";

      /**
       * Atributos que pueden ser asignados masivamente
       *
       * @var array
       */
      protected $fillable = [
          'SER_PRO_RUN',
          'SER_DESC',
          'SER_ESTADO',
          'SER_UNIDAD_MEDIDA',
          'SER_PRECIO_COSTO',
          'SER_PRECIO_VENTA',
          'SER_CANTIDAD',
          'SER_TIEMPO_EJECUCION',
          'SER_GARANTIAS',
          'SER_PUBLICO_OBJETIVO',
          'SER_CAPACIDAD_EJECUCION',
          'SER_IMPUESTO',
          'SER_FECHA_CREACION',
          'SER_MONEDA_VENTA',
          'SER_MARGEN',
          'SER_COMISION_VENTA',
          'SER_DESCTO_MAX'
      ];

      /**
       * Declara que la tabla no tenga timestamps
       *
       * @var boolean
       */
      public $timestamps = false;

      /**
       * Obtiene el proveedor asociado al servicio
       *
       * @return \Illuminate\Database\Eloquent\Relations\HasOne
       */
      public function proveedor()
      {
          return $this->hasOne('App\Proveedor', 'PRO_RUN', 'PRO_PROVEEDOR');
      }
}
