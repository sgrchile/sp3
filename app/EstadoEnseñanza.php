<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoEnseñanza extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "EST_ENSEÑANZA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_EST_ENS";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
