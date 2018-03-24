<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCuenta extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "TCTA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "TCTA_BCO";

    protected $fillable = ['TCTA_DESC'];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el Cliente asociado al TipoCuenta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'CLI_TCTA_BCO');
    }

    /**
     * Obtiene la SolicitudFondo asociada al TipoCuenta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solicitud_fondo()
    {
        return $this->belongsTo('App\SolicitudFondo', 'SF_TIPO_CTA_BCO');
    }

    /**
     * Obtiene el Proveedor asociado a TipoCuenta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'PRO_TCTA_BCO');
    }
}
