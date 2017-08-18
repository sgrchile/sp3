<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudFondo extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "SF_SOLICITUD_FONDO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "SF_SOLICITUD_ID";

    protected $fillable = [
      'SF_ASOCIADO_A',
    	'SF_RECEPTOR',
    	'SF_N_CTA_RECEPTOR',
    	'SF_SOLICITANTE_RUT',
    	'SF_RECEPTOR_RUT',
    	'SF_MONTO',
    	'SF_FECHA',
    	'SF_DESC',
      'SF_MONTO_RENDIDO',
      'SF_DIFERENCIA',
    	'SF_CAU_ID',
    	'SF_EMP_ID',
    	'SF_BCO_ID',
    	'SF_TIPO_CTA_BCO',
    	'SF_EST',
    	'SF_CTAC',
    	'SF_OT_ID',
  ];
    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la Causa asociada a SolicitudFondo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function causa()
    {
        return $this->hasOne('App\Causa', 'CAU_ID', 'SF_CAU_ID');
    }

    /**
     * Obtiene la Empresa asociada a SolicitudFondo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'EMP_ID', 'SF_EMP_ID');
    }

    /**
     * Obtiene el Banco asociado a SolicitudFondo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function banco()
    {
        return $this->hasOne('App\Banco', 'BCO_ID', 'SF_BCO_ID');
    }

    /**
     * Obtiene el TipoCuenta asociado a SolicitudFondo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_cuenta()
    {
        return $this->hasOne('App\TipoCuenta', 'TCTA_BCO', 'SF_TIPO_CTA_BCO');
    }

    /**
     * Obtiene el Estado asociado a SolicitudFondo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Estado', 'EST_ID', 'SF_EST');
    }

    /**
     * Obtiene la CuentaEmpresa asociada a SolicitudFondo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuenta_empresa()
    {
        return $this->hasOne('App\CuentaEmpresa', 'CTAE_ID', 'SF_CTAC');
    }

    /**
     * Obtiene la OrdenTrabajo asociada a SolicitudFondo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function orden_trabajo()
    {
        return $this->hasOne('App\OrdenTrabajo', 'OT_ID', 'SF_OT_ID');
    }

    /**
     * Obtiene el DocumentoRendicion asociado a SolicitudFondo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento_rendicion()
    {
        return $this->belongsTo('App\DocumentoRendicion', 'DOC_SOLICITUD_ID');
    }
}
