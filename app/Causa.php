<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Causa extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "CAU_CAUSA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "CAU_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la SolicitudFondo asociada a Causa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solicitud_fondo()
    {
        return $this->belongsTo('App\SolicitudFondo', 'SF_CAU_ID');
    }

    /**
     * Obtiene el RegistroMovimiento asociado a Causa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registro_movimiento()
    {
        return $this->belongsTo('App\RegistroMovimiento', 'RMOV_CAU_ID');
    }
}
