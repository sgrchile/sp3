<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartolaBancaria extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "CB_CARTORLA_BANCARIA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "CB_ID";
    protected $fillable = ['CB_CTAEEMPRESA_CTAE_ID','CB_TMOV_ID','CB_CAUSA_ID','CB_DESC','CB_FECHA','CB_MONTO'];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la Empresa asociada a CartolaBancaria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'EMP_ID', 'CB_EMP_ID');
    }

    /**
     * Obtiene el TipoMovimiento asociado a CartolaBancaria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_movimiento()
    {
        return $this->hasOne('App\TipoMovimiento', 'TMOV_ID', 'CB_TMOV_ID');
    }

    /**
     * Obtiene el Banco asociado a CartolaBancaria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function banco()
    {
        return $this->hasOne('App\Banco', 'BCO_ID', 'CB_BCO');
    }

    /**
     * Obtiene la CuentaEmpresa asociada a CartolaBancaria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuenta_empresa()
    {
        return $this->hasOne('App\CuentaEmpresa', 'CTAE_ID', 'CB_CTAEEMPRESA_CTAE_ID');
    }

}
