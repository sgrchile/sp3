<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoReserva extends Model
{
    /**
     * El nombre de la tabla en la BD
     *
     * @var string
     */
    protected $table = "EST_RESERVA";

    /**
     * Llave primaria de la tabla
     *
     * @var string
     */
    protected $primaryKey = "ID_EST_RES";

    protected $fillable = ['DESC_EST_RES'];
}
