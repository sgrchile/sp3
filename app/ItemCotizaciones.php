<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemCotizaciones extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "COTIZACION_ITEMS";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_COTIZ_ITEM";

    protected $fillable = ['ID_COTIZACION','TP_ITEM','ID_ITEM_COTIZ','DESC_ITEM_COTIZ','CANT_ITEM','VALOR_UNIT','VALOR_IMPUESTO','VALOR_TOTAL'];
}
