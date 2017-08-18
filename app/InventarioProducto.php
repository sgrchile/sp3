<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarioProducto extends Model
{
    //
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "INV_PROD_PRODUCTOS";

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
        'PROD_PRO_RUN',
        'PROD_DESC',
        'PROD_INFO',
        'PROD_MARCA',
        'PROD_PRECIO_VENTA',
        'PROD_PRECIO_COSTO',
        'PROD_CODIGO_BARRA',
        'PROD_EXISTENCIAS',
        'PROD_URL_FOTO',
        'PROD_COMISION',
        'PROD_FECHA_CREACION',
        'PROD_MONEDA_VENTA',
        'PROD_IMPUESTO',
        'PROD_GARANTIAS',
        'PROD_PUBLICO_OBJETIVO',
        'PROD_MARGEN',
        'PROD_COMISION_VENTA',
        'PROD_DSCTO_MAX'
    ];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el proveedor asociado al producto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
    *public function proveedor()
    *{
    *    return $this->belongsTo('App\Proveedor', 'PRO_RUN', 'PRO_PROVEEDOR');
    *}
    */
}
