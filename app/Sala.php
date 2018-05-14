<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "SALAS";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "SALA_ID";

    /**
     * Declara que la tabla no tenga timestamps
     *
     * @var boolean
     */
    public $timestamps = false;
}
