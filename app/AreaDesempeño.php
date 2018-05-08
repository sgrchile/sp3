<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaDesempeño extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "AREA_DESEMP";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_AREA_DESEMP";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
