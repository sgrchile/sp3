<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "BCO_BANCO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "BCO_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la CuentaEmpresa asociada al Banco
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cuenta_empresa()
    {
        return $this->belongsTo('App\CuentaEmpresa', 'CTAE_EMP_ID');
    }

    /**
     * Obtiene la SolicitudFondo asociada al Banco
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solicitud_fondo()
    {
        return $this->belongsTo('App\SolicitudFondo', 'SF_BCO_ID');
    }

    /**
     * Obtiene la CartolaBancaria asociada al Banco
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cartola_bancaria()
    {
        return $this->belongsTo('App\CartolaBancaria', 'CB_BCO');
    }

    /**
     * Obtiene el Proveedor asociado a Banco
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_BCO_ID');
    }
}
