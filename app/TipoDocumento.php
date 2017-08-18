<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "TDC_TIPO_DOC";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "TDC_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el DocumentoRendicion asociado a TipoDocumento
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento_rendicion()
    {
        return $this->belongsTo('App\DocumentoRendicion', 'DOC_TIPO_DOC');
    }

    /**
     * Obtiene el DocumentoPendiente asociado a TipoDocumento
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento_pendiente()
    {
        return $this->belongsTo('App\DocumentoPendiente', 'TDC_TIPO_DOC_TDC_ID');
    }

    /**
     * Obtiene la Factura asociada a TipoDocumento
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function factura()
    {
        return $this->belongsTo('App\Factura', 'FCT_TP_ID');
    }

    /**
     * Obtiene el RegistroMovimiento asociado a Causa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registro_movimiento()
    {
        return $this->belongsTo('App\RegistroMovimiento', 'RMOV_TPDOC_ID');
    }
}
