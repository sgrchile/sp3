<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoOt extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "EST_OT";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_EST_OT";

    protected $fillable = ['DESC_EST_OT'];
}
