<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProveedor extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "TP_TIPO_PROVEEDOR";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "TP_COD";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el Proveedor asociado a TipoProveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_TP_COD');
    }
}
