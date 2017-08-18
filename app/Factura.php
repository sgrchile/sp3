<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "FCT_FACTURA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "FCT_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la Empresa asociada a Factura
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'EMP_ID', 'FCT_EMP_ID');
    }

    /**
     * Obtiene el TipoFactura asociado a Factura
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_factura()
    {
        return $this->hasOne('App\TipoFactura', 'TFCT_ID', 'FCT_TP_ID');
    }

    /**
     * Obtiene el TipoDocumento asociado a Factura
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_documento()
    {
        return $this->hasOne('App\TipoDocumento', 'TDC_ID', 'TDC_TIPO_DOC_TDC_ID');
    }

    /**
     * Obtiene el Cliente asociado a Factura
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'CLI_RUT', 'FCT_CLI_RUT');
    }

    /**
     * Obtiene la OrdenTrabajo asociada a DocumentoRendicion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function orden_trabajo()
    {
        return $this->hasOne('App\OrdenTrabajo', 'OT_ID', 'FCT_OT_ID');
    }

    /**
     * Obtiene el Estado asociado a DocumentoRendicion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Estado', 'EST_ID', 'FCT_EST_ID');
    }
}
