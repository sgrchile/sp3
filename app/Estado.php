<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "EST_ESTADO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "EST_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la SolicitudFondo asociada al Estado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solicitud_fondo()
    {
        return $this->belongsTo('App\SolicitudFondo', 'SF_EST');
    }

    /**
     * Obtiene el DocumentoPendiente asociado al Estado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento_pendiente()
    {
        return $this->belongsTo('App\DocumentoPendiente', 'DCP_EST');
    }

    /**
     * Obtiene la Factura asociada al Estado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function factura()
    {
        return $this->belongsTo('App\Factura', 'FCT_EST_ID');
    }

    /**
     * Obtiene el RegistroMovimiento asociado al Estado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registro_movimiento()
    {
        return $this->belongsTo('App\RegistroMovimiento', 'RMOV_EST_ID');
    }

    /**
     * Obtiene la OrdenTrabajo asociada al Estado
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estado()
    {
        return $this->belongsTo('App\Estado', 'OT_EST_ID');
    }
}
