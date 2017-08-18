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
    protected $table = "CLI_CLIENTE";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "CLI_RUT";

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
        'CLI_CONTACTO',
        'CLI_ACT_COMERCIAL',
        'CLI_DIRECCION',
        'CLI_TCTA_BCO',
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
}
