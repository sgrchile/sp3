<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "CLI_CLIENTE2";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "CLI_ID";


    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'CLI_RUT',
        'CLI_FONO',
        'CLI_EMAIL',
        'CLI_NOMBRE',
        'CLI_FONO2',
        'CLI_ACT_COMERCIAL',
        'CLI_DIRECCION',
        'CLI_TCTA_BCO',
        'CLI_SITIO_WEB',
        'CLI_GLOSA',
        'CLI_RUBRO',
        'CLI_SUB_RUBRO',
        'CLI_ACTIVIDAD',
        'CLI_BANCO',
        'CLI_NRO_CTA',
        'CLI_ORIGEN',
        'CLI_PAIS',
        'CLI_REGION',
        'CLI_PROVINCIA',
        'CLI_CIUDAD',
        'CLI_TEMP'
    ];

    /**
     * Retorna el CLI_RUT sin castear a Int
     * 
     * @var boolean
     */
    public $incrementing = false;

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el TipoCuenta asociado a Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo_cuenta()
    {
        return $this->hasOne('App\TipoCuenta', 'TCTA_BCO', 'CLI_TCTA_BCO');
    }

    /**
     * Obtiene la OrdenTrabajo asociada a Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orden_trabajo()
    {
        return $this->belongsTo('App\OrdenTrabajo', 'OT_CLI_RUT');
    }

    /**
     * Obtiene la Factura asociada a Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function factura()
    {
        return $this->belongsTo('App\Factura', 'FCT_CLI_RUT');
    }

    /**
     * Obtiene el Proveedor asociado a Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_CAR_ID');
    }

    /**
     * Obtiene el Banco asociado a Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Banco()
    {
        return $this->hasMany('App\Banco');
    }

    /**
     * Obtiene el Rubro asociado a Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Rubro()
    {
        return $this->hasMany('App\Rubro');
    }

    /**
     * Obtiene el SubRubro asociado a Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function SubRubro()
    {
        return $this->hasMany('App\SubRubro');
    }

    /**
     * Obtiene el Pais asociado a Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pais()
    {
        return $this->hasOne('App\Pais');
    }

    /**
     * Obtiene la Region asociada a Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function region()
    {
        return $this->hasOne('App\Region');
    }

    /**
     * Obtiene la Provincia asociada a Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provincia()
    {
        return $this->hasOne('App\Provincia');
    }

    /**
     * Obtiene la Ciudad asociada a Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudad()
    {
        return $this->hasOne('App\Ciudad');
    }
}
