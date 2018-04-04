<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuentaContable extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "CUENTA_CONTABLE";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_CTA_CONT";

    protected $fillable = ['NOM_CTA_CONT','MONTO_CTA_CONT','USUARIO_CTA_CONT'];

    /**
     * Obtiene el TipoCuenta asociado a la cuenta contable
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function tpcuenta()
    {
        return $this->hasOne('App\Tp_Cuenta');
    }

    /**
     * Obtiene el ClaseCuenta asociado a la cuenta contable
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function clcuenta()
    {
        return $this->hasOne('App\ClaseCuenta');
    }
}
