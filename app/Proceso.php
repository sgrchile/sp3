<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "PRO_PROCESO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "PRO_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Obtiene el CentroNegocio asociado al Proceso
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function centro_negocio()
    {
        return $this->belongsTo('App\CentroNegocio', 'CT_PRO_ID');
    }


    public function etapas() {
        return $this->hasMany('Etapa');
    }
}
