<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuentaEmpresa extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "CTAE_CUENTA_EMPRESA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "CTAE_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la Empresa asociada a CuentaEmpresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'EMP_ID', 'CTAE_EMP_ID');
    }

    /**
     * Obtiene el Banco asociado a CuentaEmpresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function banco()
    {
        return $this->hasOne('App\Banco', 'BCO_ID', 'CTAE_BCO_ID');
    }

    /**
     * Obtiene la SolicitudFondo asociada a CuentaEmpresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solicitud_fondo()
    {
        return $this->belongsTo('App\SolicitudFondo', 'SF_CTAC');
    }

    /**
     * Obtiene la CartolaBancaria asociada a CuentaEmpresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cartola_bancaria()
    {
        return $this->belongsTo('App\CartolaBancaria', 'CB_CTAEEMPRESA_CTAE_ID');
    }

    /**
     * Obtiene el RegistroMovimiento asociado a CuentaEmpresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registro_movimiento()
    {
        return $this->belongsTo('App\RegistroMovimiento', 'RMOV_CTAE');
    }
}
