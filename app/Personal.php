<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    /**caj
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "PER_PERSONAL";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "PER_RUT";


    /**
     * Retorna el PER_RUT sin castear a Int
     *
     * @var boolean
     */
    public $incrementing = false;

    /**
     * Obtiene el Cargo asociado a Personal
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cargo()
    {
        return $this->hasOne('App\Cargo', 'CAR_ID', 'PER_CAR_ID');
    }

    /**
     * Obtiene la Empresa asociada a Personal
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'EMP_ID', 'PER_EMP');
    }

    /**
     * Obtiene la OrdenTrabajo asociada a Personal
     */
    public function orden_trabajo()
    {
        return $this->belongsTo('App\OrdenTrabajo', 'OT_PER_RUT_ENCARGADO');
    }
}
