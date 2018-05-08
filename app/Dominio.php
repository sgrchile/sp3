<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dominio extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "DOMINIO";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_DOMINIO";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
