<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "EMP_EMPRESA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "EMP_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la CuentaEmpresa asociada a la Empresa
     */
    public function cuenta_empresa()
    {
        return $this->belongsTo('App\CuentaEmpresa', 'CTAE_EMP_ID');
    }

    /**
     * Obtiene el Personal asociado a la Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personal()
    {
        return $this->belongsTo('App\Personal', 'PER_EMP');
    }

    /**
     * Obtiene el CentroNegocio asociado a la Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function centro_negocio()
    {
        return $this->belongsTo('App\CentroNegocio', 'CT_PRO_ID');
    }

    /**
     * Obtiene la SolicitudFondo asociada a la Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solicitud_fondo()
    {
        return $this->belongsTo('App\SolicitudFondo', 'SF_EMP_ID');
    }

    /**
     * Obtiene el DocumentoRendicion asociado a la Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento_rendicion()
    {
        return $this->belongsTo('App\DocumentoRendicion', 'DOC_EMP_ID');
    }

    /**
     * Obtiene la CartolaBancaria asociada a la Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cartola_bancaria()
    {
        return $this->belongsTo('App\CartolaBancaria', 'CB_EMP_ID');
    }

    /**
     * Obtiene el DocumentoPendiente asociado a la Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento_pendiente()
    {
        return $this->belongsTo('App\DocumentoPendiente', 'EMP_EMPRESA_EMP_ID');
    }

    /**
     * Obtiene la Factura asociada a la Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function factura()
    {
        return $this->belongsTo('App\Factura', 'FCT_EMP_ID');
    }

    /**
     * Obtiene el RegistroMovimiento asociado a la Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registro_movimiento()
    {
        return $this->belongsTo('App\RegistroMovimiento', 'RMOV_EMP_ID');
    }

    /**
     * Obtiene el Proveedor asociado a Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_EMP');
    }
}
