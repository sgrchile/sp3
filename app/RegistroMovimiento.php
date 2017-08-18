<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroMovimiento extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "RMOV_REGISTRO_MOVIMIENTO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "RMOV_ID";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'RMOV_FECHA',
        'RMOV_MONTO',
        'RMOV_N_CTA',
        'RMOV_FOLIO',
        'RMOV_NUMERO_DOCUMENTO',
        'RMOV_DESC',
        'RMOV_EMP_ID',
        'RMOV_CTAE',
        'RMOV_TMOV_ID',
        'RMOV_FTE_ID',
        'RMOV_CAU_ID',
        'RMOV_EST_ID',
        'RMOV_TPDOC_ID',
    ];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la Empresa asociada a RegistroMovimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'EMP_ID', 'RMOV_EMP_ID');
    }

    /**
     * Obtiene la CuentaEmpresa asociada a RegistroMovimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuenta_empresa()
    {
        return $this->hasOne('App\CuentaEmpresa', 'CTAE_ID', 'RMOV_CTAE');
    }

    /**
     * Obtiene el TipoMovimiento asociado a RegistroMovimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_movimiento()
    {
        return $this->hasOne('App\TipoMovimiento', 'TMOV_ID', 'RMOV_TMOV_ID');
    }

    /**
     * Obtiene la Fuente asociada a RegistroMovimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fuente()
    {
        return $this->hasOne('App\Fuente', 'FTE_ID', 'RMOV_FTE_ID');
    }

    /**
     * Obtiene la Causa asociada a RegistroMovimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function causa()
    {
        return $this->hasOne('App\Causa', 'CAU_ID', 'RMOV_CAU_ID');
    }

    /**
     * Obtiene el Estado asociado a RegistroMovimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Estado', 'EST_ID', 'RMOV_EST_ID');
    }

    /**
     * Obtiene el TipoDocumento asociado a RegistroMovimiento
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_documento()
    {
        return $this->hasOne('App\TipoDocumento', 'TDC_ID', 'RMOV_TPDOC_ID');
    }
}
