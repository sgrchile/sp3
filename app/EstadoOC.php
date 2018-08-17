<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoOC extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "EST_ORDEN_COMPRA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "EST_OC_ID";

    protected $fillable = ['EST_OC_DESC'];
}
