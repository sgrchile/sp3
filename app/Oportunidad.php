<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oportunidad extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "OPORTUNIDAD";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_OPORTUNIDAD";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'NOMBRE','ID_CLIENTE','PROC_NEGOCIO','ETAPA','PROBABILIDAD','TASA','MONEDA','TOTAL','FEC_INGRESO','FEC_CIERRE',
        'CENT_NEGOCIO','EST_PROP'
    ];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
