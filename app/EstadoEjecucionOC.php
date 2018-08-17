<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoEjecucionOC extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "EST_EJECUCION_OC";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_EST_EJEC";

    protected $fillable = ['DESC_EST_EJEC'];
}
