<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroNegocio extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "CT_CENTRO_NEGOCIO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "CT_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene la Empresa asociada a CentroNegocio
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'EMP_ID', 'CT_EMP_ID');
    }

    /**
     * Obtiene el Proceso asociado a CentroNegocio
     */
    public function proceso()
    {
        return $this->hasOne('App\Proceso', 'PRO_ID', 'CT_PRO_ID');
    }

    /**
     * Obtiene la OrdenTrabajo asociada a Personal
     */
    public function orden_trabajo()
    {
        return $this->belongsTo('App\OrdenTrabajo', 'OT_CENTRO_NEGOCIO_ID');
    }
}
