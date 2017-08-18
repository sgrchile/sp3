<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaProducto extends Model
{
    //
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "INV_LVP_LISTA_VENTA_PRODUCTO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "LVP_V_ID";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'LVP_PROD_COD',
        'LVP_PROD_CANTIDAD',
        'LVP_TOTAL_VENTA'

    ];

    /**
     * Obtiene el producto asociado a la lista
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productos()
    {
        return $this->hasMany('App\productos', 'PROD_COD', 'INV_PROD_PRODUCTOS');
    }
}
