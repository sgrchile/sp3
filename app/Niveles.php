<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveles extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "NV_NIVELES";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "NIVELES_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
