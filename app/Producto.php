<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'PROD_PRODUCTOS';
    protected $primaryKey = "PROD_COD";
    public $timestamps = true;
    protected $fillable = [
    'PROD_COD', 'PROD_DESC', 'PROD_INFO', 'PROD_MARCA', 'PROD_PRECIO_VENTA', 'PROD_PRECIO_COSTO', 'PROD_CODIGO_BARRA', 'PROD_EXISTENCIAS',
    'PROD_URL_FOTO', 'PROD_COMISION', 'PROD_FECHA_CREACION', 'PROD_MONEDA_VENTA', 'PROD_IMPUESTO', 'PROD_GARANTIAS', 'PROD_PUBLICO_OBJETIVO',
    'PROD_ESTADO', 'PROD_PRO_RUN'
  ];
  public function proveedor()
  {
    return $this->belongsTo('App\Proveedor', 'PRO_RUN', 'PROD_PRO_RUN');
  }
}
