<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TpActividad extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = 'TP_ACTIVIDAD';

    protected $fillable = 'DESC_TP_ACTIVIDAD';

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_TP_ACTIVIDAD";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
