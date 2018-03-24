<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Proveedor extends Authenticatable
{
    use Notifiable;

    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "PRO_PROVEEDOR";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "PRO_RUN";

    protected $fillable = [
    'PRO_RUN',
    'PRO_NOMBRE',
    'PRO_APE_PAT',
    'PRO_APE_MAT',
    'PRO_SEXO',
    'PRO_DIRECCION',
    'PRO_NACIONALIDAD',
    'PRO_SEG_MED',
    'PRO_AFP',
    'PRO_N_CUENTA',
    'PRO_RAZON_SOCIAL',
    'PRO_TEL',
    'PRO_CELULAR',
    'PRO_RUT',
    'PRO_FECHA_PAGO',
    'PRO_CONTACTO_SECUNDARIO',
    'PRO_PAGINA_WEB',
    'PRO_FACEBOOK',
    'PRO_EMAIL',
    'PRO_GIRO',
    'password',
    'PRO_REFERENCIA',
    'PRO_RUBRO',
    'PRO_SUBRUBRO',
    'PRO_CONTRATO',
    'PRO_FECHA_NAC',
    'remember_token',
    'PRO_CAR_ID',
    'PRO_EMP',
    'PRO_ESTADO_PERSONAL',
    'PRO_TP_COD',
    'PRO_BCO_ID',
    'PRO_TCTA_BCO',
    'PRO_PAI_COD',
    'PRO_PV_COD',
    'PRO_REG_COD',
    'PRO_CIU_COD',
  ];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Retorna el PRO_RUN sin castear a Int
     *
     * @var boolean
     */
    public $incrementing = false;

    /**
     * Obtiene el Cargo asociado a Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Cargo', 'CAR_ID', 'PRO_CAR_ID');
    }

    /**
     * Obtiene la Empresa asociada a Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'EMP_ID', 'PRO_EMP');
    }

    /**
     * Obtiene el EstadoProveedor asociado a Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado_proveedor()
    {
        return $this->hasOne('App\EstadoProveedor', 'EP_ID', 'PRO_ESTADO_PERSONAL');
    }

    /**
     * Obtiene el TipoProveedor asociado a Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_proveedor()
    {
        return $this->hasOne('App\TipoProveedor', 'TP_COD', 'PRO_TP_COD');
    }

    /**
     * Obtiene el Banco asociado a Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function banco()
    {
        return $this->hasOne('App\Banco', 'BCO_ID', 'PRO_BCO_ID');
    }

    /**
     * Obtiene el TipoCuenta asociado a Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_cuenta()
    {
        return $this->hasOne('App\TipoCuenta', 'TCTA_BCO', 'PRO_TCTA_BCO');
    }

    /**
     * Obtiene el Pais asociado a Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pais()
    {
        return $this->hasOne('App\Pais', 'PAI_COD', 'PRO_PAI_COD');
    }

    /**
     * Obtiene la Region asociada a Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function region()
    {
        return $this->hasOne('App\Region', 'REG_COD', 'PRO_REG_COD');
    }

    /**
     * Obtiene la Provincia asociada a Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provincia()
    {
        return $this->hasOne('App\Provincia', 'PV_COD', 'PRO_PV_COD');
    }

    /**
     * Obtiene la Ciudad asociada a Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudad()
    {
        return $this->hasOne('App\Ciudad', 'CIU_COD', 'PRO_CIU_COD');
    }

    /**
     * Obtiene el DocumentoPendiente asociado al Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento_pendiente()
    {
        return $this->belongsTo('App\DocumentoPendiente', 'DCP_PRO_RUT');
    }
    public function rubro()
    {
        return $this->hasOne('App\Rubro', 'RUB_COD', 'PRO_RUB_COD');
    }
    /**
     * Obtiene el SubRubro asociado al Proveedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function SubRubro()
    {
        return $this->hasMany('App\SubRubro', 'SUB_RUB_COD', 'PRO_SUBRUBRO');
    }

    public function servicio()
    {
      return $this->hasMany('App\Servicio', 'SER_PRO_RUN', 'PRO_RUN');
    }

    public function producto()
    {
      return $this->hasMany('App\Producto', 'PROD_PRO_RUN', 'PRO_RUN');
    }

    public function servicio_profesional()
    {
      return $this->hasMany('App\ServicioProfesional', 'STP_PRO_RUN', 'PRO_RUN');
    }

    public function oferta_articulo()
    {
      return $this->hasMany('App\OfertaArticulo', 'OFAR_PRO_RUN', 'PRO_RUN');
    }

    public function arriendo_maquinaria()
    {
      return $this->hasMany('App\ArriendoMaquinaria', 'ARM_PRO_RUN', 'PRO_RUN');
    }

    public function oferta_servicio()
    {
      return $this->hasMany('App\OfertaServicio', 'OFSER_PRO_RUN', 'PRO_RUN');
    }
}
