<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoProveedor extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "EP_ESTADO_PROVEEDOR";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "EP_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el Proveedor asociado a EstadoProveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_ESTADO_PERSONAL');
    }
}
