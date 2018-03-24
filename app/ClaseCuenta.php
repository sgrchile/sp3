<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClaseCuenta extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "CLASE_CUENTA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_CL_CUENTA";

    protected $fillable = ['DESC_CL_CUENTA'];

}
