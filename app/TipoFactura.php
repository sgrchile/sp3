<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoFactura extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "TFCT_TIPO_FACTURA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "TFCT_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la Factura asociada a TipoFactura
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function factura()
    {
        return $this->belongsTo('App\Factura', 'FCT_TP_ID');
    }
}
