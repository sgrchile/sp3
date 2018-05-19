<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizaciones extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "COTIZACIONES";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_COTIZ";

    protected $fillable = ['FEC_COTIZ','CLI_COTIZ','VAL_NETO_COTIZ','ID_VENDEDOR','EST_COTIZ','COMENT_COTIZ','EMP_COTIZ','ID_ITEMS'];
}
