<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoPendiente extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "DCP_DOCUMENTOS_PENDIENTES";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "DCP_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la Empresa asociada a DocumentoRendicion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'EMP_ID', 'EMP_EMPRESA_EMP_ID');
    }

    /**
     * Obtiene el TipoDocumento asociado a DocumentoRendicion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_documento()
    {
        return $this->hasOne('App\TipoDocumento', 'TDC_ID', 'TDC_TIPO_DOC_TDC_ID');
    }

    /**
     * Obtiene la OrdenTrabajo asociada a DocumentoRendicion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function orden_trabajo()
    {
        return $this->hasOne('App\OrdenTrabajo', 'OT_ID', 'OT_ORDEN_TRABAJO_OT_ID');
    }

    /**
     * Obtiene el Estado asociado a DocumentoRendicion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Estado', 'EST_ID', 'DCP_EST');
    }

    /**
     * Obtiene el Proveedor asociado a DocumentoRendicion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedor()
    {
        return $this->hasOne('App\Proveedor', 'PRO_RUT', 'DCP_PRO_RUT');
    }
}
