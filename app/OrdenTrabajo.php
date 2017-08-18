<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "OT_ORDEN_TRABAJO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "OT_ID";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'OT_OC',
        'OT_DESC',
        'OT_FECHA_INI',
        'OT_FECHA_FIN',
        'OT_MONTO_NETO',
        'OT_MARGEN_CASH',
        'OT_MARGEN_PORCENTUAL',
        'OT_CLI_RUT',
        'OT_EST_ID',
        'OT_PER_RUT_ENCARGADO',
        'OT_CENTRO_NEGOCIO_ID',
    ];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el Cliente asociado a OrdenTrabajo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'CLI_RUT', 'OT_CLI_RUT');
    }

    /**
     * Obtiene el Personal asociado a OrdenTrabajo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personal()
    {
        return $this->hasOne('App\Personal', 'PER_RUT', 'OT_PER_RUT_ENCARGADO');
    }

    /**
     * Obtiene el CentroNegocio asociado a OrdenTrabajo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function centro_negocio()
    {
        return $this->hasOne('App\CentroNegocio', 'CT_ID', 'OT_CENTRO_NEGOCIO_ID');
    }

    /**
     * Obtiene el Estado asociado a OrdenTrabajo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Estado', 'EST_ID', 'OT_EST_ID');
    }

    /**
     * Obtiene la SolicitudFondo asociada a OrdenTrabajo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solicitud_fondo()
    {
        return $this->belongsTo('App\SolicitudFondo', 'SF_OT_ID');
    }

    /**
     * Obtiene el DocumentoPendiente asociado a OrdenTrabajo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento_pendiente()
    {
        return $this->belongsTo('App\DocumentoPendiente', 'OT_ORDEN_TRABAJO_OT_ID');
    }

    /**
     * Obtiene la Factura asociada a OrdenTrabajo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function factura()
    {
        return $this->belongsTo('App\Factura', 'FCT_OT_ID');
    }
}
