<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActActividad extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "ACT_ACTIVIDAD";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_ACT";

    /**
     * Atributos que pueden ser asignados masivamente
     *
     * @var array
     */
    protected $fillable = [
        'DESC_ACT','FECHA_ACT','HORA','ID_CLIENTE_ACT','CONTACT_ACT','NOM_CONT_ACT'
    ];

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
